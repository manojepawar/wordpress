<?php 
							$Targs = array('post_type' => 'testimonials','post_status' => 'publish','order'=> 'ASC') ;
							$testimonal	= get_posts($Targs);
							
							$i= 1;		
							//print_r($testimonal);
							foreach ($testimonal as $testimonals) {
							$active = '';
							if($i==1){$active='active';}

							if($i%2==1){
							if($i!= 1){  ?>
									</div>
							<?php	}
								?>
								<div class="item <?php echo $active; ?>"> 
							<?php  } 	?>   
									<div class="col-md-6 col-sm-6">
										<div class="block-text rel zmin text-center">
											<p><?php echo $testimonals->post_content; ?></p>
											<!-- <ins class="ab zmin sprite sprite-i-triangle block"></ins> -->
											<div class="person-text rel">
											  <h4><?php echo $testimonals->post_title; ?></h4><i><?php echo $testimonals->post_excerpt; ?></i>
										     </div>
										</div>
									</div>
								
							<?php
							$i++;
							}
							 ?>
							</div> 
