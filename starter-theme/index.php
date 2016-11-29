<?php
/**
 * The blog page.
 *
 * @package Neat
 */

get_header(); ?>


	<div class="aa_wrap">

		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
			<!-- <picture class="preblur">
				<source media="(max-width: 480px)" data-srcset="https://www.samma3a.com/upload/images/products/hifiman/hm700/samma3a-hifiman-hm700-32gb-and-earphones-re400-media-audio-player-highres-music-samma3a-%D8%B3%D9%85%D8%A7%D8%B9%D8%A9-%D8%B3%D9%85%D8%A7%D8%B9%D8%A7%D8%AA-010.jpg">
				<source media="(max-width: 768px)" data-srcset="http://img.labnol.org/di/high-quality-photo.jpg">
				<source data-srcset="http://science-all.com/images/wallpapers/wallpaper-high-resolution/wallpaper-high-resolution-4.jpg">
				<img class="blur-up lazyload" src="http://s33.postimg.org/egxnikr27/wallpaper_high_resolution_4.jpg" data-src="http://science-all.com/images/wallpapers/wallpaper-high-resolution/wallpaper-high-resolution-4.jpg" alt="">
			</picture> -->
				
			<div class="tags">
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol FIRST title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>
				<div class="tag">
					<div class="picture">
						<img src="http://aspireid.com/wp/wp-content/uploads/sample-customer-photo2.jpg" alt="">
					</div>
					<div class="title">
						<h4>lol LAST title</h4>
					</div>
					<div class="description">
						<p>
							lol sample desctription. lol cats. lol beets. lol bears. lol battlestar gallactica. 
						</p>
					</div>
				</div>

			</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>
	<!-- /.aa_wrap -->

<?php get_footer(); ?>
