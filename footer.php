		<? 
            define('MY_CUR_LANG',$my_transposh_plugin->target_language);
            global $my_transposh_plugin;
        ?>
        <?php if ( is_page('inicio') || is_front_page() ) { ?>
				<footer class="clearfix">
					<div class="container clearfix">
						<p>XIII Congreso Latinoamericano de Rehabilitación de la Cara y Prótesis Maxilofacial 2016. Todos los derechos reservados.</p>
					</div>
				</footer>
			</div>
			<!--POPUP-->
            <?php global $query_string;
            query_posts( $query_string . '&post_type=expositores' );?>
                <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                    <div id="cv-<? echo $post->post_name;?>" class="hidden-div bMulti">
                            <span class="button b-close"><span>Cerrar</span></span>
                            <div class="content">
                                <h4><? the_title()?></h4>
                                <?the_content();?>
                            </div>
                        </div>       
                <?php endwhile; endif;?>
            <?php wp_reset_query();?>
            <div id="form-inscripcion" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <?php 
                        $page = get_posts(
                            array(
                                'name'      => 'formulario-de-inscripcion',
                                'post_type' => 'page'
                            )
                        );
                        if ($page){
                            echo '<h3 class="title">'.$page[0]->post_title.'</h3>';
                            echo '<div class="excerpt">'.$page[0]->post_excerpt.'</div>';
                            if(MY_CUR_LANG == 'es') {
                                echo do_shortcode( '[contact-form-7 id="20" title="Formulario de Inscripción"]' );
                            } elseif(MY_CUR_LANG == 'en') {
                                echo do_shortcode( '[contact-form-7 id="113" title="Formulario de Inscripción (Inglés)"]' );
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="form-contacto" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <?php 
                        $page = get_posts(
                            array(
                                'name'      => 'contacto',
                                'post_type' => 'page'
                            )
                        );
                        if ($page){
                            echo '<h3 class="title">'.$page[0]->post_title.'</h3>';
                            echo '<div class="excerpt">'.$page[0]->post_excerpt.'</div>';
                            if(MY_CUR_LANG == 'es') {
                                echo do_shortcode( '[contact-form-7 id="28" title="Formulario de Contacto"]' );
                            } elseif(MY_CUR_LANG == 'en') {
                                echo do_shortcode( '[contact-form-7 id="112" title="Formulario de Contacto (Inglés)"]' );
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="mapa" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <img src="<?php bloginfo('template_directory'); ?>/imag/demo/mapa-campus.jpg" alt="" class="img-responsive" />
                </div>
            </div>
            <div id="servicio" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <h3>Servicio de Acercamiento</h3>
                    <p>Contaremos con un servicio de buses de acercamiento entre el Hotel Plaza el Bosque (Nueva Las Condes) y la Universidad de Los Andes. Dicho servicio se realizará una vez en las mañanas de ida y una vez en la tarde de vuelta. El servicio no tiene costo, y será por orden de llegada.</p>
                </div>
            </div>
            <div id="info-viaje" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <h3>Información de Viaje</h3>
                    <p><strong>Hotel Sugerido: Hotel Plaza el Bosque</strong></p>
                    <p>Hotel Plaza El Bosque Nueva Las Condes, se ubica a pocos pasos de la estación de Metro Manquehue y concurrido Parque Araucano, reconocido punto verde de la comuna. Continuando con el estilo y tradición de Hoteles Plaza el Bosque, en Nueva Las Condes disfrutará de una vanguardista infraestructura, desayuno buffet, restaurante con terraza, piscina, gimnasio y spa.</p> 
                    <p>Para el Congreso, los participantes contarán con tarifas preferenciales. Además, será el punto de encuentro para la salida y regreso de los buses de acercamiento (Hotel – Universidad Los Andes – Hotel). Para hacer sus reservas, contáctese con: reservas@plazaelbosque.cl (mencionando el XIII Congreso Latinoamericano)</p>
                    <p><a href="http://www.plazaelbosque.cl" target="_blank">www.plazaelbosque.cl</a></p>
                    <div class="cont-imag col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img src="<?php bloginfo('template_directory'); ?>/imag/demo/fachada.jpg" alt="" class="img-responsive col-lg-6 col-md-6 col-sm-6 col-xs-12" />
                        <img src="<?php bloginfo('template_directory'); ?>/imag/demo/habitacion.jpg" alt="" class="img-responsive col-lg-6 col-md-6 col-sm-6 col-xs-12" />
                    </div>
                    <p>Para otras reservas de hotel, servicios de transporte, tours y excursiones dentro y fuera de Santiago por favor visite: www.turistik.cl</p>
                    <p>TURISTIK, empresa de turismo que ha recibido importantes distinciones en nuestro país, aplica por primera vez en Chile el innovador circuito Santiago Hop on / Hop off constituido por una flota de buses rojos de dos pisos. Cuenta con oficinas de ventas y atención en en el Mall Parque Arauco, Patio Bellavista, Mercado Central, Paseo Los Dominicos y Hotel Sheraton. Además, ofrece diversos servicios de transporte (desde y hacia aeropuerto), incluyendo diferentes excursiones entorno a la zona central de Chile y reservas de hotel.</p>
                    <p>Mail de contacto para el Congreso 2016: grupos@turistik.cl</p>
                </div>
            </div>
            <div id="como-llegar" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <img src="<?php bloginfo('template_directory'); ?>/imag/demo/mapa.jpg" alt="" class="img-responsive" />
                </div>
            </div>
            <div id="recorrido" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <h3>Recorrido por Viña Santa Rita</h3>
                    <p>Una vez finalizado el congreso, nos trasladaremos a la Viña Santa Rita para disfrutar de un grato almuerzo en la Casona Colonial de Doña Paula Jaraquemada, de fines del siglo XVIII, tras el cual realizaremos un recorrido guiado por la Historia de Chile y su Viticultura. Este paseo nos permitirá recorrer los jardines, conocer el proceso de la elaboración del vino, conocer las diferentes bodegas y la planta de embotellamiento.</p>
                    <p>Después disfrutaremos de una degustación de 3 de los vinos Reserva y Gran Reserva de la Viña.</p>
                </div>
            </div>
            <!--/POPUP-->
    	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
		<?php } else { ?>
			<footer style="display:none"></footer>
		<?php } ?>
<?php wp_footer(); ?>
</body>
</html>