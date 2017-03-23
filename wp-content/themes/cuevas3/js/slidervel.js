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
	/*
//slider del select 1
$('.bxslider').bxSlider({
	pagerCustom: '#bx-pager'
});
	//slider del sellect 2
	$('.bxsliderr').bxSlider({
		pagerCustom: '#bx-pagerr'
	});
	//slider del select 3
	$('.bxsliderrr').bxSlider({
		pagerCustom: '#bx-pagerrr'
	});

*/
	/*select*/
	function civil(sel){
		if (sel.value=="slider1"){
			divC = document.getElementById("uno");
			divC.style.display = "inline";
			$().show();
			$().hide();
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
	}


	