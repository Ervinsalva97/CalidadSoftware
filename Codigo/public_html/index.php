<?php 

include 'includes/app.php';

include 'classes/Lugar.php';
include 'classes/Paquete.php';


use App\Lugar;
use App\Paquete;



$lugares = Lugar::all3();
$paquetes = Paquete::all3();

templates('header');



?>
<!-- Header -->

    <header id="header" class="header">

        <div class="header-content">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="text-container">

                            <h1>DCS3 ofrece <span id="js-rotating">Relajación, paz, turismo</span></h1>

                            <p class="p-heading p-large"></p>

                            <a class="btn-solid-lg page-scroll" href="#intro">Intro</a>

                        </div>

                    </div> <!-- end of col -->

                </div> <!-- end of row -->

            </div> <!-- end of container -->

        </div> <!-- end of header-content -->

    </header> <!-- end of header -->

    <!-- end of header -->
    <!-- Intro -->

    <div id="intro" class="basic-1">

        <div class="container">

            <div class="row">

                <div class="col-lg-5">

                    <div class="text-container">

                        <div class="section-title">INTRO</div>

                        <h2>Agencia de Viajes Desestres - DCS3</h2>

                        <p>DCS3 es una compañía que ofrece servicios turísticos, revalorando la belleza paisajística del Perú. Conociendo nuevas rutas, poco visitadas.</p>

                        <p class="testimonial-text">"Ofrecer Productos y servicios, de calidad tangible para satisfacer las necesidades y preferencias de nuestros clientes con la mejor relación precio- calidad / Comprometidos siempre con el crecimiento de nuestro equipo humano, el mejoramiento de nuestros procesos y una óptima rentabilidad"</p>

                        <div class="testimonial-author">Erick Salazar - CEO</div>

                    </div> <!-- end of text-container -->

                </div> <!-- end of col -->

                <div class="col-lg-7">

                    <div class="image-container">

                        <img class="img-fluid" src="img/danzante_salto.jpg" alt="Cultura,Ancestral,Danzante,patrimonio cultural inmaterial">

                    </div> <!-- end of image-container -->

                </div> <!-- end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div> <!-- end of basic-1 -->

    <!-- end of intro -->





    <!-- Description -->

    <div class="cards-1">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    

                    <!-- Card -->

                    <div class="card">

                        <span class="fa-stack">

                            <span class="hexagon"></span>

                            <i class="fas fa-users fa-stack-1x"></i>

                        </span>

                        <div class="card-body">

                            <h4 class="card-title">Impacto Social</h4>

                            <p>Brindamos una al ternativa de solución ante el estrés generado por el aislamiento social obligatorio y los trabajos remotos, mostrando nuevas rutas de viajes.</p>

                        </div>

                    </div>

                    <!-- end of card -->



                    <!-- Card -->

                    <div class="card">

                        <span class="fa-stack">

                            <span class="hexagon"></span>

                            <i class="fas fa-leaf fa-stack-1x"></i>

                        </span>

                        <div class="card-body">

                            <h4 class="card-title">Impacto Medioambiental</h4>

                            <p>Al comprar un paquete estás ayudando a la conveservación de la belleza paisajística y reforestación de zonas contaminadas.</p>

                        </div>

                    </div>

                    <!-- end of card -->



                    <!-- Card -->

                    <div class="card">

                        <span class="fa-stack">

                            <span class="hexagon"></span>

                            <i class="fas fa-hand-holding-usd fa-stack-1x"></i>

                        </span>

                        <div class="card-body">

                            <h4 class="card-title">Impacto Económico</h4>

                            <p>Al adquirir un paquete, estás generando nuevos puestos de trabajo con los pobladores locales ayudando a reducir la pobresa en la zona rural.</p>

                        </div>

                    </div>

                    <!-- end of card -->



                </div> <!-- end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div> <!-- end of cards-1 -->

    <!-- end of description -->





    <!-- Services -->

    <div id="services" class="cards-2">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="section-title">SERVICIOS</div>

                    <h2>Elige El Paquete de Servicios<br> Que se Adapte a sus Necesidades</h2>

                </div> <!-- end of col -->

            </div> <!-- end of row -->

            <div class="row">

                <div class="col-lg-12">

                    <?php foreach($lugares as $lugar): ?>

                    <!-- Card -->

                    <div class="card">

                        <div class="card-image">

                            <img class="img-fluid" src="imagenes/<?php echo $lugar->imagen ?>" alt="alternative">

                        </div>

                        <div class="card-body">

                            <h3 class="card-title"><?php echo $lugar->nombre ?></h3>

                            <ul class="list-unstyled li-space-lg">

                                <li class="media">

                                    <i class="fas fa-square"></i>

                                    <div class="media-body">Precio Regular: S./<?php echo $lugar->precio ?></div>

                                </li>

                                <li class="media">

                                    <i class="fas fa-square"></i>

                                    <div class="media-body">Departamento-Provincia: <?php echo $lugar->departamento.'-'.$lugar->provincia ?></div>

                                </li>

                                <?php 

                                    if($lugar->descuento > 0.00){?>

                                        <li class="media">

                                    <i class="fas fa-square"></i>

                                    <div class="media-body">Descuento de <?php echo $lugar->descuento*100 ?>%</div>

                                </li>

                               <?php }

                                ?>

                            </ul>

                            <p class="price">Starting at <span>S./<?php

                                $precio = $lugar->precio;

                                $descuento = $lugar->precio * $lugar->descuento;

                                $subtotal = round($precio - $descuento, 2);

                                echo $subtotal;

                            ?></span></p>

                        </div>

                        <div class="button-container">

                            <a class="btn-solid-reg page-scroll" href="detail.php?id=<?php echo $lugar->id; ?>">DETAILS</a>

                        </div> <!-- end of button-container -->

                    </div>

                    <!-- end of card -->

                    <?php endforeach; ?>

                    <!--end foreach -->



                </div> <!-- end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->
                <div class="derecha-flex">
            <a href="lugares.php" class="btn-solid-reg" >Ver todos los lugares</a>
        </div>

    </div> <!-- end of cards-2 -->

    <!-- end of services -->

    



