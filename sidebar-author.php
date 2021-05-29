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
            <?php if ($social_links) : ?>
                <ul class="list-inline author-social">
                    <?php foreach ( $social_links as $value ) : ?>
                        <?php
                        $url = trim($value['link']);
                        $pattern = '/http(s)?:\/\/(www.)?(api.)?/i';
                        $removeStr = preg_replace($pattern, '', $url);
                        $arr = explode('.',$removeStr); 
                        ?>
                        <li><a target="_blank" href="<?php echo $value['link']; ?>"><i class="fa fa-<?php echo $arr[0] ?>"></i></a></li>
                    <?php endforeach;?>
                </ul>
            <?php endif;?>
        </aside>
        <?php //if ( is_active_sidebar( 'author_widget' ) ) : ?>
            <?php //dynamic_sidebar( 'author_widget' ); ?>
        <?php //endif; ?>
    </div><!-- .sidebar-main -->
</div>