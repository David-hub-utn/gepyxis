<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Bolsa de Trabajo</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/icono.png">
    

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="../img/icono.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                    <a href="tel:525551127794" data-toggle="tooltip" data-placement="bottom" title="+52 (55) 5112 7794"><i class="fa fa-phone" aria-hidden="true"></i> <span>+52 (55) 5112 7794</span></a>
                                    <a href="mailto:informacion@gepyxis.mx" data-toggle="tooltip" data-placement="bottom" title="informacion@gepyxis.mx"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>informacion@gepyxis.mx</span></a>              
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->
                                <div class="language-dropdown">
                                    <div class="dropdown">
                                       <a class="nav-brand"><img src="" style="width: 100px;"></a>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        

       <?php include ("../nav.php")?>
    </header>
    <!-- ##### Header Area End ##### -->


    <section class="our-services-area bg-gray section-padding-100-0" style="background-image: url(img/city.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading ">
                    </div>
                </div>
            </div>
        </div> 

        <div class="container" style="background-image: url(../pyxisCloud/img/fondo3.jpg);opacity: 0.8;">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading ">
                        <div class="section-heading text-center">
                            <p style="font-family: Tahoma; color:black; font-size: 50px; text-align: center;">¡CONTÁCTANOS!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-area mb-100">
                <form action="#" method="post" enctype="multipart/form-data"  class="was-validated">
                    <div class="p-3 mb-2 bg-primary text-white">
                        <div class="text-center">
                            <p style="font-family: Tahoma; color:#ffffff; font-size: 20px;">ENVIANOS UN MENSAJE</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label style="font-family:Calibri Light; font-size: 20px; text-align:justify;">Nombre </label>
                                <input type="text" class="form-control" id="contact-name" placeholder="Nombre de contacto ">
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <label style="font-family:Calibri Light; font-size: 20px; text-align:justify;">Teléfono</label>
                            <div class="form-group">
                                <input type="number" class="form-control" id="contact-email" placeholder="teléfono de contacto">
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                            <label for="" style="font-family:Calibri Light; font-size: 20px; text-align:justify;">Empresa</label>
                            <input type="text" class="form-control" id="contact-nameEmp" placeholder="Nombre de Empresa">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label style="font-family:Calibri Light; font-size: 20px; text-align:justify;">Correo electrónico</label>
                            <div class="form-group">
                                <input type="email" class="form-control" id="contact-email" placeholder="aaaa@example.com">
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                             <label style="font-family:Calibri Light; font-size: 20px; text-align:justify;">Mensaje y/o Requerimiento</label>
                            <div class="form-group">    
                                <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">    
                        <div class="col-12">
                            <button type="submit" class="btn alazea-btn mt-15">Enviar</button>
                        </div>
                    </div>
                </form>
            </div> 
            <div class="container">
                <div class="row">
                    
                </div>
            </div>       
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading ">
                    </div>
                </div>
            </div>
        </div>                             
    </section> 

 

   <!-- ##### Footer Area Start ##### -->


  <?php include("../footer.php") ?>
    
</body>

</html>