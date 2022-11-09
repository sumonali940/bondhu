		
		<!-- Start Footer ARea -->
		<footer class="footer-area"> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-xl-6 col-md-6 col-sm-6 col-12"> 
						<div class="footer-left"> 
							<p>© 2018-2022 Bondhubloodbank.com || all Right reserved </p>
						</div>
					</div>
					<div class="col-xl-6 col-md-6 col-sm-6 col-12"> 
						<div class="footer-right"> 
							<p> Developed By <a target="_blank" href="https://sumonali.com"> Sumon </a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>	
		<!-- Rnd Footer ARea -->
	</div>
	</div>
		<!-- Js Files -->
		<!-- modernizr -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- jQuery -->
        <script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap Popper -->
        <script src="assets/js/popper.js"></script>
		<!-- Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- Owl Carousel JS -->
        <script src="assets/js/config.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/jquery.emojiarea.js"></script>
        <script src="assets/js/emoji-picker.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="assets/js/html2canvas.min.js"></script>
		<!-- Custom Scripts -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/inna.js"></script>
		
		  <script>
		  $( function() {
		    $( "#birthday" ).datepicker({
		      changeMonth: true,
		      changeYear: true,
		      dateFormat: 'yy-mm-dd'
		    });
		  } );
		  </script>
        <script>
        	$('.eye_btn').click(function(){
        		$('.hide_box').show();
        		return false;
        	});

        	$('#code').keyup(function(){
		      var code = $('#code').val();
		      var uid = $('#uid').val();
		        $.ajax({ 
		            'url':'ajaxRequest.php',
		            'type':'POST',
		            'data' : {
		                'code':code,
		                'uid':uid
		            }, 
		            'success': function(data3) {
		              $('#showN').html(data3);
		              $('.x_number').hide();
		          }

		        });
		    }); 
 

        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
		<script>
		$(document).ready(function() {
		   $('.district').select2();
		});
		</script>
		

		
    </body>
</html>