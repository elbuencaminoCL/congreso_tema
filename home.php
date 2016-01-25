<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    <? 
        define('MY_CUR_LANG',$my_transposh_plugin->target_language);
        global $my_transposh_plugin;
    ?>
    <div class="cont-site col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
        <div id="content" class="clearfix">
            <div id="inicio">
                    <div class="container clearfix">
                        <div class="cont-site col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                            <h1>
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/logo-soc-white.png" alt="XIII Congreso Latinoamericano de Rehabilitación de la cara y prótesis maxilofacial" class="img-responsive" />
                                <img src="<?php bloginfo('template_directory'); ?>/imag/logo/logo-white.png" alt="XIII Congreso Latinoamericano de Rehabilitación de la cara y prótesis maxilofacial" class="img-responsive" />
                            </h1>
                            <? 
                                if(MY_CUR_LANG == 'es') {
                                    $fecha = get_field('_ciudad_y_fecha');
                                    echo '<h3>'.$fecha.'</h3>'; 
                                    $lugar = get_field('_lugar');
                                    echo '<h3>'.$lugar.'</h3>';
                                } elseif(MY_CUR_LANG == 'en') {
                                    $date = get_field('_city_and_date');
                                    echo '<h3>'.$date.'</h3>'; 
                                    $venue = get_field('_venue');
                                    echo '<h3>'.$venue.'</h3>';
                                }
                            ?>
                            <div class="cont-button clearfix">
                                <a href="#" id="pop-inscripcion" class="descargar">Inscripciones al Congreso</a>
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
                            <?php global $query_string;
                            query_posts( $query_string . '&post_type=expositores' );?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="item-expo">
                                                <div class="cont-image">
                                                    <a href="#" id="pop-<? echo $post->post_name;?>"><?php echo get_the_post_thumbnail($page->ID, 'expositores', array('class' => 'img-responsive'));?></a>
                                                </div>
                                                <h4><? the_title();?></h4>
                                                <h5>
                                                    <? $pais = get_field('_indicar_pais');
                                                    echo $pais; ?>
                                                </h5>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                <?php endif; ?>
                            <?php wp_reset_query();?>
                        </div>
                    </div>
                </div>
                <div id="organizadores">
                    <div class="container clearfix">
                        <div class="cont-org col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cont-org col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>Organizadores</h3>
                                <?php global $query_string;
                                query_posts( $query_string . '&post_type=organizadores' );?>
                                    <?php if (have_posts()) : ?>
                                        <?php while (have_posts()) : the_post(); ?>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                                <?php echo get_the_post_thumbnail($page->ID, 'organizadores', array('class' => 'img-responsive'));?>
                                            </div>
                                        <?php endwhile;?>
                                    <?php endif; ?>
                                <?php wp_reset_query();?>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 patrocinadores">
                                <h3>Patrocinadores</h3>
                                <?php global $query_string;
                                query_posts( $query_string . '&post_type=patrocinadores' );?>
                                    <?php if (have_posts()) : ?>
                                        <?php $i = 0; while (have_posts()) : the_post(); ?>
                                            <?php if($i==0) { 
                                            echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo first-child clearfix">';
                                                echo get_the_post_thumbnail($page->ID, 'patrocinadores', array('class' => 'img-responsive'));
                                            echo '</div>';
                                            } else { 
                                                echo '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 item-logo">';
                                                    echo get_the_post_thumbnail($page->ID, 'patrocinadores', array('class' => 'img-responsive'));
                                                echo '</div>';
                                            } ?>
                                        <?php ++$i; endwhile;?>
                                    <?php endif; ?>
                                <?php wp_reset_query();?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(function_exists('programa_pages')) programa_pages("id=".$post->ID."&class=pp&childs=true"); ?>
                <?php if(function_exists('base_pages')) base_pages("id=".$post->ID."&class=bp&childs=true"); ?>
                <div id="social">
                    <div class="container clearfix">
                        <div class="cont-social col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3>Conoce y participa de nuestro programa social</h3>
                            <div class="clearfix">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-social">
                                            <div class="cont-social">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/foto-social01.jpg" alt="" class="img-responsive" />
                                                <h4>Vino de Honor en la <br />Universidad de los Andes</h4>
                                                <div class="shadow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-social">
                                            <a href="#" id="pop-recorrido">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/santa-rita.jpg" alt="" class="img-responsive" />
                                                <h4>Recorrido por <br />Viña Santa Rita</h4>
                                                <div class="shadow"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cont-description clearfix row">
                                    <? 
                                        if(MY_CUR_LANG == 'es') {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
                                                echo '<h5>Jueves 17 de Marzo a las 18:00</h5>';
                                                echo '<p>Vino de Honor – Universidad de Los Andes<br />Incluido en el valor del Congreso</p>';
                                            echo '</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
                                                echo '<h5>Sábado 19 de Marzo a las 12:30</h5>';
                                                echo '<p>Salida a Visita con Almuerzo a Viña Santa Rita<br />Valor de Adhesión a Visita (no incluido en el valor del Congreso): CLP 70.000 (* sujeto a una cantidad mínima de participantes)</p>';
                                                echo '<p>Programa incluye: Traslado Universidad de Los Andes - Viña Santa Rita - Hotel Plaza El Bosque</p>';
                                            echo '</div>';
                                        } elseif(MY_CUR_LANG == 'en') {
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
                                                echo '<h5>Thursday, March 17th – 6 pm</h5>';
                                                echo '<p>Cheese & Wine at Universidad de Los Andes (included in Conference Fee)</p>';
                                            echo '</div>';
                                            echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">';
                                                echo '<h5>Saturday, March 19th at 12:30</h5>';
                                                echo '<p>Visit to Viña Santa Rita – Tour, lunch and tasting.<br />Fee: CLP 70.000* - not included in Conference Fee (* minimum number of participants required)</p>';
                                                echo '<p>Program includes transportation from Universidad de Los Andes, venue of the meeting - Viña Santa Rita - Hotel Plaza el Bosque (Nueva Las Condes)</p>';
                                            echo '</div>';
                                        }
                                    ?>
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
                                            <h4><a href="#" id="pop-mapa">Mapa del Lugar</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="cont-ubica">
                                            <div class="img-ubica">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/mapa-acceso.jpg" alt="" class="img-responsive" />
                                            </div>
                                            <h4><a href="#" id="pop-como-llegar">¿Cómo llegar?</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="cont-ubica">
                                            <div class="img-ubica">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/acercamiento.jpg" alt="" class="img-responsive" />
                                            </div>
                                            <h4><a href="#" id="pop-servicio">Servicio de Acercamiento</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="cont-ubica">
                                            <div class="img-ubica">
                                                <img src="<?php bloginfo('template_directory'); ?>/imag/demo/hotel.jpg" alt="" class="img-responsive" />
                                            </div>
                                            <h4><a href="#" id="pop-info-viaje">Información de Viaje</a></h4>
                                            <div class="div-bg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="auspiciadores">
                    <div class="container clearfix">
                        <h3>Auspiciadores</h3>
                        <?php global $query_string;
                        query_posts( $query_string . '&post_type=auspiciadores' );?>
                            <?php if (have_posts()) : ?>
                                <div class="cont-org col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <?php while (have_posts()) : the_post(); ?>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item-logo">
                                            <?php echo get_the_post_thumbnail($page->ID, 'logos-image', array('class' => 'img-responsive'));?>
                                        </div>
                                    <?php endwhile;?>
                                </div>
                            <?php endif; ?>
                        <?php wp_reset_query();?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>