<!-- Details 1 -->
	<div id="details" class="accordion">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            <div class="derecha-flex">
                <a href="paquetes.php" class="btn-solid-reg page-scroll">Ver mas Paquetes turisticos</a>
            </div>
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
                <h2>Paquetes turisticos</h2>
                <?php foreach($paquetes as $indice=>$paquete): ?>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapse<?php echo $indice?>" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering"><?php echo $indice+1 ?></span><span class="accordion-title"><?php echo $paquete->codpaquete ?></span>
                        </span>
                    </div>
                    <div id="collapse<?php echo $indice ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                            <?php echo $paquete->contenido ?>
                        </div>
                    </div>
                </div> <!-- end of item -->
                <?php endforeach; ?>
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->            
		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->





    <!-- Details 2 -->

	<div class="tabs">

        <div class="area-1">

            <div class="tabs-container">

                

                <!-- Tabs Links -->

                <ul class="nav nav-tabs" id="ariaTabs" role="tablist">

                    <li class="nav-item">

                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-th"></i> Negocios</a>

                    </li>
<!--
                    <li class="nav-item">

                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i> Experiencia</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i> Calidad</a>

                    </li>
-->
                </ul>

                <!-- end of tabs links -->

                

                <!-- Tabs Content -->

                <div class="tab-content" id="ariaTabsContent">



                    <!-- Tab -->

                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">

                        <h4>Servicios comerciales para empresas</h4>

                        <p>Nuestros servicios por el momento no cuenta con un paquete para empresas. Sin embargo, puede visitar nuestros <a class="green page-scroll" href="#services">Servicios</a> y contactarnos para realizar su presupuesto.</p>

                        

                        <!-- Progress Bars -->

                        <div class="progress-container">

                            <div class="title">Servicio garatizado 100%</div>

                            <div class="progress">

                                <div class="progress-bar first" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>
