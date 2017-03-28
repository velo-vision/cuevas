<?php
//template name: index
get_header(); ?>
<!--contenido 1 inicio-->
			<div class="row margin-contenido">
				<div class="col s12 l12 center-align">
					<p class="title-home">Bienvenidos a</p>
					<p class="subtitle">GRUPO CUEVAS</p>
					<div class="col s12 m6 l6 separacion-btn">
						<a href="#empresa"><input type="submit" name="home-mas" value="CONOCE MÁS" class="btn btn-home"></a>
					</div>
					<div class="col s12 m6 l6 separacion-btn2">
						<a href="#referencias"><input type="submit" name="obras" value="OBRAS" class="btn btn-home"></a>
					</div>
					<div class="col s12 m12 center-align hide icons-sociales">
	                  <a href="#"><i class="fa fa-facebook blanco icon-social-sep" aria-hidden="true"></i></a>
	                  <a href="#"><i class="fa fa-twitter blanco icon-social-sep" aria-hidden="true"></i></a>
	                  <a href="#"><i class="fa fa-instagram blanco icon-social-sep" aria-hidden="true"></i></a>
	               </div>
				</div>
			</div>
		</div>
	</section>
	<!--contenido 2 nuestra empresa-->
			<section id="empresa">
				<div class="row nomargin">
					<div class="col s12 m8 offset-m2 l6 offset-l3 center-align margin-cvas nopadding">
					  <p class="title-dos">GRUPO CUEVAS</p>
					 		 <?php $post = get_post(104); //92 o 104
								$title = $post->post_title;
								$contenido = $post->post_content; //Guardamos en $contenido el contenido del post
			  				  ?>
					  <P class="bold"><?php echo  $title; ?></P>
					  <div class="col l4 offset-l4 m4 offset-m4 s6 offset-s3 borde-cuevas"></div>
						<div class="col s12 m12 l12 nopadding">
								<?php if (has_post_thumbnail()) {
					            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					            echo '<li class="img-cuevas" style="background: url('. $url.')">';
					            //echo '<img src="'.$url.'" class="size-mas">';
					            } ?>
						</div>
						<div class="col col l12 margin-nustra contenido-cuevas">
							<p><?php echo $contenido; ?></p>
						</div>
					</div>
				</div>
			</section>
	<!--contenido 3 sliders geotecnica-->
	<section id="geotecnica">
		<div class="row nomargin">
			<div class="col l12 fondo-gris center-align nopadding">
				<div class="col s12 m6 offset-m3 l4 offset-l4 margin-geo">
					<p class="title-tres">GEOTÉCNICA</p>
				</div>
				<div class="col s12 m12 l12 nopadding">
					<div class="col s12 m12 l8 nopadding">
						<div id="Fade1" class="w3-container geotecnica w3-animate-opacity">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
									<li>
										<img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
										<div class="caption left-align">
											<h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
										</div>
									</li>
									<li>
										<img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
										<div class="caption left-align">
											<h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
										</div>
									</li>
							    </ul>
						  	</div>
						</div>
						<div id="Fade2" class="w3-container geotecnica w3-animate-opacity" style="display: none;">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>

							    </ul>
						  	</div>
						 </div>
						 <div id="Fade3" class="w3-container geotecnica w3-animate-opacity" style="display: none;">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>

							    </ul>
						  	</div>
						 </div>
						 <div id="Fade4" class="w3-container geotecnica w3-animate-opacity" style="display: none;">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>

							    </ul>
						  	</div>
						 </div>
						 <div id="Fade5" class="w3-container geotecnica w3-animate-opacity" style="display: none;">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="Fade6" class="w3-container geotecnica w3-animate-opacity" style="display: none;">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						<div id="Fade7" class="w3-container geotecnica w3-animate-opacity" style="display: none;">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						</div>
					</div>
					<div class="col s12 m12 l4 nopadding">
						<nav  class="w3-sidenav w3-black w3-card-2">
						    <a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Fade1')">
							  	<div class="col s12 l12 text-slider-derec">
									<p>ESTUDIOS DE MECÁNICA DE SUELOS</p>
								</div>
							</a>
						 	<a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Fade2')">
						 		<div class="col s12 l12 text-slider-derec">
									<P>SONDEO PARA LA EXPLORACIÓN DEL SUBSUELO</P>
								</div>
						 	</a>
						 	<a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Fade3')">
						 		<div class="col s12 l12 text-slider-derec">
									<P>DISEÑO DE CIMIENTACIONES, ASESORIA GEOTÉCNICA DE OBRA EN LA CONSTRUCCIÓN DE CIMIENTOS</P>
								</div>
						 	</a>
						 	<a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Fade4')">
						 		<div class="col s12 l12 text-slider-derec">
									<P>ASESORÍA EN CIMIENTACIONES DIFÍCILES.</P>
								</div>
						 	</a>
						 	<a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Fade5')">
						 		<div class="col s12 l12 text-slider-derec">
									<P>SUPERVISIÓN GEOTÉCNICA EN EXCAVACIONES PROFUNDAS.</P>
								</div>
						 	</a>
						 	<a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Fade6')">
						 		<div class="col s12 l12 text-slider-derec">
									<P>ANÁLISIS DE ESTABILIDAD DE TALUDES EN EXCAVACIONES PROFUNDAS.</P>
								</div>
						 	</a>
						 	<a href="javascript:void(0)" class="tablink" onclick="openLink(event, 'Fade7')">
						 		<div class="col s12 l12 text-slider-derec">
									<P>DISEÑO DE PAVIMENTOS FLEXIBLES Y RÍGIDOS.</P>
								</div>
						 	</a>
						 </nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--contenido 4 sliders construccion-->
