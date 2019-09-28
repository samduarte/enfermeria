<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">

        <title>Registro neonatal</title>
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

                <div class="collapse navbar-collapse " id="uno" >
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
                </div>
            </nav>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-10 col-lg-6 col-cl-3 shadow" style="border: 1px solid #ccc; height: 640px; margin-top: 30px;" id="panel">
                    <div class="page-header"  style="text-align: center; margin-top: 20px; ">
                        <img src="../img/baby.png">
                    </div>
                    <form action="controlador/control_admin.php" method="POST" enctype="application/x-www-form-urlencoded" style="text-align: center;">
                        


                        <div class="form-group" style="margin-top: 15px; border: 1px solid #ccc; height: 70px;">

                            <label for="nombre">Sexo:</label><br/>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Masculino</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Femenino</label>
                            </div>
                            

                        </div>
                        <div class="row">
                                <div class="col-6">
                                    <label for="nombre">Talla:</label>
                                    <input type="number" class="form-control" id="user" placeholder="Talla exacta" name="nombre">
                                </div>
                            <div class="col-6">
                                    <label for="Id">Peso:</label>
                                    <input type="number" class="form-control" id="id" placeholder="Peso del bebè" name="id">
                                </div>
                            </div>
                        <br/>
                        <label for="Id">Perimetros:</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="number" class="form-control" placeholder="Abdominal" name="abdominal">
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" placeholder="Cefalico" name="cefalico">
                            </div>
                        </div>
                        <br/>
                        <div class="row form-group">
                            <div class="col-6">
                                <input type="number" class="form-control" placeholder="Toraxico" name="abdominal">
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" placeholder="Braqueal" name="cefalico">
                            </div>
                        </div>
                        <br/>
                        <label for="Id">TCH:</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="tchSi" name="tchSi" class="custom-control-input">
                            <label class="custom-control-label" for="tchSi">Si</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="tchNo" name="tchNo" class="custom-control-input">
                            <label class="custom-control-label" for="tchNo">No</label>
                        </div>
                        <br/><br/>
                         <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="entrar">Guardar</button>
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