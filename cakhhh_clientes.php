<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('cahghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8 fondo-azul">
   
            <br><br>
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
                    <ul class="nav navbar-nav">
                    </ul>
                            <form action="" method="GET" class="navbar-form navbar-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Número de identificación" id="query" name="query" value="">
                                        <div class="input-group-btn">
                                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>
                                </div>
                            </form>
                </div>
              </div>
            </nav>

                <br>
                <table width=100% border='1' class="tabla_ventas">
                    <tr>
                        <td id="ordenar-por"><b>Identificación</b></td>
                        <td id="ordenar-por"><b>Nombre cliente</b></td>
                        <td id="ordenar-por"><b>Apellidos cliente</b></td>
                        <td><b>País</b></td>
                        <td><b>Ciudad</b></td>
                        <td><b>Dirección</b></td>
                        <td><b>Teléfono</b></td>
                        <td><b>E-mail</b></td>
                    </tr>
                    <tr>
                        <td>21.584.654</td>
                        <td id="ordenar-por">Andres</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>73.535.289</td>
                        <td id="ordenar-por">Carlos</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>79.368.187</td>
                        <td id="ordenar-por">Juan David</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>21.984.444</td>
                        <td id="ordenar-por">Kelly Ana</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>85.524.009</td>
                        <td id="ordenar-por">Martha</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>98.421.071</td>
                        <td id="ordenar-por">Miriam</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                    <tr>
                        <td>73.567.108</td>
                        <td id="ordenar-por">Yuli Andrea</td>
                        <td>Minaj Casianni</td>
                        <td>Colombia</td>
                        <td>Cartagena de Indias</td>
                        <td>Zaragocilla Cll 30 No. 49 - 66</td>
                        <td>6640106</td>
                        <td>contactoctg@crocs.com</td>
                    </tr>
                </table>
                <br><br>
                    <?php include('cahkhh_paginacion_cajero.php'); ?>
                <div style="height:35px; float:none; clear:both;"></div>
            </div>
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>