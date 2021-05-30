<?php
/**
 * 'recent_post_carousel' Design 1 Shortcodes HTML
 *
 * @package WP Responsive Recent Post Slider
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
?>

<div class="wppsac-carousel-slides">
	<?php if( has_post_thumbnail()  ) { ?>
		<div class="wppsac-post-image-bg">
			<a href="<?php the_permalink(); ?>">
				<img class="wppsac-post-image-bg" <?php if($lazyload) { ?>data-lazy="<?php echo esc_url($feat_image); ?>" <?php } ?> src="<?php if(empty($lazyload)) { echo esc_url($feat_image); } ?>" alt="<?php the_title_attribute(); ?>" />
			</a>
		</div>
	<?php  } ?>
</div>