<!-- slider -->
								<?php $Slider3 =  get_field("sliderconstruccion", 170); ?>
								  	<?php /*foreach ($Slider3 as $key => $value) {?>
								  		<?php echo $value['titulo'] ?>
								  		<?php echo $value['menu1'] ?>
								  		<img src="<?php //echo $value['imagenslider'] ?>"/>									
									<?php } */?>
								<!-- Slider -->	
	<section id="construccion">
		<div class="row nomargin">
			<div class="col s12 m12 l12 fondo-azul center-align nopadding">
				<div class="col s12 m6 offset-m3 l4 offset-l4">
					<p class="title-cuatro">CONSTRUCCIÓN</p>
				</div>
				<div class="col s12 l12 nopadding">
					<div id="content-l" class="col s12 m12 l4 content sin-disc nopadding scroll-slider">
						<nav class="w3-sidenav w3-black w3-card-2 margen-menu-slider">
							<ul class="collapsible" data-collapsible="accordion">
								<!-- contruccion -->
								<?php
								  global $post;
								  $args = array( "category" => 6 );
								  $myposts = get_posts( $args );?>
								  <?php $cont =1; 
								  foreach( $myposts as $post ) : setup_postdata($post); ?>
										<li>
											<div class="collapsible-header texto-sliderizquierdo-title"><?php the_title(); ?><i class="fa fa-angle-down" aria-hidden="true"></i></div>
											<div class="collapsible-body construccion-menu">
										    	<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con<?php echo $cont ?>')">
										    		<?php 
										    		$entrada = $post;
										    		//echo $entrada;
										    		$TituloMenu =  get_field("Menu1", $entrada); ?>	
											  	 	<p class="content-slider-iz"><?php echo $TituloMenu?></p>

											  	 	
												</a>
											</div>
										</li>
								<?php  $cont ++; endforeach; ?>
								<!-- contruccion -->
								<!-- <li>
							    	<div class="collapsible-header texto-sliderizquierdo-title">CIMIENTACIONES PROFUNDAS <i class="fa fa-angle-down" aria-hidden="true"></i></div>
								    <div class="collapsible-body construccion-menu">
								    	 <a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con1')">
									  	 	<p class="content-slider-iz">pilotes de punta y/o fricción</p>
										</a>
									 </div>
									 <div class="collapsible-body content-slider-iz construccion-menu">
									 	<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con2')">
									  	 	<p class="content-slider-iz">pilas coladas << in situ >></p>
									  	</a>
								    </div>
								    <div class="collapsible-body construccion-menu">
								    	<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con3')">
								    		<p class="content-slider-iz">micropilotes.</p>
								    	</a>
								    </div>
							    </li> -->
