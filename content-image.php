<?php
/**
 * The template for displaying posts in the Image post format
 */
?>
<div class="kingdom-entry-content">
	<?php the_content( __( 'Continue reading', 'kingdom' ) . '<span class="meta-nav">&rarr;</span>' ); ?>
</div><!-- .kingdom-entry-content -->

<h3 class="kingdom-entry-title">
	<?php if ( is_singular() ) {
		the_title( '<span class="pf-title">', '</span>' );
	} else { ?>
		<a href="<?php the_permalink(); ?>" class="pf-title" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'kingdom' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
	<?php } ?>
</h3><!-- .kingdom-entry-title -->
<div class="kingdom-entry-meta alignleft">
	<span class="meta-prep meta-prep-author"><?php _e( 'Posted on', 'kingdom' ); ?></span>
	<?php if ( is_singular() ) {
		echo get_archives_link( get_home_url( null, get_the_date( 'Y/m' ) ), get_the_date(), '', '', '' );
	} else { ?>
		<a rel="bookmark" title="<?php the_time(); ?>" href="<?php the_permalink(); ?>"><span class="kingdom-entry-date"><?php echo get_the_date(); ?></span></a>
	<?php }
	$cat_list = get_the_category_list( ', ' );
	if ( ! empty( $cat_list ) ) { ?>
		<span class="kingdom-meta-sep"><?php _e( 'in', 'kingdom' ); ?></span>
		<span class="kingdom-cat-list"><?php echo $cat_list; ?></span>
	<?php } ?>
</div><!-- .kingdom-entry-meta -->
<!-- navigation links for post -->
<div class="kingdom-post-nav-link"><?php wp_link_pages(); ?> </div>
