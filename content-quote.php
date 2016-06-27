<?php
/**
 * The template for displaying posts in the Quote post format
 */
?>
<div class="kingdom-entry-content">
	<?php the_content( __( 'Continue reading', 'kingdom' ) . '<span class="meta-nav">&rarr;</span>' ); ?>
</div><!-- .kingdom-entry-content -->

<div class="kingdom-entry-meta">
	<span class="meta-prep meta-prep-author"><?php _e( 'Posted on', 'kingdom' ); ?></span>
	<?php if ( is_singular() ) {
		echo get_archives_link( get_home_url( null, get_the_date( 'Y/m' ) ), get_the_date(), '', '', '' );
	} else { ?>
		<a rel="bookmark" title="<?php the_time(); ?>" href="<?php the_permalink(); ?>"><span class="kingdom-entry-date"><?php echo get_the_date(); ?></span></a>
	<?php } ?>
</div><!-- .kingdom-entry-meta -->
<!-- navigation links for post -->
<div class="kingdom-post-nav-link"><?php wp_link_pages(); ?> </div>