<!-- slider -->
								
								<!-- Slider -->	
							    
							    <li>
							    	<div class="collapsible-header texto-sliderizquierdo-title">BOMBEO EYECTOR <i class="fa fa-angle-down" aria-hidden="true"></i></div>
							    	<div class="collapsible-body construccion-menu">
							    	<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con4')">
							    		<p class="content-slider-iz">Lorem ipsum dolor sit amet.</p>
							    	</a>
							    	</div>
							  	</li>
							  	<li>
								    <div class="collapsible-header texto-sliderizquierdo-title">ESTABILIZACIÓN EXCAVACIONES PROFUNDAS <i class="fa fa-angle-down" aria-hidden="true"></i></div>
								    <div class="collapsible-body construccion-menu">
								    	<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con5')">
								    		<p class="content-slider-iz">Lorem ipsum dolor sit amet.</p>
								    	</a>
								    </div>
								 </li>
								 <li>
								    <div class="collapsible-header texto-sliderizquierdo-title">ESTABILIZACIÓN DE CORTES Y TALUDES <i class="fa fa-angle-down" aria-hidden="true"></i></div>
								    <div class="collapsible-body construccion-menu">
								    	<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con6')">
								    		<p  class="content-slider-iz">Lorem ipsum dolor sit amet.</p>
								    	</a>
								    </div>
								  </li>
								   <li>
								    <div class="collapsible-header texto-sliderizquierdo-title">COMPACTACIÓN DINÁMICA <i class="fa fa-angle-down" aria-hidden="true"></i></div>
								    	<div class="collapsible-body construccion-menu">
									   		<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con7')">
									    		<p class="content-slider-iz">Lorem ipsum dolor sit amet.</p>
									    	</a>
								    	</div>
								  </li>
								  <li>
								    <div class="collapsible-header texto-sliderizquierdo-title">SUBEXCAVACIÓN <i class="fa fa-angle-down" aria-hidden="true"></i></div>
									    <div class="collapsible-body construccion-menu">
									    	<a href="javascript:void(0)" class="cnt nopadding" onclick="est(event, 'con8')">
									    		<p class="content-slider-iz">Lorem ipsum dolor sit amet.</p>
									    	</a>
									    </div>
								  </li>
							</ul>
						</nav>
					</div>
					<div class="col s12 m12 l8 nopadding">
						<div id="con1" class="w3-container construccion w3-animate-opacity">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="con2" class="w3-container construccion w3-animate-opacity" style="display: none;">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="con3" class="w3-container construccion w3-animate-opacity" style="display: none">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="con4" class="w3-container construccion w3-animate-opacity" style="display: none">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="con5" class="w3-container construccion w3-animate-opacity" style="display: none">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="con6" class="w3-container construccion w3-animate-opacity" style="display: none">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="con7" class="w3-container construccion w3-animate-opacity" style="display: none">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
						 <div id="con8" class="w3-container construccion w3-animate-opacity" style="display: none">
						    <div class="slider slider-fon">
							    <ul class="slides size-slider-dispo">
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img1.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img2.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							      <li>
							        <img src="<?php bloginfo('template_url'); ?>/images/geo/img3.jpg">
							        <div class="caption left-align">
							          <h5>SONDEO PARA EXPLOTACIÓN DEL SUELO</h5>
							        </div>
							      </li>
							    </ul>
						  	</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--contenido 5 sliders obra civil-->
	<section id="obra-civil">
		<div class="row nomargin">
			<div class="col l12 m12 s12 fondo-blanco center-align" style="padding: 0px !important;">				
				<div class="col s12 m6 offset-m3 l4 offset-l4 center-align">
				 <?php $post = get_post(128);
						$title = $post->post_title;	  ?>
					<p class="title-cinco"><?php echo $title; ?></p>
				</div>
				<div class="col s12 m12 l12 nopadding nomargin">
					<div id="uno">
						<div class="slider_model demo-1">						
							<div class="slider_model_box">
								<!-- slider -->
								<?php $Slider =  get_field("civil", 128); ?>
								  	<?php foreach ($Slider as $key => $value) {?>
								  		<?php echo $value['imagen'] ?>
								  		<img src="<?php echo $value['imagenslider'] ?>"/>									
									<?php } ?>
								<!-- Slider -->								
							</div>
						</div>
					</div>					
				</div>
				<div id="dos"></div><div id="tres"></div>
			</div>
		</div>
	</section>
	<!--contenido 6 referencias-->
	<section id="referencias">
		<div class="row nomargin nopadding">
			<div class="col s12 m12 l12 fondo-referencias nopadding">
				<div class="col s12 m6 offset-m3 l4 offset-l4 margen-r center-align">
				    <?php $post = get_post(51); //Donde 200 será la id del post
						$title = $post->post_title;
						$contenido = $post->post_content; //Guardamos en $contenido el contenido del post
	  				  ?>
					<p class="title-seis"><?php echo  $title; ?></p>
				</div>
				<div class="col s12 l6 offset-l3">
					<p class="contenido-ref">
						<?php echo $contenido; ?>
					</p>
				</div>
				<div class="col s12 m12 l12 sep-img-ref nopadding">
					<!-- galeria -->
					<?php $Galeria =  get_field("galeria", 89); ?>
					  	<?php foreach ($Galeria as $key => $value) {?>
					  		<div class="col s6 m4 l4 nopadding producto prod-first">
								<a class="fancybox" href="<?php echo $value['imagen'] ?>" data-fancybox-group="gallery" title="<?php echo $value['titulo_de_la_imagen'] ?>">
								<img src="<?php echo $value['imagen'] ?>" alt="" width="100%;"/>
								<div class="mask">  
							       <h2><?php echo $value['titulo_de_la_imagen'] ?></h2>  
							       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br><?php echo $value['titulo_de_la_imagen'] ?></p>
							    </div> 
							    </a>
							</div>
						<?php } ?>
					<!-- galeria -->
				</div>
			</div>
		</div>
	</section>
	<!--contenido 7 contacto-->
	<section id="contacto">
		<div class="row nomargin">
			<div class="col s12 m12 l12 fondo-contacto">
				<div class="col s12 m6 offset-m3 l4 offset-l4 margen-cto center-align">
					<p class="title-siete">CONTACTO</p>
				</div>
			</div>
			<div class="col s12 l10 offset-l1 center-align">
				<?php echo do_shortcode('[contact-form-7 id="33" title="Contacto"]'); ?>
				<div class="col s12 m8 offset-m2 l6 offset-l3">
					<div class="col s2 l2">
						<i class="fa fa-building-o img-contato" aria-hidden="true"></i>
					</div>
					<div class="col s10 l10 div-sinpadding">
						<p class="info-contacto"><?php echo get_field("direccion", 35); ?></p>
					</div>
					<div class="col s2 l2">
						<i class="fa fa-phone img-contato-telefono" aria-hidden="true"></i>
					</div>
					<div class="col s10 l10 div-sinpadding">
						<div class="col s6 m6 l6 div-sinpadding">
							<p class="info-contacto sinmargen-telefono-div font-conta">
							<a href="tel:<?php echo get_field("telefono1", 35); ?>" style=" color:#666666;"><?php echo get_field("telefono1", 35); ?></a><br>
							<a href="tel:<?php echo get_field("telefono2", 35); ?>" style=" color:#666666;"><?php echo get_field("telefono2", 35); ?></a></p>
						</div>
						<div class="col s6 m6 l6 div-sinpadding">
							<p class="info-contacto sinmargen-telefono-div">
							<a href="tel:<?php echo get_field("telefono3", 35); ?>" style=" color:#666666;"><?php echo get_field("telefono3", 35); ?></a><br>
							<a href="tel:<?php echo get_field("telefono4", 35); ?>" style=" color:#666666;"><?php echo get_field("telefono4", 35); ?></p>
						</div>
					</div>
					<div class="col s2 l2">
						<i class="fa fa-envelope img-contacto2" aria-hidden="true"></i>
					</div>
					<div class="col s10 l10 info-contacto nopadding">
						<p class="info-contacto minuscula"><a href="mailto:<?php echo get_field("correo", 35); ?>"></a><?php echo get_field("correo", 35); ?></p>
					</div>
				</div>
				<div class="col s12 m12 l12 margin50">
					<?php echo do_shortcode('[contact-form-7 id="46" title="Formulario 2"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<!--mapa-->
	<section>
		<div class="row nomargin">
			<div  class="row content-map nomargin">
				<div class="col l12 m12 s12 nopadding" id="regrasar-mapa">
					<div class="mapa" id="mack-map" style=""></div>
				</div>
			</div>
		</div>
	</section>
	<!--footer-->
<?php get_footer(); ?>
