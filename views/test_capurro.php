<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">
        <script src="../js/jquery.min.js"></script>
        <script src="https://datoweb.com/visor/js/fresco/fresco.js"></script>

        <title>Test de Capurro</title>
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
                <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-cl-4 shadow" style="border: 1px solid #ccc; margin-top: 20px; height: 840px;">
                    <!--                    <a href="#" style="padding: 25px 3px;">
                                            
                                        </a>-->
                    <form action="../controllers/controller_Capurro.php" method="POST" >  

                        <div class="form-group "  style="margin-top: 25px; ">


                            <div class="col-12">
                                <img id="myImg" src="../img/capurro_1.jpg" alt="Snow" style="width:100%;max-width:50px">

                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="FO">Forma de la oreja (Pabellon):</label> <br/>
                                <select class="custom-select custom-select-md mb-12 " name="FO"  id="FO"  >
                                    <option value="1" >0. Aplanada, sin incurvacion.</option>
                                    <option value="2" >8. Borde superior parcialmente incurvado.</option>
                                    <option value="3" >16. todo el borde superior incurvado.</option>
                                    <option value="4" >24. Pabellon totalmente incurvado.</option>
                                </select>
                            </div>

                        </div>


                        <div class="form-group ">

                            <div class="col-12">
                                <img id="myImg2" src="../img/capurro_2.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg2');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="TGM">Tamaño de la glandula mamaria:</label><br/>
                                <select class="custom-select custom-select-md mb-12" name="TGM"  id="TGM" >
                                    <option value="1" > 0. No palpable.</option>
                                    <option value="2" >5. Palpable menor de 5 mm.</option>
                                    <option value="3" >10. Palpable entre 5 y 10 mm.</option>
                                    <option value="4" >15. Palbale mayor de 10mm</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <img id="myImg3" src="../img/capurro_3.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg3');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="FP">Formacion de pezon:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="FP"  id="FP"  >
                                    <option value="1" >0. Apenas visible sin areola.</option>
                                    <option value="2" >5. Diametro menor de 7,5 mm. Areola lisa y chata.</option>
                                    <option value="3" >10. Diametro mayor de 7,5 mm. Areola punteada. Borde no levantado.</option>
                                    <option value="3" >15. Diametro mayor de 7,5 mm. Areola punteada. Borde levantado.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <img id="myImg4" src="../img/capurro_4.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg4');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="TP">Textura de la piel:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="TP"  id="TP"  >
                                    <option value="1" >0. Muy fina, gelatinosa.</option>
                                    <option value="2" >5. Fina, lisa.</option>
                                    <option value="3" >10. Mas gruesa, discreta descamacion superficial.</option>
                                    <option value="4" >15. Gruesas grietas superficiales, descamacion de manos y pies.</option>
                                    <option value="5" >20. Gruesas grietas profundas apergaminadas.</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-12">
                                <img id="myImg5" src="../img/capurro_5.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg5');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="PP">Pliegues plantares</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="PP"  id="PP"  >
                                    <option value="1" >0. Sin pliegues.</option>
                                    <option value="2" >5. Marcas mal definidas en la mitad superior.</option>
                                    <option value="3" >10. Marcas definidas en la 1/2 anterior, surcos en 1/3 anterior.</option>
                                    <option value="3" >15. Surcos en la mitad supperiror.</option>
                                    <option value="3" >20. Surcos en mas de la mitad anterior.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-sm btn-block" name="entrar">Calcular</button>
                        </div>
                        <div class="form-control bg-info" style="height: 40px; text-align: center; color: white">
                            <p>Puntuacion total: <?= @$_REQUEST["total"]; ?></p>
                        </div>
                        <div class="form-group total">
                            <p style="font-size: 18px;">Semanas aparentes: <?= @$_REQUEST["sen"]; ?></p>
                            <p class="res"><?= @$_REQUEST["s1"]; ?><?= @$_REQUEST["s2"]; ?><?= @$_REQUEST["s3"]; ?><?= @$_REQUEST["s4"]; ?><?= @$_REQUEST["s5"]; ?></p>

                        </div>

                    </form>

                </div>
            </div>
        </div>
        
        

        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>	

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
        <script src="../js/jquery.min.js"></script>
        <script src="https://datoweb.com/visor/js/fresco/fresco.js"></script>

        <title>Test de Capurro</title>
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
                <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-cl-4 shadow" style="border: 1px solid #ccc; margin-top: 20px; height: 840px;">
                    <!--                    <a href="#" style="padding: 25px 3px;">
                                            
                                        </a>-->
                    <form action="../controllers/controller_Capurro.php" method="POST" >  

                        <div class="form-group "  style="margin-top: 25px; ">


                            <div class="col-12">
                                <img id="myImg" src="../img/capurro_1.jpg" alt="Snow" style="width:100%;max-width:50px">

                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="FO">Forma de la oreja (Pabellon):</label> <br/>
                                <select class="custom-select custom-select-md mb-12 " name="FO"  id="FO"  >
                                    <option value="1" >0. Aplanada, sin incurvacion.</option>
                                    <option value="2" >8. Borde superior parcialmente incurvado.</option>
                                    <option value="3" >16. todo el borde superior incurvado.</option>
                                    <option value="4" >24. Pabellon totalmente incurvado.</option>
                                </select>
                            </div>

                        </div>


                        <div class="form-group ">

                            <div class="col-12">
                                <img id="myImg2" src="../img/capurro_2.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg2');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="TGM">Tamaño de la glandula mamaria:</label><br/>
                                <select class="custom-select custom-select-md mb-12" name="TGM"  id="TGM" >
                                    <option value="1" > 0. No palpable.</option>
                                    <option value="2" >5. Palpable menor de 5 mm.</option>
                                    <option value="3" >10. Palpable entre 5 y 10 mm.</option>
                                    <option value="4" >15. Palbale mayor de 10mm</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <img id="myImg3" src="../img/capurro_3.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg3');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="FP">Formacion de pezon:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="FP"  id="FP"  >
                                    <option value="1" >0. Apenas visible sin areola.</option>
                                    <option value="2" >5. Diametro menor de 7,5 mm. Areola lisa y chata.</option>
                                    <option value="3" >10. Diametro mayor de 7,5 mm. Areola punteada. Borde no levantado.</option>
                                    <option value="3" >15. Diametro mayor de 7,5 mm. Areola punteada. Borde levantado.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="col-12">
                                <img id="myImg4" src="../img/capurro_4.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg4');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="TP">Textura de la piel:</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="TP"  id="TP"  >
                                    <option value="1" >0. Muy fina, gelatinosa.</option>
                                    <option value="2" >5. Fina, lisa.</option>
                                    <option value="3" >10. Mas gruesa, discreta descamacion superficial.</option>
                                    <option value="4" >15. Gruesas grietas superficiales, descamacion de manos y pies.</option>
                                    <option value="5" >20. Gruesas grietas profundas apergaminadas.</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-12">
                                <img id="myImg5" src="../img/capurro_5.jpg" alt="Snow" style="width:100%;max-width:50px">
                                <div id="myModal" class="modal">
                                    <span class="close">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                </div>
                                <script>

                                    var modal = document.getElementById('myModal');


                                    var img = document.getElementById('myImg5');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function () {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        captionText.innerHTML = this.alt;
                                    }


                                    var span = document.getElementsByClassName("close")[0];


                                    span.onclick = function () {
                                        modal.style.display = "none";
                                    }
                                </script>
                                <label for="PP">Pliegues plantares</label><br/>
                                <select class="custom-select custom-select-md mb-12 " name="PP"  id="PP"  >
                                    <option value="1" >0. Sin pliegues.</option>
                                    <option value="2" >5. Marcas mal definidas en la mitad superior.</option>
                                    <option value="3" >10. Marcas definidas en la 1/2 anterior, surcos en 1/3 anterior.</option>
                                    <option value="3" >15. Surcos en la mitad supperiror.</option>
                                    <option value="3" >20. Surcos en mas de la mitad anterior.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-sm btn-block" name="entrar">Calcular</button>
                        </div>
                        <div class="form-control bg-info" style="height: 40px; text-align: center; color: white">
                            <p>Puntuacion total: <?= @$_REQUEST["total"]; ?></p>
                        </div>
                        <div class="form-group total">
                            <p style="font-size: 18px;">Semanas aparentes: <?= @$_REQUEST["sen"]; ?></p>
                            <p class="res"><?= @$_REQUEST["s1"]; ?><?= @$_REQUEST["s2"]; ?><?= @$_REQUEST["s3"]; ?><?= @$_REQUEST["s4"]; ?><?= @$_REQUEST["s5"]; ?></p>

                        </div>

                    </form>

                </div>
            </div>
        </div>
        
        

        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>	

    </body>
>>>>>>> ceec5e77e70b95d02190492b7db6faaf1b007520
</html>