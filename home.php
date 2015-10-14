<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    	<div class="cont-site col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
            <div id="content" class="clearfix">
                <div id="inicio">
                    <div class="container clearfix">
                        <div class="cont-site col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                            <h1><img src="<?php bloginfo('template_directory'); ?>/imag/logo/logo-white.png" alt="XIII Congreso Latinoamericano de Rehabilitación de la cara y prótesis maxilofacial" class="img-responsive" /></h1>
                            <h3>Santiago de Chile, 17, 18 y 19 de marzo</h3>
                            <h3>Auditorio [nombre auditorio], Universidad de Los Andes</h3>
                            <div class="cont-button clearfix">
                                <a href="formulario.html" class="descargar ajax" id="inscripciones">Inscripciones al Congreso</a>
                            </div>
                        </div>
                    </div>
                    <div id="main-nav">
                        <div class="navbar navbar-static">
                            <div class="container">
                                <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="glyphicon glyphicon-bar"></span>
                                    <span class="glyphicon glyphicon-bar"></span>
                                    <span class="glyphicon glyphicon-bar"></span>
                                </a>
                                <div class="navbar-collapse collapse">
                                    <nav id="nav_header">
                                        <?php wp_nav_menu( array('menu' => 'Menu Principal', 'menu_class' => 'nav navbar-nav')); ?>
                                    </nav>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
                <div id="intro">
                    <div class="container clearfix">
                        <div class="cont-logo col-lg-5 col-md-5 col-md-5 col-sm-12">
                            <?php the_post_thumbnail('main-image', array('class' => 'img-responsive')); ?>
                        </div>
                        <div class="cont-text col-lg-7 col-md-7 col-md-7 col-sm-12">
                            <?php
                                global $post;
                                if ( has_excerpt( $post->ID ) ) {
                                    echo '<h3>'.get_the_excerpt().'</h3>';
                                } 
                            ?>
                            <? the_content();?>
                        </div>
                    </div>
                </div>
                <div id="expositores">
                    <div class="container clearfix">
                        <div class="cont-expositores col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Expositores</h3>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-johan"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/johan.jpg" alt="Dr. Johan Wolfaardt" class="img-responsive" /></a>
                                    </div>
                                    <h4>Dr. Johan Wolfaardt</h4>
                                    <h5>Canadá</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-hadi"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/hadi.jpg" alt="Dr. Hadi Seikaly" class="img-responsive" />
                                    </a></div>
                                    <h4>Dr. Hadi Seikaly</h4>
                                    <h5>Canadá</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-jana"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/jana.jpg" alt="Dra. Jana Rieger" class="img-responsive" />
                                    </a></div>
                                    <h4>Dra. Jana Rieger</h4>
                                    <h5>Canadá</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-harry"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/harry.jpg" alt="Dr. Harry Reintsema" class="img-responsive" /></a>
                                    </div>
                                    <h4>Dr. Harry Reintsema</h4>
                                    <h5>Holanda</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-trevor"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/trevor.jpg" alt="Dr. Trevor Coward" class="img-responsive" /></a>
                                    </div>
                                    <h4>Dr. Trevor Coward</h4>
                                    <h5>Inglaterra</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-luciano"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/luciano.jpg" alt="Dr. Luciano Dib" class="img-responsive" /></a>
                                    </div>
                                    <h4>Dr. Luciano Dib</h4>
                                    <h5>Brasil</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-freddy"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/freddy.jpg" alt="Dr. Freddy Álvarez" class="img-responsive" /></a>
                                    </div>
                                    <h4>Dr. Freddy Álvarez</h4>
                                    <h5>Cuba</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="item-expo">
                                    <div class="cont-image">
                                        <a href="#" id="pop-rosemary"><img src="<?php bloginfo('template_directory'); ?>/imag/expo/rosemary.jpg" alt="Dra. Rosemary Seelaus" class="img-responsive" /></a>
                                    </div>
                                    <h4>Dra. Rosemary Seelaus</h4>
                                    <h5>Estados Unidos</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="organizadores">
                    <div class="container clearfix">
                        <div class="cont-org col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3>Organizadores</h3>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/logo/sociedad.png" alt="Sociedad de Prótesis y Rehabilitación Oral de Chile" class="img-responsive" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/logo/ismr.png" alt="ISMR" class="img-responsive" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/logo/orema.png" alt="Clínica OREMA" class="img-responsive" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h3>Patrocinadores</h3>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/logo/uandes.jpg" alt="Universidad de Los Andes" class="img-responsive" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/logo/sociedad.png" alt="Sociedad de Prótesis y Rehabilitación Oral de Chile" class="img-responsive" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/logo/sociedad.png" alt="Sociedad de Prótesis y Rehabilitación Oral de Chile" class="img-responsive" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 media">
                                <h3>Media Partner</h3>
                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 item-logo">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/logo/club.png" alt="Club de Lectores El Mercurio" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="programa">
                    <div class="container clearfix">
                        <div class="cont-programa col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Programa 2016</h3>
                            <div class="clearfix">
                                <ul>
                                    <li><strong>Jueves 17 de marzo:</strong> 8:30 a 18:00 horas – Vino de honor de 18:00 a 19:30 horas incluido en el valor del congreso.</li>
                                    <li><strong>Viernes 18 de marzo:</strong> 9:00 a 18:00 horas</li>
                                    <li><strong>Sábado 19 de marzo:</strong> 9:00 a 12:30 horas – Visita con almuerzo a Viña Santa Rita (no incluido en valor del congreso – participación por adhesión). Retorno al hotel, horario estimado: xx horas</li>
                                </ul>
                            </div>
                            <div class="clearfix cont-pre">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h4>Temario de Programa Preliminar:</h4>
                                    <ul>
                                        <li>Tratamiento interdisciplinario de pacientes con compromiso en cabeza y cuello.</li>
                                        <li>Planificación funcional en reconstrucción maxilofacial.</li>
                                        <li>Diseño con tecnología 3D aplicado en reconstrucción facial.</li>
                                        <li>Resultados funcionales – nuevo estándar mundial.</li>
                                        <li>Avances tecnológicos en prótesis faciales.</li>
                                        <li>Tratamiento odontológico en pacientes con cáncer oral.</li>
                                        <li>Manejo del paciente irradiado.</li>
                                        <li>Implantes oseointegrados y reconstrucción maxilofacial.</li>
                                        <li>Uso de colgajos libres microquirúrgicos en reconstrucción de cabeza y cuello.</li>
                                        <li>Manejo de fonoaudiología como pilar en la rehabilitación funcional</li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <h4>Congreso dirigido a:</h4>
                                    <ul>
                                        <li>Odontólogos</li>
                                         <li>Cirujanos Oral y Maxilofacial</li>
                                         <li>Cirujanos de Cabeza y Cuello</li>
                                         <li>Cirujanos Plásticos</li>
                                         <li>Fonoaudiología</li>
                                         <li>Diseñadores</li>
                                         <li>Tecnólogos</li>
                                         <li>Técnicos afines</li>
                                    </ul>   
                                </div>  
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <img src="<?php bloginfo('template_directory'); ?>/imag/back/bg-logo.png" alt="logo congreso" class="img-responsive" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(function_exists('base_pages')) base_pages("id=".$post->ID."&class=bp&childs=true"); ?>
                <div id="social">
                    <div class="container clearfix">
                        <div class="cont-social col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Conoce y participa de nuestro programa social</h3>
                            <div class="clearfix">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-social">
                                            <a href="#">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/foto-social01.jpg" alt="" class="img-responsive" />
                                                <h4>Vino de Honor en la <br />Universidad de los Andes</h4>
                                                <div class="shadow"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-social">
                                            <a href="#">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/santa-rita.jpg" alt="" class="img-responsive" />
                                                <h4>Recorrido por <br />Viña Santa Rita</h4>
                                                <div class="shadow"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cont-description clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <h5>Jueves 17 de Marzo a las 18:00</h5>
                                        <p>Vino de Honor – Universidad de Los Andes<br />Incluido en el valor del Congreso</p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <h5>Sábado 19 de Marzo a las 12:30</h5>
                                        <p>Salida a Visita con Almuerzo a Viña Santa Rita<br />Valor de Adhesión a Visita (no incluido en el valor del Congreso): CLP 65.000</p>
                                        <p>Programa incluye: Traslado Universidad de Los Andes – Viña Santa Rita – Hotel Plaza El Bosque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ubicacion">
                    <div class="cont-layer">
                        <div class="container clearfix">
                            <div class="cont-ubicacion col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>Lugar del Evento e Información de Viaje</h3>
                                <div class="clearfix recuadro">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="cont-ubica">
                                            <div class="img-ubica">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/mapa-lugar.jpg" alt="" class="img-responsive" />
                                            </div>
                                            <h4><a href="#">Mapa del Lugar</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="cont-ubica">
                                            <div class="img-ubica">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/mapa-acceso.jpg" alt="" class="img-responsive" />
                                            </div>
                                            <h4><a href="#">¿Cómo llegar?</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="cont-ubica">
                                            <div class="img-ubica">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/acercamiento.jpg" alt="" class="img-responsive" />
                                            </div>
                                            <h4><a href="#">Servicio de Acercamiento</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="cont-ubica">
                                            <div class="img-ubica">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/hotel.jpg" alt="" class="img-responsive" />
                                            </div>
                                            <h4><a href="#">Información de Viaje</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cont-button clearfix">
                                    <a href="#" class="descargar">Ver información de viaje</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="auspiciadores">
                    <div class="container clearfix">
                        <h3>Auspiciadores</h3>
                        <div class="cont-org col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 item-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/sociedad.png" alt="Sociedad de Prótesis y Rehabilitación Oral de Chile" class="img-responsive" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 item-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/ismr.png" alt="ISMR" class="img-responsive" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 item-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/orema.png" alt="Clínica OREMA" class="img-responsive" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 item-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/uandes.jpg" alt="Universidad de Los Andes" class="img-responsive" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 item-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/sociedad.png" alt="Sociedad de Prótesis y Rehabilitación Oral de Chile" class="img-responsive" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 item-logo">
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/sociedad.png" alt="Sociedad de Prótesis y Rehabilitación Oral de Chile" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>