<!--
                            <div class="title">Oportunidad de patrocinador 76%</div>

                            <div class="progress">

                                <div class="progress-bar second" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>
-->
                            <div class="title">Marketing en línea 100%</div>

                            <div class="progress">

                                <div class="progress-bar third" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

                            </div>

                        </div> <!-- end of progress-container -->

                        <!-- end of progress bars -->

                        

                    </div> <!-- end of tab-pane --> 

                    <!-- end of tab -->



                    <!-- Tab -->
<!--
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">

                        <ul class="list-unstyled li-space-lg first">

                            <li class="media">

                                <div class="media-bullet">1</div>

                                <div class="media-body"><strong>High quality</strong> is on top of our list when it comes to the way we deliver the services</div>

                            </li>

                            <li class="media">

                                <div class="media-bullet">2</div>

                                <div class="media-body"><strong>Maximum impact</strong> is what we look for in our actions</div>

                            </li>

                            <li class="media">

                                <div class="media-bullet">3</div>

                                <div class="media-body"><strong>Quality standards</strong> are important but meant to be exceeded</div>

                            </li>

                        </ul>

                        <ul class="list-unstyled li-space-lg last">

                            <li class="media">

                                <div class="media-bullet">4</div>

                                <div class="media-body"><strong>We're always looking</strong> for industry leaders to help them win their market position</div>

                            </li>

                            <li class="media">

                                <div class="media-bullet">5</div>

                                <div class="media-body"><strong>Evaluation</strong> is a key aspect of this business and important</div>

                            </li>

                            <li class="media">

                                <div class="media-bullet">6</div>

                                <div class="media-body"><strong>Ethic</strong> procedures ar alwasy at the base of everything we do</div>

                            </li>

                        </ul>

                    </div> 
-->
                    <!-- end of tab-pane -->

                    <!-- end of tab -->



                    <!-- Tab -->
<!--
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">

                        <p><strong>We strive to achieve</strong> 100% customer satisfaction for both types of customers: hiring companies and job seekers. Types of customers: <a class="green" href="#your-link">with huge potential</a></p>

                        <p><strong>Our goal is to help</strong> your company achieve its full potential and establish long term stability for <a class="green" href="#your-link">the stakeholders</a></p>

                        <ul class="list-unstyled li-space-lg">

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">It's easy to get a quotation, just call our office anytime</div>

                            </li>

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">We'll get back to you with an initial estimate soon</div>

                            </li>

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">Get ready to see results even after only 30 days</div>

                            </li>

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">Ask for a quote and start improving your business</div>

                            </li>

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">Just fill out the form and we'll call you right away</div>

                            </li>

                        </ul>

                    </div> 
-->
                    <!-- end of tab-pane -->

                    <!-- end of tab -->



                </div> <!-- end of tab-content -->

                <!-- end of tabs content -->



            </div> <!-- end of tabs-container -->

        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2"></div> <!-- end of area-2 -->

    </div> <!-- end of tabs -->

    <!-- end of details 2 -->





    <!-- Testimonials -->
<!--
    <div class="slider">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <h2>Lea los testimonios de nuestros clientes</h2>

                    <p class="p-heading">Our clients are our partners and we can not imagine a better future for our company without helping them reach their objectives</p>

                </div>--> <!-- end of col -->

           <!-- </div>  end of row 

            <div class="row">

                <div class="col-lg-12">
