<?php

/**
 * Template Name:resource
 */
?>
<?php
get_header();
?>

<div class="resource-data">
	<div class="site-content">
		<div class="">
			<div class="">
				<div class="stm_markup stm_markup_full">
					<div class="stm_markup__content">
						<div class="container-fluid vc_container-fluid   ">
							<div class="vc_row wpb_row vc_row-fluid">
								<div class="container-fluid stm_no_side_pd">
									<div class="row"><div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner ">
											<div class="wpb_wrapper">
												<div class="vc_row wpb_row vc_inner vc_row-fluid header-image">
													<div class="wpb_column vc_column_container vc_col-sm-12 pearl_column_inner_9b1bf60a2e9974e7386addfef315d2e2">
														<div class="vc_column-inner ">
															<div class="wpb_wrapper">
																<div class="wpb_single_image wpb_content_element vc_align_center   top-image">
																	<figure class="wpb_wrapper vc_figure stm_lightgallery">
																	<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1" height="1" src="https://cognopia.com/v2/wp-content/uploads/2021/06/we_make_it_easy_to_run.svg" class="vc_single_image-img attachment-medium" alt="" loading="lazy"></div>
																	</figure>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element  header-text home-header-text mt-100">
													<div class="wpb_wrapper">
														<div class="text-block">
														<h1>Resources</h1>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid vc_container-fluid wpb_animate_when_almost_visible wpb_left-to-right left-to-right vc_custom_1624014220602 wpb_start_animation animated">
					<div class="vc_row wpb_row vc_row-fluid">
						<div class="container-fluid stm_no_side_pd">
							<div class="row">
								<div class="wave-column wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div class="stm_wave60e2a7d4539fb stm_waves_module stm_waves_module_style_1 ">
												<div class="waveWrapper ">
													<div class="waveWrapperInner first">
														<div class="wave" style="background-image: url('https://cognopia.com/v2/wp-content/themes/pearl/assets/img/bg-wave2.png')"></div>
													</div>
													<div class="waveWrapperInner second">
														<div class="wave" style="background-image: url('https://cognopia.com/v2/wp-content/themes/pearl/assets/img/bg-wave1.png')"></div>
													</div>
												</div>
											</div>
											<style type="text/css">
												.stm_wave60e2a7d4539fb {
													height: 220px !important;
												}
												.stm_wave60e2a7d4539fb .first .wave {
													top: 0px !important;
												}
												.stm_wave60e2a7d4539fb .first {
													opacity: 1 !important;
												}
												.stm_wave60e2a7d4539fb .second .wave {
													top: 10px !important;
												}
												.stm_wave60e2a7d4539fb .second {
													opacity: 1 !important;
												}

												.vc_custom_1624014220602 {
													margin-top: -220px !important;
													margin-bottom: -52px !important;
												}
												.vc_container, .vc_container-fluid {
													position: relative;
													z-index: 10;
												}

												.stm_waves_module_style_1 .waveWrapper {
													overflow: hidden;
													position: absolute;
													left: 0;
													right: 0;
													bottom: 0;
													top: 0;
													margin: auto;
												}

												.stm_waves_module_style_1 .waveWrapperInner {
													position: absolute;
													width: 100%;
													overflow: hidden;
													height: 100%;
													bottom: 0;
												}

												.stm_waves_module_style_1 .wave {
													position: absolute;
													left: 0;
													width: 200%;
													height: 100%;
													background-repeat: repeat no-repeat;
													background-position: 0 bottom;
													transform-origin: center bottom;
													background-size: 50% 200px;
												}
											</style>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid vc_container-fluid">
					<div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
						<div class="container-fluid">
							<div class="row">
								<div class="wpb_column vc_column_container vc_col-sm-1">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
										</div>
									</div>
								</div>
								<div class="wpb_column vc_column_container vc_col-sm-10">
									<div class="vc_column-inner ">
										<div class="wpb_wrapper">
											<div id="custom_select">
												<label class="categories1">Categories:</label>
												<label class="categories2">Categories</label>
												<select name="" id="cat">
													<?php
														$categories = get_categories();
														echo '<option class="cat-item show_all" id="show_all">'; echo "Show All"; echo '</option>';
														foreach($categories as $category){
															echo '<option class="cat-item" id="'.$category->term_id.'">'; echo $category->name; echo '</option>';
														}			
													?>
												</select>
											</div>

											<div class="grid">
												<?php
												$wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
												<?php if ($wpb_all_query->have_posts()) : ?>
														<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
															<div class="block four testing">
																<div class="block-content">
																	<img loading="lazy" item="featured-image" src="<?= the_post_thumbnail_url($post->ID, array(500, 800)); ?>">
																	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
																	<p><?php the_excerpt(); ?></p>
																	<div class="post-btn"><a href="<?php the_permalink(); ?>" class="btn btn-primary cm-read-btn">Continue Reading</a></div>
																</div>
															</div>
														<?php endwhile; ?>

													<?php wp_reset_postdata(); ?>

												<?php else : ?>
													<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							<div class="wpb_column vc_column_container vc_col-sm-1">
								<div class="vc_column-inner ">
									<div class="wpb_wrapper">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>