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

			<?php// echo do_shortcode('[masterslider id="4"]'); ?>

	<section id="empresa">
		<div class="row nomargin">
			<div class="col s12 m8 offset-m2 l6 offset-l3 center-align margin-cvas nopadding">
			  <p class="title-dos">GRUPO CUEVAS</p>
			  <P class="bold">"INGENIERO<span class="subrayado-cuavas">S CUEVAS - CONSORC</span>IO EXCOGE"</P>
				<div class="col s12 m12 l12 nopadding">
					<img src="<?php bloginfo('template_url'); ?>/images/home/nuestra-empresa.jpg" class="img-nu">
				</div>
				<div class="col col l12 margin-nustra">
					<p class="title-nuestra">NUESTRA EMPRESA</p>
					<p class="info-secciondos">Somos una empresa especializada en el <span>Diseño y Construcción Geotécnica, Obra Civil en Cimentaciones y Edificaciones.</span></p>
					<p class="info-secciondos"><span>Contamos con más de 20 años, de Expericecnia en el Mercado Nacional,</span> donde la honestidad, calidad, garantía, servicio y satisfacción son nuestros valores y compromiso como grupo.</p>
					<p class="info-secciondos">Nuestros servicios de Ingeniería y Construcción son utilizados en diversos proyectos de:</p>
					<ul class="info-secciondos margin-lista">
						<li>Diseño Geológico</li>
						<li>Construcción Geotécnica</li>
						<li>Obra Civil y Edificación</li>
					</ul>
					<p class="info-secciondos">Nuestra experiencia y conocimiento nos permite <span>desarrollar eficientemente cualquier proyecto de inicio a término, desde la ingeniería hasta la construcción.</span></p>
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
								<li>
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
							    </li>
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
					<p class="title-cinco">OBRA CIVIL</p>
				</div>
				<div  id="select" class="col s10 l4 offset-l4 center-align pading-select">
					<select class="browser-default obra-select" onChange="civil(this)">
					  <option value="slider1">EBC PACHUCA</option>
					  <option value="slider2">EBC PACHUCA</option>
					  <option value="slider3">EBC PACHUCA</option>
					</select>
				</div>
				<div class="col s12 m12 l12 nopadding nomargin">
					<div id="uno">
						<div class="slider_model demo-1">
							<div class="slider_model_box">
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img1.jpg" title="Caption1" alt="Long Description" />
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img2.jpg" title="Caption2" alt="Long Description" />
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img3.jpg" title="Caption3" alt="Long Description" />
							</div>
						</div>
					</div>
					<div id="dos">
						<div class="slider_model demo-2">
							<div class="slider_model_box">
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img3.jpg" title="Caption1" alt="Long Description" />
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img2.jpg" title="Caption2" alt="Long Description" />
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img1.jpg" title="Caption3" alt="Long Description" />
							</div>
						</div>
				    </div>
					<div id="tres">
						<div class="slider_model demo-3">
							<div class="slider_model_box">
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img2.jpg" title="Caption1" alt="Long Description" />
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img1.jpg" title="Caption2" alt="Long Description" />
								<img src="<?php bloginfo('template_url'); ?>/images/obracivil/img3.jpg" title="Caption3" alt="Long Description" />
							</div>
						</div>
				    </div>
				</div>
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

					<?php echo do_shortcode('[nggallery id="1"]'); ?>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" data-fancybox-group="gallery" title="Parque Toreo: Muro Milan">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;"/>
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					    </div>
					    </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img2.png" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;" />
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					     </div>
					     </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;" />
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					     </div>
					     </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
					 	<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;" />
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					    </div>
					    </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img5.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;" />
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					     </div>
					     </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img6.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;" />
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					    </div>
					    </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img7.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;"/>
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					     </div>
					     </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img8.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;" />
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					     </div>
					     </a>
					</div>
					<div class="col s6 m4 l4 nopadding producto prod-first">
						<a class="fancybox" href="<?php bloginfo('template_url'); ?>/images/referencias/img1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
						<img src="<?php bloginfo('template_url'); ?>/images/referencias/milan.jpg" alt="" width="100%;" />
						<div class="mask">
					       <h2>Parque torreón</h2>
					       <p><i class="fa fa-search-plus" aria-hidden="true" style="color: #fff;"></i><br>Muro mílan</p>
					     </div>
					    </a>
					</div>
					</div>
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
<<<<<<< HEAD
					<form>
						<div class="col s12 l6">
							<p class="invitacion">trabaja con nosotros:</p>
						</div>
						<div class="col s12 m6 offset-m3 l4" style="margin-bottom: 10px;">
							<div class="file-field">
						        <p class="cv-contacto"><img src="<?php bloginfo('template_url'); ?>/images/contacto/clip.png" style="margin: -4px 7px 0 0;">AÑADIR CURRICULUM</p>
						         <input type="file">
						    </div>
						</div>
						<div class="col s8 offset-s2 l1">
							<input type="submit" name="btn3" value="ENVIAR" class="btn btn-cv">
						</div>
					</form>
=======
					<?php echo do_shortcode('[contact-form-7 id="46" title="Formulario 2"]'); ?>						
>>>>>>> esteban
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
