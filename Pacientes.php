<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/layout.css">
    <title>Buscar</title>

</head>
<main class="mt-3">
    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Ações</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Celular</th>
                </tr>
            </thead>
            <tbody>
                <?php
                spl_autoload_register(function ($class) {
                    require_once "./Classes/{$class}.class.php";
                });
                $paciente = new Paciente();
                $dadosBanco = $paciente->listar();
                while ($row = $dadosBanco->fetch_object()) {
                    ?>
                    <tr>
                        <td>
                            <a href="pacienteGer.php?id=<?php echo $row->idPac ?>" class="btn btn-secondary">
                                <span class="material-symbols-outlined">
                                    edit_square
                                </span>
                            </a>
                            <a href="#" class="btn btn-danger">

                                <span class="material-symbols-outlined">
                                    delete
                                </span>
                            </a>
                        </td>
                        <td><img src="imagensPac/<?php echo $row->fotoPac; ?>"
                                alt="Foto do Paciente <?php echo $row->nomePac; ?>" class="imgRed">
                        </td>
                        <td>
                            <?php echo $row->nomePac; ?>
                        </td>
                        <td>
                            <?php echo $row->emailPac; ?>
                        </td>
                        <td>
                            <?php echo $row->celularPac; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="col-12">
            <a href="pacienteGer.php" class="btn btn-primary">
                <span class="material-symbols-outlimed">
                </span> Novo Paciente
            </a>
        </div>
    </div>
</main>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>