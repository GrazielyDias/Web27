<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Médico</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Clinica Do IFRO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Especialidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">medico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Médico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Consultas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>

        <div class="container">
            <?php
            spl_autoload_register(
                function ($class) {
                    require_once "./Classes/{$class}.class.php";
                }
            );

            if (filter_has_var(INPUT_GET, "id")) {
                $id = filter_input(INPUT_GET, 'id');
                $medico = new Medico();
                $editMed = $medico->buscar('idMed', $id);
            }

            if (filter_has_var(INPUT_POST, 'btnGravar')) {

                $medico = new Medico();
                $id=filter_input(INPUT_POST, 'txtId');
                if (filter_has_var(INPUT_GET, 'id')) {
                    $medico = new Medico();
                    $id = filter_input(INPUT_GET, 'id');
                }


                $medico = new Medico();
                $medico->setEspecialidadeMed(filter_input(INPUT_POST, 'sltEspecialidade'));
                $medico->setNomeMed(filter_input(INPUT_POST, 'txtNome'));
                $medico->setCrmMed(filter_input(INPUT_POST, 'txtCrm'));
                $medico->setcelularMed(filter_input(INPUT_POST, 'txtCelular'));
                if (empty($id)){
                    $medico->inserir();
                }else{
                $medico->atualizar('idMed', $id);
                }
            }
            ?>

            <form class="row g-3" action="<?php echo
                htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <input type= "hidden" name="txtId" value="<?php echo isset ($editMed->idMed)?$editMed->idMed:null;?>">
            <input type="hidden" name="nomeAntigo" value="<?php isset ($editMed->fotoMed)?$editMed->fotoMed:null;?>">

                <div class="col-12">
                    <label for="txtNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Digite seu nome..." name="txtNome"
                        value="<?php echo isset($editMed->nomeMed) ? $editMed->nomeMed : Null; ?>">
                </div>
               
                <div class="col-md-6">
                    <label for="sltEspecialidade" class="form-label">Especialidade</label>
                    <select id="sltEspecialidade" class="form-select" name="sltEspecialidade">
                        <?php $espSel = isset($medEdit->especialidadeMed)?
                        $medEdit->especialidadeMed: null; ?>
                        <option value="" selected hidden>Escolha...</option><?php

                        $especialidade = new Especialidade;
                        $dadosBanco = $especialidade->listar();
                        while ($row = $dadosBanco->fetch_object()){
                            ?>
                            <option value="<?php echo $row->idEsp ?>"
                            <?php if ($espSel == $row->idEsp){
                                echo 'selected';
                            }?>>
                            <?php echo $row->NomeEsp?>
                            </option>
                          
                        <?php }?>
                    </select>

                </div>
               

                <div class="col-md-2">
                    <label for="txtCrm" class="form-label">Crm</label>
                    <input type="text" class="form-control" id="txtCrm" name="txtCrm"
                        value="<?php echo isset($editMed->CrmMed) ? $editMed->CrmMed : Null; ?>">
                </div>
                <div class="col-12">
                    <label for="txtEmail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="txtEmail" placeholder="Digite seu email..."
                        name="txtEmail"                       
                          value="<?php echo isset($editMed->emailMed) ? $editMed->emailMed : Null; ?>">
                </div>                
                <div class="col-md-6">
                    <label for="txtCelular" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="txtCelular" name="txtCelular"                         
                        value="<?php echo isset($editMed->celularMed) ? $editMed->celularMed : Null; ?>">
                </div>                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btnGravar">Gravar</button>
                </div>
            </form>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>