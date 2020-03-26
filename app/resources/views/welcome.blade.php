<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="../www/css/general.css">
        <link rel="stylesheet" href="../www/css/owlcarousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="../www/css/owlcarousel/owl.theme.default.css" />
    </head>
    <body class="bg">
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-center">
                        <img class="logo__big" src="../www/images/CECYT3.png">
                    </h3>
                    <strong class="text-center">
                        <img class="logo__mini" src="../www/images/CECYT3.png">
                    </strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-education"></i>
                            Alumnos
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Material</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-apple"></i>
                            Profesores
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Inicio sesión</a></li>
                        </ul>
                    </li>
                    <!--<li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>-->
                </ul>

                <!--<ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul>-->
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <span id="sidebarCollapse" class="sidebarButton">
                                <i class="glyphicon glyphicon-menu-hamburger"></i>
                            </span>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!--<ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>-->
                        </div>
                    </div>
                </nav>

                <h3 class="text-center">Centro de Estudios Cientificos y Tecnológicos #3 "Estanislao Ramírez Ruíz"</h3>
                <h3 class="text-center">¡Bienvenid@ al sitio oficial de la academía de matemáticas!</h3>

                <div class="text-center">
                    <img class="img__main" src="../www/images/CECYT3.png">
                </div>

                <h4 class="text-center"><i>"En las matemáticas es donde el espiritu encuentra los elementos que más ansía: la continuidad y la perseverancia"</i></h4>
                <h4 class="text-center fontWeight">Anatole France</h4>

                <div class="container__carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="image_container_carousel">
                            <img class="img__main" src="../www/images/bg.jpg" />
                            <div class="bottom-right-carousel background-image-carousel">INFO SOBRE LA IMAGEN</div>
                        </div>
                        <div class="image_container_carousel">
                            <img class="img__main" src="../www/images/bg1.jpg" />
                            <div class="bottom-right-carousel background-image-carousel">INFO SOBRE LA IMAGEN</div>
                        </div>
                        <div class="image_container_carousel">
                            <img class="img__main" src="../www/images/bg2.jpg" />
                            <div class="bottom-right-carousel background-image-carousel">INFO SOBRE LA IMAGEN</div>
                        </div>
                        <div class="image_container_carousel">
                            <img class="img__main" src="../www/images/bg4.jpg" />
                            <div class="bottom-right-carousel background-image-carousel">INFO SOBRE LA IMAGEN</div>
                        </div>
                        <div class="image_container_carousel">
                            <img class="img__main" src="../www/images/bg5.jpg" />
                            <div class="bottom-right-carousel background-image-carousel">INFO SOBRE LA IMAGEN</div>
                        </div>
                    </div>
                </div>

                <div class="line"></div>
                <div class="card-footer text-muted footer__main">
                    <div class="row">
                        <div class="column mr_web" id="footer1">
                            <div class="mb_ fontWeight">
                                Instituto Politécnico Nacional
                            </div>
                            <div class="text_j">
                                Academia de Matemáticas Turno Matutino del Centro de Estudios Científicos y Tecnológicos #3 "Estanislao Ramírez Ruíz"
                            </div>
                        </div>
                        <div class="column" id="footer1">
                            <div class="mb_ mt_app fontWeight">
                                Contacto
                            </div>
                            <div class="text_j">
                                Av. Carlos Hank González s/n, Col, Valle de Ecatepec, 55119 Ecatepec de Morelos, Méx.
                            </div>
                            <div class="text_j">
                                Tel. 55 5624 2000
                            </div>
                            <!-- <div class="text_j">
                                Página Oficial CECyT 3
                            </div>
                            <div class="text_j">
                                Página Oficial IPN
                            </div> -->
                        </div>
                    </div>    
                    <div class="footer__bottom footer__textAlign">
                        © <span class="currentYear"></span> Copyright: <span class="fontWeight">Sistema creado por alumnos de la Escuela Superior de Cómputo.</span>
                    </div>
                </div>
            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <script src="../www/css/owlcarousel/owl.carousel.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../www/js/index.js"></script>
    </body>
</html>
