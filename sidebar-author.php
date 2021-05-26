<div class="widget-area secondary" id="secondary" role="complementary" itemtype="https://schema.org/WPSideBar" itemscope="itemscope">
    <div class="sidebar-main">
        <aside id="user-data" class="widget widget_user_data">
            <h2 class="widget-title">About Author</h2>
            <?php 
            $social_links = carbon_get_user_meta( get_the_author_meta( 'ID' ), 'mos-user-social-links' );
            foreach ( $social_links as $link ) {
                var_dump($link);
            }
            ?>
        </aside>
        <aside id="media_image-2" class="widget widget_media_image"><img width="500" height="625" src="https://designil.activebd4u.com/wp-content/uploads/2021/05/6082d0f997bf4a5906af90d9_banner-sidebar-p-500.jpeg" class="image wp-image-13520  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://designil.activebd4u.com/wp-content/uploads/2021/05/6082d0f997bf4a5906af90d9_banner-sidebar-p-500.jpeg 500w, https://designil.activebd4u.com/wp-content/uploads/2021/05/6082d0f997bf4a5906af90d9_banner-sidebar-p-500-240x300.jpeg 240w" sizes="(max-width: 500px) 100vw, 500px"></aside>
    </div><!-- .sidebar-main -->
</div>