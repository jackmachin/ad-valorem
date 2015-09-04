<div id="sidebar-header" class="sidebar" role="complementary">

    <?php if ( is_active_sidebar( 'sidebar-header' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar-header' ); ?>

    <?php else : ?>

        <div class="no-widgets">
            <p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
        </div>

    <?php endif; ?>

</div>
