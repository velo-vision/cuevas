<?php get_header(); ?>

<!--aqui empieza-->

<div class="clearfix"></div>
		<div class="content-menu"></div>

		<div class="container-fluid nomargin ">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<P>
						<h2>Claves para gastar poco en decoración</h2>
					</P>
					<p>
						<i class="fa fa-calendar" aria-hidden="true"></i> 14 de julio 2016
					</p>
				</div>
			</div>
		</div>

		<div class="container-fluid nomargin" style="background-color:white">
			<div class="row">
				<div class="col-md-7 col-md-offset-2">
				<br>

					<P>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
						Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
						pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
						arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
					</P>

				<div class="row">
					<div class="col-med-12"></div>
						<div class="col-md-4 ">
								<div class="top-espacio">
							<a href="#"><img src="images/info.jpg" alt="Logo Reto"></a>
						</div>
					</div>
						<div class="col-md-6 col-md-offset-2">
							<div class="top-menu">
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
							ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
							 in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
							 deserunt mollit anim id est laborum." Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem facere rerum ipsa culpa assumenda
							 expedita in. Quae recusandae architecto tenetur consequuntur nisi dolorem velit optio doloribus blanditiis. Enim, nemo, non.
							 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, quaerat laborum deserunt labore eos. Adipisci officia, consequatur nulla
							 repellendus voluptatibus, veniam atque, sit incidunt magnam nesciunt recusandae hic porro, facilis.
						</p>
						</div>
					</div>
				<div class="row">
						<div class="col-md-10 col-md-offset-2">
							<div class="top-menu">
					<br>
						<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
								ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
								 in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
								 deserunt mollit anim id est laborum."
						</p>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="divicion-blog"></div>
   <?php 
	 $args = array('category'=> '2');
	 $posts_array = get_posts( $args );
	?>
	<div class="container">
		<div class="row">
			<?php foreach ($posts_array as $key => $value) {?>   								
			<div class="col-md-6">
			  <div class="col-md-12 nomargin" style="background:white">				
				<div class="col-md-5 nomargin">
				  <?php	$src = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'full' );
				         $url = $src[0]; ?>
					<a href="#"><img width="100%" src="<?php echo $url; ?>" alt="Negocio"></a>
				</div>
					<div class="col-md-7 blog">
					  <p>
						<i class="fa fa-calendar" aria-hidden="true"></i> <?php echo  $value->post_date = date("F j, Y"); ?>
					  </p>
						<h2><strong><?php echo $value->post_title; ?></strong></h2>
					  <p>
						<?php  echo $value->post_content; ?>
					  </p>
					   <p>
						 <i class="glyphicon glyphicon-heart"></i> 14
					  </p>
					</div>
			  </div>
			</div>				
				   <?php 
						}		  			
	 				?>
	</div>
</div>
	<?php 	
		get_footer();
	 ?>
