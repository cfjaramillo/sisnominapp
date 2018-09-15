<!-- Cabecera de la Pagina -->
<?php
include('header.php');
?>

    <!-- Formulario -->
    <form method="POST" style="width:100%" action="procesar.php">

        <!-- Seccion Datos Personales -->
        <div class="row">
            <!-- Cedula -->
            <div class="col-sm">
                <div class="form-group">
                <label for="cedula">Cédula</label>
                <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su cédula" required>
                </div>
            </div>

            <!-- Nombre -->
            <div class="col-sm">
                <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                </div>
            </div>

            <!-- Apellido -->
            <div class="col-sm">
                <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                </div>
            </div>


        </div>

        <!-- Titulo Seccion Financiera -->
        <div class="row">
             <!-- Título Sección Financiera -->
            <div class="col-sm">
                <nav class="navbar navbar-light" style="background-color: #D8D8D8">
                    <a class="navbar-brand">
                        <!-- Imagen de una persona -->
                        <img src="img/money.png" width="40" height="40" alt="" class="d-inline-block align-top">
                        <!-- Sección Datos Personales -->
                            Sección Financiera
                    </a>
                </nav>
            </div>
        </div>

        <!-- Seccion Financiera -->
        <div class="row">
            <!-- Dias Trabajados -->
            <div class="col-sm">
                <div class="form-group">
                <label for="diastra">Días trabajados</label>
                <input type="number" class="form-control" id="diastra" name="diastra" placeholder="Días trabajados" required>
                </div>
            </div>

            <!-- Dias Trabajados -->
            <div class="col-sm">
                <div class="form-group">
                <label for="tarifatra">$ Tarifa días trabajados</label>
                <input type="number" class="form-control" id="tarifatra" name="tarifatra" placeholder="Tarifa" required>
                </div>
            </div>

            <!-- Comisiones -->
            <div class="col-sm">
                <div class="form-group">
                <label for="comision">$ Comisión</label>
                <input type="number" class="form-control" id="comision" name="comision" placeholder="Comisión" required>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Horas Extras Diurnas -->
            <div class="col-sm">
                <div class="form-group">
                    <label for="extradiurna">Horas extras diurnas</label>
                    <input type="number" class="form-control" id="extradiurna" name="extradiurna" placeholder="Horas diurnas" required>
                </div>
            </div>

            <!-- Horas Extras Nocturnas -->
            <div class="col-sm">
                <div class="form-group">
                    <label for="extranocturna">Horas extras nocturnas</label>
                    <input type="number" class="form-control" id="extranocturna" name="extranocturna" placeholder="Horas nocturnas" required>
                </div>
            </div>      

            <!-- Horas Extras Dominicales Diurnas -->
            <div class="col-sm">
                <div class="form-group">
                    <label for="extradiurnadom">Horas diurnas Dom/Fes</label>
                    <input type="number" class="form-control" id="extradiurnadom" name="extradiurnadom" placeholder="Diurnas Dom/Fes" required>
                </div>
            </div>

            <!-- Horas Extras Dominicales Nocturnas -->
            <div class="col-sm">
                <div class="form-group">
                    <label for="extranocturnadom">Horas nocturnas Dom/Fes</label>
                    <input type="number" class="form-control" id="extranocturnadom" name="extranocturnadom" placeholder="Nocturnas Dom/Fes" required>
                </div>
            </div>   
        </div>

        <!-- Boton Calcular -->
        <div style="padding-left:42%" class="container-fluid">
            <div class="row">
                <div class="form-group">
                    <input type="SUBMIT" class="btn btn-primary" value="Calcular">
                </div>
                <div style="width:20pt"></div>
                <div class="form-group">
                    <a href="./imprimir.php" type="SUBMIT" target="_blank" class="btn btn-primary">Imprimir</a>
                </div>
            </div>
        </div>
    </form>

</nav>
</div>
<div class="container-fluid">
<nav class="navbar navbar-light" style="background-color:#D8D8D8">