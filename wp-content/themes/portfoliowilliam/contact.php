
<!-- Modal -->
<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="row modal-dialog m-auto" role="document">
		<div class="col-12 col-sm-8 m-auto modal-content">
			<!-- <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				
			</div> -->
			<div class="modal-body">
			<div class="row">
			<?php
					global $post;
					$args      = array(
						'category_name'  => 'contact',
						'order'          => 'DESC',
						'orderby'        => 'date',
						'posts_per_page' => '-1',
					);
					$postslist = get_posts($args);
					foreach($postslist as $post):
						setup_postdata($post);
						?>
						<div class="col-12 col-sm-12 no-padding">
							<div class="post">
								<div class="row">
									<div class="col col-sm-10">
										<h1><?php the_title(); ?></h1>
									</div>
									<div class="col col-sm-2">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<div><?php the_content(); ?></div>
									</div>
								</div>
							</div>
						</div>
						<?php
						endforeach;
						wp_reset_postdata();
						?>
			</div>
			</div>
			<!-- <div class="modal-footer"> -->
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			<!-- </div> -->

		</div>
	</div>
</div>
<!-- end modal -->
