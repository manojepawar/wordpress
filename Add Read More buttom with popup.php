<?php
		/*
		 By: Manoj Pawar
		*/

?>	  
	  <!-- Add Read more button with popup content -->

       <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/customlightbox/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
       
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="<?php echo get_template_directory_uri(); ?>/customlightbox/bootstrap.min.js"></script>
         
        <!-- PHP code for the getting the all values fom db and show -->
                
		<?php 
			$Current_PID = get_the_ID();
		 
			$resultset = get_post_meta($Current_PID,'get_the_field_from_DB',true);
			
			 if(!empty($resultset))
			 {
						echo '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>';

			 }
			?>
			<!-- Here is the print the all result set data with Read More button -->
				<div id="read_more" style="display:none;">
						<?php  print_r($resultset); ?>         
				</div>


	<!-- ************************************************************* -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content"><!-- Modal content-->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"> Heading of popup box </h4>
				</div>
				<div class="modal-body">
						<p>Chupa chups chocolate liquorice carrot cake soufflé. Biscuit croissant liquorice cupcake gingerbread croissant pastry tart. Pastry danish lemon drops I love candy marshmallow I love jujubes. I love gummi bears lemon drops soufflé marzipan oat cake. Gingerbread jelly beans fruitcake unerdwear.com apple pie carrot cake caramels tootsie roll. Marshmallow I love applicake cookie. Pie donut I love powder dragée jelly oat cake marzipan. Cheesecake croissant jelly-o powder sesame snaps croissant biscuit pastry danish.</p>
				</div><!-- END Modal Body -->
		  </div><!-- End modal-content div -->
		</div><!-- END modal-dialog Div  -->
	</div><!-- END myModal div -->
	<!-- ************************************************************* -->