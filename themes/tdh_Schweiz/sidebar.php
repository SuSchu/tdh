
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="form" class="widget-area" role="complementary">
			<a id="formhide" class="icon-times btn-close" role="button"></a>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>