-->


                    <!-- Card Slider 

                    <div class="slider-container">

                        <div class="swiper-container card-slider">

                            <div class="swiper-wrapper">

                                -->

                                <!-- Slide 

                                <div class="swiper-slide">

                                    <div class="card">

                                        <img class="card-image" src="images/testimonial-1.jpg" alt="alternative">

                                        <div class="card-body">

                                            <div class="testimonial-text">The guys from Aria helped with getting my business off the ground and turning into a profitable company.</div>

                                            <div class="testimonial-author">Jude Thorn - Founder</div>

                                        </div>

                                    </div>-->

                                <!--</div>  end of swiper-slide -->

                                <!-- end of slide -->

        

                                <!-- Slide 

                                <div class="swiper-slide">

                                    <div class="card">

                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">

                                        <div class="card-body">

                                            <div class="testimonial-text">I purchased the Growth Accelerator service pack a few years ago and I renewed the contract each year. </div>

                                            <div class="testimonial-author">Marsha Singer - Marketer</div>

                                        </div>

                                    </div>  -->      

                               <!-- </div>  end of swiper-slide -->

                                <!-- end of slide -->

        

                                <!-- Slide 

                                <div class="swiper-slide">

                                    <div class="card">

                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">

                                        <div class="card-body">

                                            <div class="testimonial-text">Aria's CEO personally attends client meetings and gives his feedback on business growth strategies.</div>

                                            <div class="testimonial-author">Roy Smith - Developer</div>

                                        </div>

                                    </div>        
-->
                               <!-- </div>  end of swiper-slide -->

                                <!-- end of slide -->

        

                                <!-- Slide 

                                <div class="swiper-slide">

                                    <div class="card">

                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">

                                        <div class="card-body">

                                            <div class="testimonial-text">At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.</div>

                                            <div class="testimonial-author">Ronald Spice - Owner</div>

                                        </div>

                                    </div>-->
 
                            <!--    </div> end of swiper-slide -->

                                <!-- end of slide -->

        

                                <!-- Slide 
                                <div class="swiper-slide">

                                    <div class="card">

                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">

                                        <div class="card-body">

                                            <div class="testimonial-text">I recommend Aria to every business owner or growth leader that wants to take his company to the next level.</div>

                                            <div class="testimonial-author">Lindsay Rune - Manager</div>

                                        </div>

                                    </div>   -->
     

                                <!-- </div> end of swiper-slide -->

                                <!-- end of slide -->

        

                                <!-- Slide 

                                <div class="swiper-slide">

                                    <div class="card">

                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">

                                        <div class="card-body">

                                            <div class="testimonial-text">My goals for using Aria's services seemed high when I first set them but they've met them with no problems.</div>

                                            <div class="testimonial-author">Ann Black - Consultant</div>

                                        </div>

                                    </div>    -->    

                               <!-- </div>  end of swiper-slide -->

                                <!-- end of slide -->

                            
<!--
                            </div>  end of swiper-wrapper -->

        

                            <!-- Add Arrows 

                            <div class="swiper-button-next"></div>

                            <div class="swiper-button-prev"></div>
-->
                            <!-- end of add arrows -->

        

                        <!--</div>  end of swiper-container -->

                    <!--</div>  end of sliedr-container -->

                    <!-- end of card slider -->



            <!--    </div>  end of col -->

        <!--    </div>  end of row -->

    <!--    </div>  end of container -->

  <!--  </div>  end of slider -->

    <!-- end of testimonials -->





    <!-- Call Me -->

    <div id="callMe" class="form-1">

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="text-container">

                        <div class="section-title">Llamanos</div>

                        <h2 class="white">Pídanos que nos comuniquemos con usted llenando y enviando el formulario</h2>

                        <p class="white">Estás a solo unos pasos de una oferta personalizada. Simplemente complete el formulario y envíenoslo y le responderemos de inmediato con una llamada para ayudarlo a decidir qué paquete de servicio funciona.</p>

                        <ul class="list-unstyled li-space-lg white">

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">Es muy fácil, solo complete el formulario para que podamos llamar</div>

                            </li>

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">Durante la llamada, necesitaremos información sobre la empresa.</div>

                            </li>

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">No dude en enviarnos un correo electrónico para cualquier pregunta o consulta.</div>

                            </li>

                        </ul>

                    </div>

                </div> <!-- end of col -->

                <div class="col-lg-6">

                   

                    <!-- Call Me Form -->

                    <form action="correo.php" method="POST" data-toggle="validator" data-focus="false">

                        <div class="form-group">

                            <input type="text" class="form-control-input" id="lname" name="lname" required>

                            <label class="label-control" for="lname">Nombre</label>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control-input" id="lphone" name="lphone" required>

                            <label class="label-control" for="lphone">Teléfono</label>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control-input" id="lemail" name="lemail" required>

                            <label class="label-control" for="lemail">Email</label>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <select class="form-control-select" id="lselect" name="lselect" 
                            required>

                                <option class="select-option" value="" disabled selected>Interesado en...</option>

                                <option class="select-option" value="Viajes de promoción escolar">Viajes de promoción escolar</option>

                                <option class="select-option" value="Viajes para empresas">Viajes para empresas</option>

                                <option class="select-option" value="Nuevos lugares">Nuevos lugares</option>

                            </select>

                            <div class="help-block with-errors"></div>

                        </div>
