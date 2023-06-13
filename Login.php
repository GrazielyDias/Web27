<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Login</title>
</head>




<main>


        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Clinica IFRO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container">
                <h2>Login</h2>
                <div class="col-md-6">
                    <label for="txtUsuario" class="form-label">Usuario</label>
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
