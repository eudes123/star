<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('alhghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8">


                <br><br>
                <div class="container-fluid"> <!-- abre el container fluid de la barra de progreso -->
                        <div class="row"> 
                            <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-2 col-sm-offset-2 col-md-offset-2" style="font-size:12px;">
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista" style="background-color:rgba(214,227,240,1); color:rgba(160,160,160,1);"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                                <div class="col-xs-1 col-sm-1 col-md-1 progreso-almacenista"><br></div>
                            </div>
                        </div> <!-- ciertra el row de la barra de progreso -->   
                </div> <!-- ciertra el container fluid de la barra de progreso -->
                <br><br><br><br><br>

                <div class="row">
                    <div class="col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                            
                        <form class="form-inline" role="form" name="formulario" method="GET" action="alhmhh_ingresar_mercancia_8.php">
                        
                            <section class="col-xs-12 col-sm-12 col-md-12">
                                <section class="col-xs-6 col-sm-6 col-md-6">    
                                    <div class="form-group datos_nueva_sucursal">
                                        <label for="ci">Precio:</label>
                                        <br>
                                        <select name="ciudad" class="form-control" id="ci" style="width:195px;">
                                            <option value="0"> -- Seleccionar -- </option>
                                            <option value="36">36</option>
                                            <option value="38">38</option>
                                            <option value="40">40</option>
                                            <option value="42">42</option>
                                            <option value="44">44</option>
                                            <option value="unica">Única</option>
                                        </select>
                                    </div>
                                </section>
                                <br>
                                <section class="col-xs-6 col-sm-6 col-md-6"> 
                                    <a href="#">
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            <img style="width:110%;" src="img/al_agregar_familia.png">
                                        </div>
                                <br>
                                        <div class="col-xs-8 col-sm-8 col-md-8">
                                            <label>Nuevo precio</label>
                                        </div>
                                    </a>
                                </section>
                            </section><div style="height:250px; float:none; clear:both;"></div>

                            

                            <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1">
                            <button type="submit" class="btn btn-primary">Siguiente >></button>
                            </div>
                        </form>
                </div>
            </div>

        <div style="height:150px; float:none; clear:both;"></div>  
    </div>    
    </div>

<?php include ('aayyhh_footer.php'); ?>    