<!--
                        <div class="form-group checkbox white">

                            <input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" required>Estoy de acuerdo con lo dicho en las <a class="white" href="privacy-policy.html">Politicas de privacidad</a> and <a class="white" href="terms-conditions.html">Términos y condiciones</a>

                            <div class="help-block with-errors"></div>

                        </div>
-->
                        <div class="form-group">

                            <input type="submit" class="form-control-submit-button" value="Llamame">

                        </div>

                        <div class="form-message">

                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>

                        </div>

                    </form>

                    <!-- end of call me form -->

                    

                </div> <!-- end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div> <!-- end of form-1 -->

    <!-- end of call me -->

    <!-- Project Lightboxes -->

    <!-- Lightbox -->

    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>Online Banking</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->



    <!-- Lightbox -->

    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>Classic Industry</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->



    <!-- Lightbox -->

    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>BoomBap Audio</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->



    <!-- Lightbox -->

    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>Van Moose</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->



    <!-- Lightbox -->

    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-5.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>Joy Moments</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->



    <!-- Lightbox -->

    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-6.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>Spark Events</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->



    <!-- Lightbox -->

    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-7.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>Casual Wear</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->



    <!-- Lightbox -->

    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">

        <div class="row">

            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>

            <div class="col-lg-8">

                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">

            </div> <!-- end of col -->

            <div class="col-lg-4">

                <h3>Zazoo Apps</h3>

                <hr class="line-heading">

                <h6>Strategy Development</h6>

                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>

                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>

                <div class="testimonial-container">

                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>

                    <p class="testimonial-author">General Manager</p>

                </div>

                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 

            </div> <!-- end of col -->

        </div> <!-- end of row -->

    </div> <!-- end of lightbox-basic -->

    <!-- end of lightbox -->

    <!-- end of project lightboxes -->





    <!-- Team -->

    <div class="basic-2">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <h2>Sobre el equipo de desarrollo</h2>

                    <p class="p-heading">Somos tan fuertes y conocedores como nuestro equipo. Así que aquí están los hombres y mujeres que ayudan a los clientes a cumplir sus objetivos y hacer crecer las empresas.</p>

                </div> <!-- end of col -->

            </div> <!-- end of row -->

            <div class="row">

                <div class="col-lg-12">



                    <!-- Team Member -->

                    <div class="team-member">

                        <div class="image-wrapper">

                            <img class="img-fluid" src="images/erick.jpg" alt="alternative">

                        </div> <!-- end of image-wrapper -->

                        <p class="p-large">Erick Salazar</p>

                        <p class="job-title">General Manager</p>

                        <span class="social-icons">

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-facebook-f fa-stack-1x"></i>

                                </a>

                            </span>

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-twitter fa-stack-1x"></i>

                                </a>

                            </span>

                        </span>

                    </div> <!-- end of team-member -->

                    <!-- end of team member -->



                    <!-- Team Member -->

                    <div class="team-member">

                        <div class="image-wrapper">

                            <img class="img-fluid" src="images/bruno.jpeg" alt="alternative">

                        </div> <!-- end of image wrapper -->

                        <p class="p-large">Bruno River</p>

                        <p class="job-title">Analista de Sistemas</p>

                        <span class="social-icons">

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-facebook-f fa-stack-1x"></i>

                                </a>

                            </span>

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-twitter fa-stack-1x"></i>

                                </a>

                            </span>

                        </span>

                    </div> <!-- end of team-member -->

                    <!-- end of team member -->



                    <!-- Team Member -->

                    <div class="team-member">

                        <div class="image-wrapper">

                            <img class="img-fluid" src="images/angelly.jpg" alt="alternative">

                        </div> <!-- end of image wrapper -->

                        <p class="p-large">Angelly Gutierrez</p>

                        <p class="job-title">Marketing</p>

                        <span class="social-icons">

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-facebook-f fa-stack-1x"></i>

                                </a>

                            </span>

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-twitter fa-stack-1x"></i>

                                </a>

                            </span>

                        </span>

                    </div> <!-- end of team-member -->

                    <!-- end of team member -->



                    <!-- Team Member -->

                    <div class="team-member">

                        <div class="image-wrapper">

                            <img class="img-fluid" src="images/miguel.jpeg" alt="alternative">

                        </div> <!-- end of image wrapper -->

                        <p class="p-large">Miguel Pretel</p>

                        <p class="job-title">Desarrollador WEB</p>

                        <span class="social-icons">

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-facebook-f fa-stack-1x"></i>

                                </a>

                            </span>

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-twitter fa-stack-1x"></i>

                                </a>

                            </span>

                        </span>

                    </div> <!-- end of team-member -->

                    <!-- end of team member -->

                    <!-- Team Member -->

                    <div class="team-member">

                        <div class="image-wrapper">

                            <img class="img-fluid" src="images/willians.jpg" alt="alternative">

                        </div> <!-- end of image wrapper -->

                        <p class="p-large">Willians Pantoja</p>

                        <p class="job-title">Desarrollador WEB</p>

                        <span class="social-icons">

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-facebook-f fa-stack-1x"></i>

                                </a>

                            </span>

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-twitter fa-stack-1x"></i>

                                </a>

                            </span>

                        </span>

                    </div> <!-- end of team-member -->

                    <!-- end of team member -->

                    <!-- Team Member -->

                    <div class="team-member">

                        <div class="image-wrapper">

                            <img class="img-fluid" src="images/angelo.jpeg" alt="alternative">

                        </div> <!-- end of image wrapper -->

                        <p class="p-large">Angelo Salvador</p>

                        <p class="job-title">Comunity manager</p>

                        <span class="social-icons">

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-facebook-f fa-stack-1x"></i>

                                </a>

                            </span>

                            <span class="fa-stack">

                                <a href="#your-link">

                                    <span class="hexagon"></span>

                                    <i class="fab fa-twitter fa-stack-1x"></i>

                                </a>

                            </span>

                        </span>

                    </div> <!-- end of team-member -->

                    <!-- end of team member -->

                </div> <!-- end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div> <!-- end of basic-2 -->

    <!-- end of team -->





    <!-- About 

    <div id="about" class="counter">

        <div class="container">

            <div class="row">

                <div class="col-lg-5 col-xl-6">

                    <div class="image-container">

                        <img class="img-fluid" src="images/about.jpg" alt="alternative">

                    </div>--> <!-- end of image-container 

                </div>--> <!-- end of col 

                <div class="col-lg-7 col-xl-6">

                    <div class="text-container">

                        <div class="section-title">ABOUT</div>

                        <h2>We're Passionate About Delivering Growth Services</h2>

                        <p>Our goal is to provide the right business growth services at the appropriate time so companies can benefit from the created momentum and thrive for a long period of time</p>

                        <ul class="list-unstyled li-space-lg">

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">Everything we recommend has direct positive impact</div>

                            </li>

                            <li class="media">

                                <i class="fas fa-square"></i>

                                <div class="media-body">You will become an important partner of our company</div>

                            </li>

                        </ul>

