<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('gehghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8">
   
            <article style="height:1px; float:none; clear:both;"></article> <!--solo para dar espacio -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <section class="col-xs-6 col-sm6 col-md-6">
                            <ul class="nav navbar-nav">
                                <li><a href="gehhjh_gerente_main_establecer_rango_consulta.php">Establecer rango de la consulta</a></li>
                            </ul>
                    </section>
                            
                    <section class="col-xs-6 col-sm6 col-md-6">
                            <div style="height:10px;"></div><!-- solo para dar espacio en google crome-->
                            <form action="" method="GET" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="C&oacute;digo factura" id="query" name="query" value="">
                                        <div class="input-group-btn">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                    </section>        
                </div>
              </div>
            </nav>

                <article style="height:12px; float:none; clear:both;"></article> <!--solo para dar espacio -->
                <table width=100% border='1' class="tabla_ventas">
                    <tr>
                        <td id="ordenar-por"><b>Factura</b></td>
                        <td id="ordenar-por"><b>Valor</b></td>
                        <td id="ordenar-por"><b>Cliente</b></td>
                        <td id="ordenar-por"><b>Fecha</b></td>
                        <td><b>Hora</b></td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65452</a></td>
                        <td>102.000</td>
                        <td>Maria Minaj Casianni</td>
                        <td>Hoy</td>
                        <td>06:18 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65451</a></td>
                        <td>102.000</td>
                        <td>Julio Gomez Maury</td>
                        <td>Hoy</td>
                        <td>04:16 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65450</a></td>
                        <td>102.000</td>
                        <td>David Luis Caceres</td>
                        <td>Hoy</td>
                        <td>01:43 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65448</a></td>
                        <td>102.000</td>
                        <td>Juan Felipe Amaury D&iacute;az</td>
                        <td>Hoy</td>
                        <td>09:49 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65447</a></td>
                        <td>102.000</td>
                        <td>Emily Mendez Maury</td>
                        <td>Ayer</td>
                        <td>06:59 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65446</a></td>
                        <td>102.000</td>
                        <td>Mabel Castillo Paternina</td>
                        <td>Ayer</td>
                        <td>06:45 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65445</a></td>
                        <td>102.000</td>
                        <td>Jose Luis Borge</td>
                        <td>Ayer</td>
                        <td>05:33 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65444</a></td>
                        <td>102.000</td>
                        <td>Juan Carlos Gomez Ortiz</td>
                        <td>Ayer</td>
                        <td>11:56 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65442</a></td>
                        <td>102.000</td>
                        <td>Margarita Rosa Colmenares</td>
                        <td>Ayer</td>
                        <td>08:23 am</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65440</a></td>
                        <td>102.000</td>
                        <td>Zenaida Quiñones Acevedo</td>
                        <td>12-ago-2015</td>
                        <td>06:01 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65439</a></td>
                        <td>102.000</td>
                        <td>Milena Ortiz Maza</td>
                        <td>12-ago-2015</td>
                        <td>05:27 pm</td>
                    </tr>
                    <tr>
                        <td id="ordenar-por"><a href="#">65438</a></td>
                        <td>102.000</td>
                        <td>Maria Alejandra Agamez</td>
                        <td>12-ago-2015</td>
                        <td>05:07 pm</td>
                    </tr>        
                </table>
                <div style="height:35px; float:none; clear:both;"></div>
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                    <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>