<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>LicenciasHackStore</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome Licencia y Keys</h1>
                    <p>!Compra todo tipo de licencia para espionaje!</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/cannon_eos.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia hack WhatsApp</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia hack Facebook</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Hack Instagram</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/olympus.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Hack LinkedIn</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/titan301.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Hack TikTok</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/titan201.jpg" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Espiar Telefono</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/hmt.JPG" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Espiar Cámaras</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/favreleuba.jpg" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Espiar Galeria</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/raymond.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Acceso Total Al Celular</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/charles.jpg" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Hack Snapchat</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/HXR.jpg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Hack YouTube</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="pago.html">
                                <img src="img/pink.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Licencia Hack Twitter</h3>
                                    <p>Precio: 1 $USD</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="pago.html" role="button" class="btn btn-primary btn-block">Comprar</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="pago.html?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Comprar</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Licencias hack. All Rights Reserved.</p>
                   <p>This website is developed by RealityOFC</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
