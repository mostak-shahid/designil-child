<div class="widget-area secondary" id="secondary" role="complementary" itemtype="https://schema.org/WPSideBar" itemscope="itemscope">
    <div class="sidebar-main">
        <aside id="user-data" class="widget widget_user_data">
            <h2 class="widget-title">About Author</h2>
            <?php 
            $media = carbon_get_user_meta( get_the_author_meta( 'ID' ), 'mos-user-media' );
            $description = get_the_author_meta('description');
            $social_links = carbon_get_user_meta( get_the_author_meta( 'ID' ), 'mos-user-social-links' );
            ?>
            <?php echo wp_get_attachment_image ($media, 'full', false, array('class' => 'rounded-3 mb-20'));?>
            <h4 class="team-member-name mb-10"><?php echo get_the_author_meta('display_name') ?></h4>
            <div class="team-member-bio mb-20"><?php echo $description; ?></div>
            
                <ul class="list-inline">
                    <?php foreach ( $social_links as $link ) : ?>
                        <li><?php var_dump ($link); ?></li>
                    <?php endforeach;?>
                </ul>
            
        </aside>
        <aside id="media_image-2" class="widget widget_media_image"><img width="500" height="625" src="https://designil.activebd4u.com/wp-content/uploads/2021/05/6082d0f997bf4a5906af90d9_banner-sidebar-p-500.jpeg" class="image wp-image-13520  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://designil.activebd4u.com/wp-content/uploads/2021/05/6082d0f997bf4a5906af90d9_banner-sidebar-p-500.jpeg 500w, https://designil.activebd4u.com/wp-content/uploads/2021/05/6082d0f997bf4a5906af90d9_banner-sidebar-p-500-240x300.jpeg 240w" sizes="(max-width: 500px) 100vw, 500px"></aside>
    </div><!-- .sidebar-main -->
</div>