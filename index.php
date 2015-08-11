<?php include ('aahhhh_head_sign_in.php'); ?>


    <div class="container-fluid" style="margin-top:4%;">
        <div class="col-xs-1 col-sm-2 col-md-4">
            <br>  
        </div>

        <div class="col-xs-10 col-sm-8 col-md-4 " style="color:#585858;">
            <div><br><img src="img/logo50.jpg" style="width:98%;"></div><br><br><br>
            <div class="ingresar">        
                <form method="POST" action="login.php" clas="">
                          <div class="form-group">
                          <br><br><br>
                          <div class="form-group">
                              <div class="input-group">
                                  <input class="form-control" type="text" placeholder="usuario">
                                  <span class="input-group-addon"><img src="img/user5.png" style="width:20px;"></span>
                              </div>
                          </div><br><br>
                          <div class="form-group">
                              <div class="input-group">
                                  <input class="form-control" type="password" placeholder="contrase&ntilde;a">
                                  <span class="input-group-addon"><img src="img/key7.png" style="width:20px;"></span>
                              </div>
                          </div><br><br>
                          <input class="btn btn-default" type="submit" name="submit" value="Ingresar">
                          </div>
                </form>
                <section style="text-align:right;">
                    <br/><br/><br/>
                    <a href="#"><u>Olvide mi contrase&ntilde;a</u></a>
                    <br/><br/><br/><br/>
                </section>

                <section style="text-align:right;">
                    <button class="btn btn-info" >Registrarse</button>
                </section>
            </div>    
        </div>  <!-- div columna central-->

        <div class="col-xs-1 col-sm-2 col-md-4">
                <br>  
        </div>
    </div>  <!-- div container fluid-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>