<?php define("urlBase", "https://www.gepyxis.mx/"); ?>

<!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">
                    <a href="<?=urlBase?>index.php" class="nav-brand"><img src="<?=urlBase?>img/1LogoGP.png" alt="img/1LogoGP.png" ></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                               <ul>
                                    <li><a href="<?=urlBase?>index.php">Inicio</a></li>
                                    <li><a href="#">Solucíones</a>
                                        <ul class="dropdown" style="width: 280px;">
                                            <li><a href="<?=urlBase?>erp.php">ERP</a>
                                                <ul class="dropdown">
                                                    <li><a href="">Modulos Incluidos</a>
                                                        <ul class="dropdown">
                                                            <li><a href="<?= urlBase ?>erp/erpVentas.php">Ventas</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erpCompras.php">Compras</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-bancos.php"> Bancos</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-almacen.php"> Almacen</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-contabilidad.php">Contabilidad</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-reformas.php">Contabilidad Electronica</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-movil.php">ERP Movil</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-ecommerce.php">Ecommerce</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp- eProcurement.php">eProcurement</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Modulos Opcionales</a>
                                                        <ul class="dropdown">
                                                            <li><a href="<?= urlBase ?>erp/erp-produccion.php">Producción</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-mantenimiento.php">Mantenimiento</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-servicios.php">Servicios</a></li>
                                                            <li><a href="<?= urlBase ?>erp/erp-atributos.php">Atributos</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="<?= urlBase ?>business.php">Business Intelligence (BI)</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Por segmento</a>
                                                        <ul class="dropdown">
                                                            <li><a href="<?= urlBase ?>business/producion.php">Producción</a></li>
                                                            <li><a href="<?= urlBase ?>business/minorista.php">Venta Minorista</a></li>
                                                            <li><a href="<?= urlBase ?>business/servicios.php"> Servicios</a></li>
                                                            <li><a href="<?= urlBase ?>business/distribucion.php"> Distribución</a></li>
                                                            <li><a href="<?= urlBase ?>business/publico.php">Sector Público</a></li>
                                                            <li><a href="<?= urlBase ?>business/industria.php">Por Industria</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Por función</a>
                                                        <ul class="dropdown">
                                                            <li><a href="<?= urlBase ?>business/finanzas.php"> Finanzas</a></li>
                                                            <li><a href="<?= urlBase ?>business/ventas.php">Ventas</a></li>
                                                            <li><a href="<?= urlBase ?>business/gestion.php">Alta Gestión</a></li>
                                                            <li><a href="<?= urlBase ?>business/marketing.php">Marketing</a></li>
                                                            <li><a href="<?= urlBase ?>business/suministro.php">Cadena de Suministro </a></li>
                                                            <li><a href="<?= urlBase ?>business/ti.php">TI </a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Origenes de datos</a>
                                                        <ul class="dropdown">
                                                            <li><a href="<?= urlBase ?>business/datos.php">Por fuentes de datos</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="<?= urlBase ?>financiera.php">GEP-WALLET</a></li>                                    
                                            <li><a href="<?= urlBase ?>manage-my-people.php">Manage my People</a></li>
                                            <li><a href="<?= urlBase ?>sua.php">SUA Compliance</a></li>
                                           
                                            
                                           
                                            
                                            <li><a href="<?= urlBase ?>facturacion.php">Facturación Electrónica(Oracle EBS)</a></li>
                                            <li><a href="<?= urlBase ?>contabilidad.php">Contabilidad Electrónica(Oracle EBS)</a></li>
                                            
                                            
                                        </ul>
                                    </li>
                                    <li><a href="#">Servicios</a>
                                        <ul class="dropdown" style="width: 240px;">
                                            <li><a href="<?= urlBase ?>servicios/dba.php">DBA</a></li>
                                            <li><a href="<?= urlBase ?>servicios/desarrollo_app.php">Desarrollo de Apps IOS & ANDROID</a></li>
                                            <li><a href="<?= urlBase ?>servicios/seguridad.php">Seguridad de Datos</a></li>
                                            <li><a href="<?= urlBase ?>servicios/fabrica.php">Desarrollo de Software a la medida</a></li>
                                            <li><a>_________________________________________</a>
                                                     <li><a href="<?= urlBase ?>desarrollo_em/cursos.php">Cursos</a>
                                                <ul class="dropdown" style="width: 300px;">
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso1.php">Desarrollo para la alta dirección</a></li>
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso2.php">Técnicas de comunicación avanzada</a></li>
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso3.php">Líder docente y herramientas</a></li>
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso4.php">El personal operativo y su integración</a></li>
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso5.php">Neuroliderazgo</a></li>
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso6.php">Ventas y fidelidad de nuestros clientes</a></li>
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso7.php">Neuromarketing</a></li> 
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso8.php">Neurogerencia</a></li> 
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso9.php">cultura organizacional</a></li> 
                                                   <li><a href="<?= urlBase ?>desarrollo_em/curso10.php">Integración de equipos de trabajo</a></li>     
                                                </ul>
                                            </li>
                                            <li><a href="<?= urlBase ?>desarrollo_emp.php">Desarrollo Empresarial</a>
                                            <li><a href="<?= urlBase ?>desarrollo_em/staffing.php">Staffing</a></li>
                                            <li><a href="<?= urlBase ?>desarrollo_em/coaching.php">Coaching Directivo</a></li>
                                            <li><a href="<?= urlBase ?>abmm/madurez_empresarial.php">Madurez Empresarial</a></li>
                                        </ul>

                                    </li>
                                    <li><a href="#">Cloud</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= urlBase ?>pyxisCloud/cloud.php">Cloud Computing</a></li>
                                            <li><a href="<?= urlBase ?>pyxisCloud/saas.php">SaaS</a></li>
                                            <li><a href="<?= urlBase ?>pyxisCloud/paas.php">PaaS</a></li>
                                            <li><a href="<?= urlBase ?>pyxisCloud/iaas.php">IaaS</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="#">Pyxis</a>
                                        <ul class="dropdown">
                                            <li><a href="<?= urlBase ?>pyxis/quienesSomos.php">¿Quiénes Somos?</a></li>
                                            <li><a href="<?= urlBase ?>pyxis/clientes.php">Clientes</a></li>
                                            <li><a href="<?= urlBase ?>pyxis/socios.php">Socios Estrategicos</a></li>
                                            <li><a href="<?= urlBase ?>pyxis/contactanos.php">Contacto</a></li> 
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                       </div>
                </div>
            </div>
        </div>
    </header>
	
    <!-- ##### Header Area End ##### -->
	  <a href="https://wa.me/525522793490" target="_blank" class="whats" data-toggle="tooltip"><img src="https://img.icons8.com/color/96/000000/whatsapp.png"/ alt="Whatsapp Logo"></a>
