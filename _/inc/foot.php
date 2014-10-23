

<footer class="pagefoot">
	<div class="row">
		© Copyright 2014 Sterling Codifiers
	</div>
</footer>



<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<script src="_/js/responsive-nav.min.js"></script>
<script src="_/js/swipe.min.js"></script>
<script type="text/javascript">

//**********************************************************************************************************************
/**
* COMPANY: Zipline Interactive
* EMAIL: info@gozipline.com
* PHONE: 509-321-2849
* DESCRIPTION: This document contains programming required for the website templates.  Requires the jQuery library.
*/
$(function() {

	//ON STATE CHANGE
	$('#search_select_state').change(function() {
		state = get_state_value();

		$('#USA .active').removeAttr('style');
		$('#' + state).css('fill', '#68939c');

		$.post("../index.php", { action: "load_municipalities", state: state },
 			function(data) {
   				$('#search_select_city').html(data);
 			}
 		);
	});

	//HANDLE FORM SUBMIT
	$('#map_search').submit(function() {
		state = get_state_value();
		url = $('#search_select_city').val();	
		if(state != "" && url != null) {
			window.location = url;
		} else {
			alert("You must select a state and a municipality");
		}
		return false;
	});
	
	$('#USA .active').click(function(e) {
		e.preventDefault();
		var id = $(this).attr('id');
		$('#USA .active').removeAttr('style');
		$(this).css('fill', '#68939c');
		$('#search_select_state').val(id);
		update_search();
	});
	

	//FUNCTION TO GET CURRENT STATE VALUE
	function get_state_value() {
		var state_value = $('#search_select_state').val();
		return state_value;
	}
	
	function update_search() {
		state = get_state_value();
		$.post("../index.php", { action: "load_municipalities", state: state },
 			function(data) {
   				$('#search_select_city').html(data);
 			}
 		);
	}
});

</script>


<script src="_/js/jquery.validate.min.js"></script>
<script src="_/js/jquery.placeholder.min.js"></script>
<script src="_/js/jquery.form.min.js"></script>
<script>
$(function(){
	$('#contact').validate({
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				url: 'contact-submit.php',
				success: function() {
					$('#contact').hide();
					$('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
				}
			});
		}
	});
});
</script>

<script src="_/js/bind-polyfill.min.js"></script>
<script src="_/js/smooth-scroll.min.js"></script>
<script src="_/js/script.min.js"></script>

<script>
$(document).ready( function() {

	var navigation = responsiveNav(".nav-collapse", {
		customToggle: "#nav-toggle"
	});

	$('.getcodes').on('click', function(){
		$('.map').slideToggle('fast');
	});

	$('.getcodes-check').on('click', function(){
		var checkOpen = $('.map').css('display');
		if (checkOpen != 'block') {
			$('.map').slideToggle('fast');
		}
	});	

	$('.closer').on('click', function(){
		$('.map').slideToggle('fast');
	});

	smoothScroll.init();

   	// Don't execute if we're in the Live Editor
   	if( !window.isCMS ) {

	$('#testimony').addClass('swipe');

	var testimony = new Swipe(document.getElementById('testimony'), {
		auto: 15000,
		disableScroll: false,
	});

   	}

});
</script>



</body>

</html>