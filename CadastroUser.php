<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Usuario</title>
</head>

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
                $Usuario = new Usuario();
                $editUse = $Usuario->buscar('idUse', $id);
            }

            if (filter_has_var(INPUT_GET, "idDel")) {
                $id = filter_input(INPUT_GET, 'idDel');
                $Usuario = new Usuario();
               If ($Usuario->deletar('idUse', $id)) {
                header('location: Usuarios.php');
               }

            }

            if (filter_has_var(INPUT_POST, 'btnGravar'))
             {
                $Usuario = new Usuario();
                $id=filter_input(INPUT_POST, 'txtId');
                if (filter_has_var(INPUT_GET, 'id')) {
                    $Usuario = new Usuario();
                    $id = filter_input(INPUT_GET, 'id');
                }


                $Usuario = new Usuario();
                $Usuario->setNomeUse(filter_input(INPUT_POST, 'txtNome'));
                $Usuario->setEmailUse(filter_input(INPUT_POST, 'txtEmail'));
                $Usuario->setcelularUse(filter_input(INPUT_POST, 'txtCelular'));
                    if (empty($id)){
                    $Usuario->inserir();
                }else{
                $Usuario->atualizar('idUse', $id);
                }
            }
            ?>

            <form class="row g-3" action="<?php echo
                htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <input type= "hidden" name="txtId" value="<?php echo isset ($editUse->idUse)?$editUse->idUse:null;?>">
            <input type="hidden" name="nomeAntigo" value="<?php isset ($editUse->fotoUse)?$editUse->fotoUse:null;?>">

                <div class="col-12">
                    <label for="txtNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Digite seu nome..." name="txtNome"
                        value="<?php echo isset($editUse->nomeUse) ? $editUse->nomeUse : Null; ?>">
                <div class="col-12">
                    <label for="txtEmail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="txtEmail" placeholder="Digite seu email..."
                        name="txtEmail"                       
                          value="<?php echo isset($editUse->emailUse) ? $editUse->emailUse : Null; ?>">
                </div>
                <div class="col-md-6">
                    <label for="txtCelular" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="txtCelular" name="txtCelular"                         
                        value="<?php echo isset($editUse->celularUse) ? $editUse->celularUse : Null; ?>">
                </div>
                <div class="col-12">
                    <label for="txtUsuario" class="form-label">Userario</label>
                    <input type="text" class="form-control" id="txtUsuario" placeholder="Digite seu usuário..." name="txtUsuario"
                        value="<?php echo isset($editUse->usuarioUse) ? $editUse->usuarioUse : Null; ?>">
                </div>
                <div class="col-md-6">
                    <label for="txtSenha" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="txtSenha" name="txtSenha"                         
                        value="<?php echo isset($editUse->senhaUse) ? $editUse->senhaUse : Null; ?>">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btnGravar">Salvar</button>
                </div>

            </form>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>