-->

                        <!-- Counter 

                        <div id="counter">

                            <div class="cell">

                                <div class="counter-value number-count" data-count="200">1</div>

                                <div class="counter-info">Happy<br>Users</div>

                            </div>

                            <div class="cell">

                                <div class="counter-value number-count" data-count="121">1</div>

                                <div class="counter-info">Issues<br>Solved</div>

                            </div>

                            <div class="cell">

                                <div class="counter-value number-count" data-count="159">1</div>

                                <div class="counter-info">Good<br>Reviews</div>

                            </div>

                        </div>
-->
                        <!-- end of counter -->



                    <!--</div>  end of text-container -->      

                <!--</div>  end of col -->

            <!--</div>  end of row -->

        <!--</div>  end of container -->

    <!--</div>  end of counter -->

    <!-- end of about -->





    <!-- Contact -->

    <div id="contact" class="form-2">

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="text-container">

                        <div class="section-title">CONTACTANOS</div>

                        <h2>Puede contactarnos en nuestras redes sociales</h2>

                        <p>Por motivos de pandemia no estamos atendiendo en ninguna de nuestras oficinas, por ese motivo le pedimos que nos pueda contactar con un mensaje desde cualquiera de nuestras redes sociales o llamando a los siguentes números</p>

                        <ul class="list-unstyled li-space-lg">
