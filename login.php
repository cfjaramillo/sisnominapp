<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<!-- Cabecera de la Pagina -->
<body>
    <!-- Cabecera Principal -->
    
        <div class="container-fluid" id=cabeceraPagina>
            <div class="row">
                <div class="col-sm">
                <nav class="navbar navbar-dark bg-primary">
                    <a class="navbar-brand" >
                        <!-- Imagen de una moneda -->
                    <img src="img/logo.png" width="120" height="80" alt="" class="d-inline-block">
                    <!-- Título de la Página -->
                    Sistema de Nómina
                    </a>
                </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid" id=login>
            <div class="row">
                <div class="col-sm">
                    <!-- Formulario Login -->
                    <div style="background-color:#ededef;margin-left: 25%;margin-top: 5%; border-color:gray; width:50%; height: 300pt">
                        <div style="background-color:#ededed; width:100%;height: 50pt; padding-top: 10pt; text-align:center">
                        <h3>Inicio de Sesion </h3>
                        </div>
                        <form method="POST" action="autenticar.php">
                            
                            <!-- Nombre de Usuario -->
                            <div class="form-group" style="text-align:center; padding-left:5%; padding-top:5%; padding-right:5%">
                            <label for="id">Nombre de Usuario</label>
                            <input type="text" class="form-control" id="id" name="id">
                            </div>

                            <!-- Clave -->
                            <div class="form-group" style="text-align:center; padding-left:5%; padding-top:5%; padding-right:5%">
                            <label for="pwd">Contraseña</label>
                            <input type="password" class="form-control" id="pwd" name="pwd">
                            </div>

                            <!-- Boton enviar -->
                            <div class="form-group" style="text-align:center; padding-top:5%">
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>


                        </form>
                    </div>

                </div>
            </div>
        </div>
<?php
    session_start();
    session_unset();
?>
</body>
</html>