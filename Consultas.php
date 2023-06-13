<?php
spl_autoload_register(function($class){
    require_once "./Classes/{$class}class.php";
}); 
if (filter_has_var(INPUT_POST, 'consultaCon')){
$editPac = filter_input(INPUT_POST, 'consultaCon');
} else {
?>
    <script>
        alert("Nenhum consulta selecionado");
        window.location.hert = "consultas.php"
        </script>
        <?php
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Consultas de </title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Clinica IFRO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="consultas.php">Paciente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Medico.php">Médico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Especialidade.php">Especialidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Consultas.php">Consultas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

    <header>
        <main class="mt-3">
            <div class="d-flex flex-row-reverse">
                <a href="ConsultaGer.php" class="btn btn-info"> Nova Consulta
            </div>
            <table class="table mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Medico</th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    spl_autoload_register(function ($class) {
                        require_once "./Classes/{$class}.class.php";
                    });
                    $consulta = new Consulta();
                    if(filter_has_var(INPUT_POST, 'txtPesquisar')){
                        $consulta = filter_input(INPUT_POST, 'txtPesquisar');
                        $where = "where (nomePac like '%$parametro%') or (emailPac like '%$parametro%')";
                        $dadosBanco = $consulta->listar($where);
                    } else{
                        $dadosBanco = $consulta->listar();
                    }
                
                    
                    while ($row = $dadosBanco->fetch_object()) {
                        ?>
                        <tr>
                            <td>
                                <a href="consultaGer.php?id=<?php echo $row->idPac ?>" class="btn btn-secondary">
                                    <span class="material-symbols-outlined">
                                        edit_square
                                    </span>
                                </a>
                                <a href="consultaGer.php?idDel=<?php echo $row->idPac ?>"
                                class="btn btn-danger" >

                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </a>
                                <form action="consultas.php" method=
                            
                            <td>
                                <?php echo $row->pacientePac; ?>
                            </td>
                            <td>
                                <?php echo $row->medicoPac; ?>
                            </td>
                            <td>
                                <?php echo $row->dataPac; ?>
                            </td>
                            <td>
                                <?php echo $row->horaPac; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
         </a>
            </div>
        </div>

        </main>
    </header>

    