<!--
                            <li class="address"><i class="fas fa-map-marker-alt"></i>22nd Innovative Street, San Francisco, CA 94043, US</li>
-->
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+51 956 650 168</a></li>

                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+51 999 770 924</a></li>

                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com">turismo.dcs3@gmail.com</a></li>

                        </ul>

                        <h3>Síguenos en las redes sociales</h3>



                        <span class="fa-stack">

                            <a href="https://www.facebook.com/dcs3tour/" target="_blank">

                                <span class="hexagon"></span>

                                <i class="fab fa-facebook-f fa-stack-1x"></i>

                            </a>

                        </span>

                        <span class="fa-stack">

                            <a href="https://www.instagram.com/dcs3turismo/" target="_blank">

                                <span class="hexagon"></span>

                                <i class="fab fa-instagram fa-stack-1x"></i>

                            </a>

                        </span>

                        <span class="fa-stack">

                            <a href="https://anchor.fm/dcs3-desestres" target="_blank">

                                <span class="hexagon"></span>

                                <i class="fas fa-podcast fa-stack-1x"></i>

                            </a>

                        </span>

                        <span class="fa-stack">

                            <a href="https://www.youtube.com/channel/UC7UKoVupRroMVsK-1oLRSng">

                                <span class="hexagon"></span>

                                <i class="fab fa-youtube fa-stack-1x"></i>

                            </a>

                        </span>
<!--
                        <span class="fa-stack">

                            <a href="#your-link">

                                <span class="hexagon"></span>

                                <i class="fab fa-linkedin-in fa-stack-1x"></i>

                            </a>

                        </span>

                        <span class="fa-stack">

                            <a href="#your-link">

                                <span class="hexagon"></span>

                                <i class="fab fa-behance fa-stack-1x"></i>

                            </a>

                        </span>
-->
                    </div> <!-- end of text-container -->

                </div> <!-- end of col 

                <div class="col-lg-6">

                    -->

                    <!-- Contact Form 

                    <form id="contactForm" data-toggle="validator" data-focus="false">

                        <div class="form-group">

                            <input type="text" class="form-control-input" id="cname" required>

                            <label class="label-control" for="cname">Name</label>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control-input" id="cemail" required>

                            <label class="label-control" for="cemail">Email</label>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <textarea class="form-control-textarea" id="cmessage" required></textarea>

                            <label class="label-control" for="cmessage">Your message</label>

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group checkbox">

                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I agree with Aria's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 

                            <div class="help-block with-errors"></div>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>

                        </div>

                        <div class="form-message">

                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>

                        </div>

                    </form>
-->
                    <!-- end of contact form -->



                 <!-- </div>end of col -->

            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div> <!-- end of form-2 -->

    <!-- end of contact -->





<?php 

templates('footer');



?>