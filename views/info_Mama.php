<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">

        <title>Registro de la mamá</title>
    </head>
    <body>
        <div class="container-float">
            <nav class="navbar navbar-expand-sm  navbar-dark bg-info"> 
                <a href="#" class="navbar-brand d-lg-none" id="logo" >
                    <img src="../img/enfermeria_logo.png" style="width: 35px; ">ENFERMERIA
                </a>
                <br/>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#uno" >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="uno">
                    <ul class="navbar-nav mx-auto" >
                        <li class="nav-item"><a href="Inicio.html" id="txt_menu" class="nav-link active" >INICIO</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item"><a href="test_Apgar.php" id="txt_menu" class="nav-link active" >Test de Apgar</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item"><a href="test_capurro.php" id="txt_menu" class="nav-link active" >Test de Capurro</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item"><a id="logo" class="nav-link" href="Inicio.html"><img src="../img/enfermeria_logo.png" style="width: 35px; ">ENFERMERIA</a> </li>
                        <li class="nav-item"><a href="info_Mama.php" id="txt_menu" class="nav-link active" >Registro Maternal</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item"><a href="info_bebe.php" id="txt_menu" class="nav-link active" >Registro Neonatal</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-item"><a href="nanda.php" id="txt_menu" class="nav-link active" >NANDA</a></li>
                        

                    </ul>
            </nav>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-10 col-lg-6 col-cl-3 shadow" style="border: 1px solid #ccc; height: 550px; margin-top: 30px;" id="panel">
                    <div class="page-header"  style="text-align: center; margin-top: 20px; ">
                        <img src="../img/mother.png">
                    </div>
                    <form action="controlador/control_admin.php" method="POST" enctype="application/x-www-form-urlencoded">
                       

                        <div class="form-group" style="margin-top: 5px;">

                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="user" placeholder="Nombre completo" name="nombre">
                            <label for="Id">ID:</label>
                            <input type="number" class="form-control" id="id" placeholder="Numero de Identificacion" name="id">
                            <label for="se">Semanas de embarazo</label>
                            <input type="number" class="form-control" id="se" placeholder="Semanas de embarazo" name="se">

                        </div>
                        <label for="nombre">Enfermedad</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                        </div>
                        <input type="text" class="form-control" id="se" placeholder="¿Cual?" name="justificacion">
                        <br/>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="entrar">Registrar</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>


        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>	
    </body>
</html>
