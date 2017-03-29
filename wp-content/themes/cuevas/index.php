<?php
//template name: index
get_header();
?>
<!--contenido 1 inicio-->
			<?php $post = get_post(158); //92 o 104
		 	$contenido = $post->post_content; //Guardamos en $contenido el contenido del post
			echo $contenido;
		 		?>
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
					<!--slider geo-->
					 <div class="col s12 m12 l8 nopadding">
								<?php $Geoslider =  get_field("estud",244); ?>
								<?php $ctn =1;?>
								<?php foreach ($Geoslider as $key => $value){ ?>
									 <?php ($ctn>1)?$style='display: none;':''; ?>
									<div id="Fade<?php echo $ctn; ?>" class="w3-container geotecnica w3-animate-opacity" style="<?php echo $style; ?>">
										<div class="slider slider-fon">
											<ul class="slides size-slider-dispo">
												<?php foreach ($value['estudios'] as $key => $gale) {?>
													<li>
														<img src="<?php echo $gale['url'] ?>"/>
														<div class="caption left-align">
															<h5><?php echo $gale['title'] ?></h5>
														</div>
													</li>
												<?php }
												?>
											</ul>
										</div>
									</div>
									<?php $ctn ++; ?>
								<?php } ?>
					</div>
					<!--slider geo-->
					<!--menu geo -->
					<div  class="col s12 m12 l4 nopadding over">
					  <nav id="menu2" class="w3-sidenav w3-black w3-card-2">
					    <!-- geotecnica -->
					      <?php
									$texto =  get_field("estud", 244); ?>
									<?php $geomenu =1; ?>
									<?php foreach ($texto as $key => $value) {?>
										<a href="javascript:void(0)" class="tablink active-geo" onclick="openLink(event, 'Fade<?php echo $geomenu; ?>')">
											<div class="col s12 l12  text-slider-derec">
												<p><?php echo $value['contenidoo'] ?></p>
											</div>
										</a>
								<?php $geomenu ++; } ?>
					   </nav>
					</div>
					<!-- geoternica -->
				</div>
			</div>
		</div>
	</section>
	<!--contenido 4 sliders construccion-->
	<section id="construccion">
		<div class="row nomargin">
			<div class="col s12 m12 l12 fondo-azul center-align nopadding">
				<div class="col s12 m6 offset-m3 l4 offset-l4">
					<p class="title-cuatro">CONSTRUCCIÓN</p>
				</div>
				<div class="col s12 l12 nopadding">
					<div id="content-l" class="col s12 m12 l4 content sin-disc nopadding scroll-slider">
						<nav class="w3-sidenav w3-black w3-card-2 margen-menu-slider" >
							<ul class="collapsible" data-collapsible="accordion" id="#menu3">
								<!-- contruccion -->
								<?php
								  global $post;
								  $args = array( "category" => 6 );
								  $myposts = get_posts( $args );?>
								  <?php $cont =1;
								  foreach( $myposts as $post ) : setup_postdata($post); ?>
										<li>
											<div class="collapsible-header texto-sliderizquierdo-title "><?php the_title(); ?><i class="fa fa-angle-down" aria-hidden="true"></i></div>
											<div class="collapsible-body construccion-menu">
									    		<?php
									    		$entrada = $post;
									    		$TituloMenu =  get_field("galeriasPrueba", $entrada); ?>
										  	 		<?php foreach ($TituloMenu as $key => $value) {?>
										  	 		<a href="javascript:void(0)" class="cnt nopadding activo-contruccion" onclick="est(event, 'con<?php echo $cont ?>')">
												  		<p class="content-slider-iz"><?php echo $value['titulogalerias'] ?></p>
												  	</a>
												 <?php  $cont ++; } ?>
											</div>
										</li>
								<?php  endforeach; ?>
								<!-- contruccion -->
							</ul>
						</nav>
					</div>
					<div class="col s12 m12 l8 nopadding">
					<!-- slider construccion -->
					<?php
						global $post;
						$args = array( "category" => 6 );
						$myposts = get_posts( $args );?>
						<?php $cont2 =1; ?>
						<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
							<?php $rows = get_field('galeriasPrueba', $post);?>
								<?php	foreach ($rows as $key => $galeriaprueba) {?>
								<?php ($cont2>1)?$style2='display: none;':'';?>
									<div id="con<?php echo $cont2; ?>" class="w3-container construccion w3-animate-opacity" style="<?php echo $style2; ?>">
									    <div class="slider slider-fon">
										    <ul class="slides size-slider-dispo">
										    <!---->
										<?php foreach ($galeriaprueba['galleriaprueba'] as $key => $gale) {?>
											<li>
										        <img src="<?php echo $gale['url'] ?>">
										        <div class="caption left-align">
										          <h5><?php echo $gale['title'] ?></h5>
										        </div>
										    </li>
										<?php } ?>
											</ul>
									  	</div>
									</div>
										<?php $cont2 ++; } ?>
								<?php  endforeach; ?>
					<!-- slider construccion -->
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
				    <?php $post = get_post(51);
						$title = $post->post_title;
						$contenido = $post->post_content;
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
					  		<div class="col s12 m4 l4 nopadding producto prod-first">
								<a class="fancybox" href="<?php echo $value['imagen'] ?>" data-fancybox-group="gallery" title="<?php echo $value['titulo_de_la_imagen'] ?>">
								<img src="<?php echo $value['imagen'] ?>" class="imgen-galeria"/>
								<div class="mask">
							       <h2><?php echo $value['titulo_de_la_imagen'] ?></h2>
							       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br><?php  $value['titulo_de_la_imagen'] ?></p>
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
