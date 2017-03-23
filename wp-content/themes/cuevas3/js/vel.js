	//menu stick
		$(document).ready(function(){		
			$(".menu").hide();

		$(window).on('scroll', function(){
			var altura = $('#empresa').offset().top;
			if ( $(window).scrollTop() > altura ){
				$('.menu').addClass('menu-fixed');

		//con efecto y duracion
		$( ".menu" ).show( "blind", 200 );
			}else{
				$('.menu').removeClass('menu-fixed');
					$(".menu").hide();
				}
			});
		});

	//NAVEGACION scroll ligero
		 $('a[href*="#"]:not([href="#"])').click(function() {
			  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			    var target = $(this.hash);
			    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			    if (target.length) {
			      $('html, body').animate({
			        scrollTop: target.offset().top
			      }, 1000);
			      return false;
			    }
			  }
			});

	 /*menu*/
	 $(document).ready(function(){
	 	$(".button-collapse").sideNav();
	 });
	 /**/
	//slider materealize geo			
	$(document).ready(function(){
		$('.slider').slider({full_width: true});		
	});
	//slider obra civil

	// slider geo
		function openLink(evt, animName){
		  	var i, x, tablinks;
		  		x = document.getElementsByClassName("geotecnica");
		  			for (i = 0; i < x.length; i++){
		    			 x[i].style.display = "none";
		  		}
				  tablinks = document.getElementsByClassName("tablink");
				  for (i = 0; i < x.length; i++){
				     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
				  }
		  document.getElementById(animName).style.display = "block";
		  evt.currentTarget.className += " w3-red";
		}

	//slider construccion
		function est(evt, animName){
			var i, x, tablinks;
			  x = document.getElementsByClassName("construccion");
			  for (i = 0; i < x.length; i++) {
			     x[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("cnt");
			  for (i = 0; i < x.length; i++) {
			     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
			  }
		  document.getElementById(animName).style.display = "block";
		  evt.currentTarget.className += " w3-red";
		}

	//slider obra civil
		function obra(evt, animName) {
		  var i, x, tablinks;
		  x = document.getElementsByClassName("obras");
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("cnt");
		  for (i = 0; i < x.length; i++) {
		     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
		  }
		  document.getElementById(animName).style.display = "block";
		  evt.currentTarget.className += " w3-red";
		}

	/** fancybox*/
		$(document).ready(function() {
			$('.fancybox').fancybox();				
			});

	/***scrooll**/
	(function($){
		$(window).on("load",function(){				
			$.mCustomScrollbar.defaults.scrollButtons.enable=true; //enable scrolling buttons by default
			$.mCustomScrollbar.defaults.axis="yx"; //enable 2 axis scrollbars by default				
			$("#content-l").mCustomScrollbar();
			
			});
	})
	(jQuery);

/**select*/
	$(document).ready(function(){
		divC = document.getElementById("uno");
		divC.style.display = "";

		divT = document.getElementById("dos");
		divT.style.display = "none";

		divT = document.getElementById("tres");
		divT.style.display = "none";

		$( window ).resize(function() {
			var sel = document.getElementById("select");
			if (sel.value=="slider1"){
				divC = document.getElementById("uno");
				divC.style.display = "inline";

				divT = document.getElementById("dos");
				divT.style.display = "none";

				divT = document.getElementById("tres");
				divT.style.display = "none";

			}if (sel.value=="slider2"){

				divC = document.getElementById("uno");
				divC.style.display="none";

				divT = document.getElementById("dos");
				divT.style.display = "inline";

				divT = document.getElementById("tres");
				divT.style.display = "none";

			}if (sel.value=="slider3"){
				divC = document.getElementById("uno");
				divC.style.display="none";

				divT = document.getElementById("dos");
				divT.style.display = "none";

				divT = document.getElementById("tres");
				divT.style.display = "inline";
			}		
		});

	});

		