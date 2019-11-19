
<?php
if(isset($_POST['submit'])){

    //collect form data
    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $dep= $_POST['dep'];
    $pu= $_POST['pu'];
    $departamento=$_POST['departamento'];
    $tipo=$_POST['tipo'];
    $marca=$_POST['marca'];
    $modelo=$_POST['modelo'];
    $nserie=$_POST['nserie'];
    $sistema=$_POST['sistema'];
    $office=$_POST['office'];
    $obser=$_POST['obser'];
    $pantalla=$_POST['pantalla'];
    $proce=$_POST['Procesador'];
    $ram=$_POST['ram'];
    $hdd=$_POST['hdd'];
    $cargador=$_POST['cargador'];
    $red=$_POST['red'];

    

   

    //if no errors carry on
    if(!isset($error)){

        //create html of the data
        ob_start();
        ?>

        <h1>Datos del usuario</h1>
        <p>Nombre: <?php echo $nombre;?></p>
        <p>Apellido Paterno: <?php echo $ap;?></p>
        <p>Apellido Mataerno: <?php echo $am;?></p>
        <p>Departamento: <?php echo $dep;?></p>
        <p>Puesto: <?php echo $pu;?></p>


        <h1>Información del equipo</h1>
        <p>Departamento: <?php echo $departamento;?></p>
        <p>Tipo: <?php echo $tipo;?></p>
        <p>Marca: <?php echo $marca;?></p>
        <p>Modelo: <?php echo $modelo;?></p>
        <p>Numero de serie: <?php echo $nserie;?></p>
        <p>Sistema Operativo: <?php echo $sistema;?></p>
        <p>Office: <?php echo $office;?></p>
        <p>Observaciones: <?php echo $obser;?></p>

        <h1>Caracteristicas del equipo</h1>
       <p>                 </p> <p>Pantalla: <?php echo $pantalla;?></p>
        <p>Procesador: <?php echo $proce;?></p>
        <p>Ram: <?php echo $ram;?></p>
        <p>Disco duro: <?php echo $hdd;?></p>
        <p>Cargador: <?php echo $cargador;?></p>
        <p>Tarjeta de red: <?php echo $red;?></p>

        <?php 
        $body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0, 0, 0, 0, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
 
        //output pdf
        $mpdf->Output("");

        //save to server
        //$mpdf->Output("mydata.pdf",'F');



    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 







<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestamo equipos guia</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
        <header role="banner">
                <nav class="navbar navbar-expand-lg  bg-dark">
                  <div class="container-fluid">
                    <a class="navbar-brand element-animate" href="https://gpoguia2.com"><img src="images/logo-guia-original.svg" style="width: 240px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                      <span style="font-size: 35px;color: #002b49;"><i class="fa fa-bars"></i></span>
                    </button>
          
                    <div class="collapse navbar-collapse" id="navbarsExample05">
                      <div class="navbar-nav ml-auto">
                        <ul class="navbar-nav pl-md-5 mr-auto">
                       
                        <!--<li class="nav-item element-animate">
                          <a class="nav-link" href="https://gpoguia2.com/Evaluacion" target="_blank">Evaluación de asesores</a>
                        </li>-->
                        <!--<li class="nav-item element-animate">
                          <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#notifications"><i class="fa fa-bell"></i></a>
                        </li> -->
                      </ul>
                      </div>
                      
                    </div>
                  </div>
                </nav>
              </header>



    <div class="root">
        <form action="" class="form-register" method="POST">
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">paso 1 </li>
                    <li class="progressbar__option">paso 2</li>
                    <li class="progressbar__option">paso 3</li>
                    <li class="progressbar__option">paso 4</li>
                    <li class="progressbar__option">paso 5</li>
                </ul>
                <h1 class="form-register__title">Registro prestamo de equipos</h1>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Datos del usuario</h2>
                    </div>
                    <div class="step__body">
                            <input type="text" id="nombreU" placeholder="Nombre" class="step__input" name="nombre"> 
                            <input type="text" id="ap" placeholder="Apellido Paterno" class="step__input" name="ap">
                            <input type="text" id="am" placeholder="Apellido Materno" class="step__input" id="am" name="am">
                            <input type="text" id="depto" placeholder="Departamento" class="step__input" id="dep"  name="dep">
                            <input type="text" id="puesto" placeholder="Puesto" class="step__input"  id="pu" name="pu" >
                    </div>
                    <div class="step__footer">
                        <index name="1" id="1"  type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>

                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Información del equipo</h2>
                    </div>
                    <div class="step__body">
                            <input type="text" id="departamento" placeholder="Departamento" class="step__input" name="departamento">
                            <input type="text" id="tipo" placeholder="Tipo" class="step__input" name="tipo">
                            <input type="text" id="marca" placeholder="Marca" class="step__input" name="marca">
                            <input type="text" id="modelo" placeholder="Modelo" class="step__input" name="modelo">
                            <input type="text" id="nserie" placeholder="Numero de Serie" class="step__input" name="nserie">
                            <input type="text" id="sistema" placeholder="Sistema Operativo" class="step__input" name="sistema">
                            <input type="text" id="office" placeholder="Office" class="step__input" name="office">
                            <input type="text" id="obser" placeholder="Observaciones" class="step__input" name="obser">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Caracteristicas del equipo</small></h2>
                    </div>
                    <div class="step__body">
                            <input type="text" placeholder="Pantalla" class="step__input" name="pantalla">
                            <input type="text" placeholder="Procesador" class="step__input" name="Procesador">
                            <input type="text" placeholder="Ram" class="step__input" name="ram">
                            <input type="text" placeholder="Disco Duro" class="step__input" name="hdd">
                            <input type="text" placeholder="Cargador" class="step__input" name="cargador">
                            <input type="text" placeholder="Tarjeta de red" class="step__input" name="red">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>
                    </div>
                </div>


                <div class="step" id="step-4">
                        <div class="step__header">
                            <h2 class="step__title">Firma Solicitante</h2>
                        </div>
                        <div class="step__body">
                                <canvas class="firma" id="Solicitante"style="border:1px solid #000000;">
                                    </canvas>
                        </div>
                        <div class="step__footer">
                                <button type="button" class="step__button" onclick="clearcanvas1();">Limpiar firma</button>
                                <button type="button" class="step__button step__button--back" data-to_step="3" data-step="4">Regresar</button>
                                <button type="button" class="step__button step__button--next" data-to_step="5" data-step="4">Siguiente</button>
                                
                        </div>
                    </div>



                    <div class="step" id="step-5">
                            <div class="step__header">
                                <h2 class="step__title">Firma Aval</h2>
                            </div>
                            <div class="step__body">
                                    <canvas  class="firma" id="Aval" style="border:1px solid #000000;">
                                        </canvas>
                            </div>
                            <div class="step__footer">
                                    <button type="button" class="step__button" onclick="clearcanvas2();">Limpiar firma</button>
                                    <button type="button" class="step__button step__button--back" data-to_step="4" data-step="5">Regresar</button>
                                    <button type="submit" class="step__button step__button--next" data-to_step="5" data-step="4" name='submit'>Finalizar</button>
                            </div>
                        </div>

            </div>
        </form>
    </div>
    <script src="js/app.js"></script>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/nouislider/nouislider.min.js"></script>
    <script src="js/wnumb/wNumb.js"></script>
    <script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="js/jquery-validation/dist/additional-methods.min.js"></script>

</body>
</html>


