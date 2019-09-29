<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" type="text/css" href="https://datoweb.com/visor/css/fresco/fresco.css" />
        

        <title>Test de Apgar</title>
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

                <div class="collapse navbar-collapse" id="uno" >
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
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-cl-4 shadow" style="border: 1px solid #ccc; margin-top: 20px; height: 840px;">
                    <div class="page-header"  style="text-align: center; margin-top: 20px; ">
                        <img src="../img/baby2.png">
                    </div>
                    <form action="../controllers/controller_Apgar.php" method="POST" >  

                        <div class="form-group "  style="margin-top: 25px; ">


                            <div class="col-12">
                                <label for="ER">Esfuerzo respiratorio:</label> <br/>
                                <select class="custom-select custom-select-md mb-12 " name="ER"  id="ER"  >
                                    <option value="1" >0.Ausente</option>
                                    <option value="2" >1. Lento,Irregular</option>
                                    <option value="3" >2. Llanto energetico</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <label for="RE">Respuesta a Estimulos:</label><br/>

                                <select class="custom-select custom-select-md mb-12" name="RE"  id="RE" >
                                    <option value="1" >0.Sin respuesta</option>
                                    <option value="2" >1. Mueca</option>
                                    <option value="3" >2. Tos, estornudo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <label for="FC">Frecuencia cardiaca:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="FC"  id="FC"  >
                                    <option value="1" >0.Ausente</option>
                                    <option value="2" >1. menos de 100</option>
                                    <option value="3" >2. Mas de 100</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <label for="TM">Tono muscular:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="TM"  id="TM"  >
                                    <option value="1" >0.Debil</option>
                                    <option value="2" >1.Ligera flexion de extremidades</option>
                                    <option value="3" >2.Movimientos activos</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-12">
                                <label for="col">Coloracion:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="col"  id="col"  >
                                    <option value="1" >0.Azul, Palido</option>
                                    <option value="2" >1.Acrocianosis</option>
                                    <option value="3" >2.Sonrosado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-sm btn-block" name="entrar">Calcular</button>
                        </div>
                        <div class="form-control bg-info" style="height: 40px; text-align: center; color: white">
                            <p>Puntuacion total: <?= @$_REQUEST["total"]; ?></p>
                        </div>
                        <div class="form-group total" style="">
                            <p class="parrafo"><?= @$_REQUEST["ti"]; ?><?= @$_REQUEST["t2"]; ?><?= @$_REQUEST["t3"]; ?></p>
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>	
        <script src="../js/Animaciones.js"></script>	
        <script src="https://datoweb.com/visor/js/fresco/fresco.js"></script>
    </body>
=======
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" type="text/css" href="https://datoweb.com/visor/css/fresco/fresco.css" />
        

        <title>Test de Apgar</title>
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

                <div class="collapse navbar-collapse" id="uno" >
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
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-cl-4 shadow" style="border: 1px solid #ccc; margin-top: 20px; height: 840px;">
                    <div class="page-header"  style="text-align: center; margin-top: 20px; ">
                        <img src="../img/baby2.png">
                    </div>
                    <form action="../controllers/controller_Apgar.php" method="POST" >  

                        <div class="form-group "  style="margin-top: 25px; ">


                            <div class="col-12">
                                <label for="ER">Esfuerzo respiratorio:</label> <br/>
                                <select class="custom-select custom-select-md mb-12 " name="ER"  id="ER"  >
                                    <option value="1" >0.Ausente</option>
                                    <option value="2" >1. Lento,Irregular</option>
                                    <option value="3" >2. Llanto energetico</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <label for="RE">Respuesta a Estimulos:</label><br/>

                                <select class="custom-select custom-select-md mb-12" name="RE"  id="RE" >
                                    <option value="1" >0.Sin respuesta</option>
                                    <option value="2" >1. Mueca</option>
                                    <option value="3" >2. Tos, estornudo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <label for="FC">Frecuencia cardiaca:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="FC"  id="FC"  >
                                    <option value="1" >0.Ausente</option>
                                    <option value="2" >1. menos de 100</option>
                                    <option value="3" >2. Mas de 100</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <label for="TM">Tono muscular:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="TM"  id="TM"  >
                                    <option value="1" >0.Debil</option>
                                    <option value="2" >1.Ligera flexion de extremidades</option>
                                    <option value="3" >2.Movimientos activos</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-12">
                                <label for="col">Coloracion:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="col"  id="col"  >
                                    <option value="1" >0.Azul, Palido</option>
                                    <option value="2" >1.Acrocianosis</option>
                                    <option value="3" >2.Sonrosado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-sm btn-block" name="entrar">Calcular</button>
                        </div>
                        <div class="form-control bg-info" style="height: 40px; text-align: center; color: white">
                            <p>Puntuacion total: <?= @$_REQUEST["total"]; ?></p>
                        </div>
                        <div class="form-group total" style="">
                            <p class="parrafo"><?= @$_REQUEST["ti"]; ?><?= @$_REQUEST["t2"]; ?><?= @$_REQUEST["t3"]; ?></p>
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>	
        <script src="../js/Animaciones.js"></script>	
        <script src="https://datoweb.com/visor/js/fresco/fresco.js"></script>
    </body>
>>>>>>> ceec5e77e70b95d02190492b7db6faaf1b007520
</html>