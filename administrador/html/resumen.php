<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resumen</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="../css/resumen.css" />
</head>

<body>
    <!-- CABECERA -->
    <header>
        <div class="container">
            <section class="row">
                <h5 class="col-xs-12 col-sm-9 col-md-9" id="idUser">usuario: <?php echo $_SESSION['user']['usuario']?></h5>
                <img class="col-xs-08 col-sm-3 col-md-3" id="logo" src="../../_imgs/logo.png" width="150" height="50" alt="logotipoPanelRey">
            </section>
            <section class="row">
<!--                 <div id="selector" class="container">
                    <select class="form-control" id="visualizacion" name="visualizacion">
                        <option>mensual</option>
                        <option>anual</option>          
                    </select>
                </div> -->
            </section>            
        </div>
    </header>
    <div id="espacio">
    </div>

    <!-- CUERPO -->
    <div id="resumen">
        <div class="container-fluid" id="cuerpo">
            <div class="row" id="indicadores">
                <div class="col-md-3" id="obrasRecibidas">
                    <h2>obras recibidas</h2>
                    <h3 id="obrasRecibidasH3"></h3>
                </div>
                <div class="col-md-3" id="obrasAsignadas">
                    <h2>obras asignadas</h2>
                </div>
                <div class="col-md-3" id="obrasCotizadas">
                    <h2>obras cotizadas</h2>
                </div>
                <div class="col-md-3" id="obrasGanadas"> 
                    <h2>obras ganadas</h2>
                </div>
            </div>
        </div>

        <div class='container-fluid' id='graficas'>
            <div class='row'>
                <div class='col-md-9' id='g1'>
                    <div class='row'>
                        <div id='g11' class='col-md-3' >
                            <h4 id="t00"><strong>1. Comparacion Clientes</strong></h4>
                            <h6 id="t01">año 01 , año 02 , zona</h6>
                            <form id="frmGraf">
                                <select id="a01a02z" class="selectpicker" multiple>
                                    <optgroup label="año 01" data-max-options="1">
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                    </optgroup>
                                    <optgroup label="año 02" data-max-options="1">
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                    </optgroup>
                                    <optgroup label="zona" data-max-options="1">
                                        <option>norEste</option>
                                        <option>norOste</option>
                                        <option>pacifico</option>
                                        <option>bajio</option>
                                        <option>centro</option>
                                        <option>surEste</option>
                                        <option>todas</option>
                                    </optgroup>
                                </select>   
                            </form>
                            <h6 id="t01">cliente 01 vs cliente 02</h6>



                            <div id="selectorDistr" name="selectorDistr">
                                <select id="c01" class="selectpicker" data-live-search="true">
                                    <option>seleccionar distribuidor 01</option>
                                </select><br>
                                <select id="c02" class="selectpicker" data-live-search="true">
                                    <option>seleccionar distribuidor 02</option>
                                </select>
                            </div>



                            <h6 id="t01">status a graficar</h6>
                            <select id="status" class="selectpicker">
                                <option>registrada (sin datos)</option>
                                <option>prospectada (con datos)</option>
                                <option>asiganda a distribuidor</option>
                                <option>cotizada por distribuidor</option>
                                <option>ganada</option>
                                <option>perdida</option>
                                <option>detenida temporalmente</option>
                                <option>cancelada definitivamente</option>
                                <option>obra finalizada</option>
                            </select>
                        </div>
                        <div id='g12' class='col-md-9' >seleccionar datos para la comapración de clientes

                        </div>                        
                    </div>
                    <div class='row'>
                        <div id='g21' class='col-md-3'>
                            <h4 id="t00"><strong>3. Escenarios</strong></h4>
                            <h6 id="t01">año 01 / año 02 / zona</h6>
                            <select class="selectpicker" multiple>
                                <optgroup label="año 01" data-max-options="1">
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </optgroup>
                                <optgroup label="año 02" data-max-options="1">
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                </optgroup>
                                <optgroup label="zona" data-max-options="1">
                                    <option>norEste</option>
                                    <option>norOste</option>
                                    <option>pacifico</option>
                                    <option>bajio</option>
                                    <option>centro</option>
                                    <option>surEste</option>
                                    <option>todas</option>
                                </optgroup>
                            </select>
                            <h6 id="t01">escenario</h6>
                            <select class="selectpicker">
                                <option>real</option>
                                <option>pronostico</option>
                            </select>
                            <div class="container"><br><br>
                                <button class="btn btn-primary" type="button" id="btnVolver">Volver</button>
                                <button class="btn btn-primary" type="button" id="btnSalir">Salir</button>
                            </div>
                        </div>
                        <div id="g22" class="col-md-9" >seleccionar datos para la comapración de escenarios
                        </div>                        
                    </div>
                </div>
                <div class="col-md-3" id="g3">
                    <div id="g31" class="col-md-12">
                        <h4 id="t00"><strong>2. Hit Rate</strong></h4>
                        <select class="selectpicker">
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                        </select>
                        <div class="table-responsive">          
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>zona</th>
                                        <th>status 01</th>
                                        <th>status 02</th>
                                        <th>hit Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>bajio</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>bajas</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>centro</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>norEste</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>norOeste</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>pacifico</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>sur</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <div id="g33" class="col-md-12">
                <h4 id="h44"><strong>4. Participacion de Mercado</strong></h4>
                    <h4>Panel Rey: </h4>
                    <h4>Knauf: </h4>
                    <h4>USG: </h4>
                    <h4>No Identificado: </h4>
                </div>
                </div>
            </div>
        </div>
        <!-- PIE -->
        <!--<footer class="container-fluid" >
            <div class="row" id="footer">
                    <h6>®HitRate. 2.1.0</h6>
            </div>
        </footer> -->

    </div>

    <script src="../js/resumen.js"></script>
</body>

</html>