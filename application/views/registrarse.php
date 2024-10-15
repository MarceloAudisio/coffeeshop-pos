<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=TITULO_APP?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Registrase</h2>
                <form method="POST" action="<?php echo site_url("auth/registrarse");?>">
                    <div class="mt-3">
                        <label for="usuario">Nuevo Usuario</label>
                        <input type="text" class="form-control <?=(form_error("usuario"))?"is-invalid":""?>" id="usuario" name="usuario" value="<?=set_value("usuario")?>">
                        <div id="usuario_invalido" class="invalid-feedback">
                            <?php echo form_error("usuario"); ?>
                        </div>
                    </div>
                    <div class="mt-3">

                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control <?=(form_error("password"))?"is-invalid":""?>" id="password" name="password">
                        <div id="password" class="invalid-feedback">
                            <?php echo form_error("password"); ?>
                        </div>
                    </div>
                    <div class="mt-3">

                        <label for="conf-password">Confirmar Contraseña</label>
                        <input type="password" class="form-control <?=(form_error("conf-password"))?"is-invalid":""?>" id="conf-password" name="conf-password">
                        <div id="conf-password" class="invalid-feedback">
                            <?php echo form_error("conf-password"); ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>