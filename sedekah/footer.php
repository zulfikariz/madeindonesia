     
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="info">
                        <div id="second-logo" class="column"> <?php $logo = get_field('left_logo',55); ?>
                            <a href="<?php echo site_url(); ?>"><img width="80%" src="<?=$logo;?>"/></a>
                        </div>
                        <div class="column">
                            <p><?php // echo $this->setting_model->get_setting('footer_text'); ?></p>
                        </div>
                        <div class="column">
                            <a class="detail">
                                <i class="icon fa fa-map-marker"></i><span><?=$text=get_field('text_midle',55);?></span>
                            </a>
                        </div>

                        <div class="column">
                            <a class="detail">
                                <i class="icon fa fa-envelope-o"></i><span><?=$text=get_field('addres_midle',55);?></span>
                            </a>

                            <a class="detail">
                                <i class="icon fa fa-phone"></i><span><?=$text=get_field('kontact_right',55);?></span>
                            </a>

                        </div>
                        <div class="footer-menu">
                            <nav id="menu-left">
                                <ul>
                                    <?php
                                     wp_nav_menu( array(
                                         'theme_location'   => 'Second',
                                         'depth'            => 1,
                                         // 'menu_id'           => 'main-menu',
                                         'menu_class'       => 'list-inline'
                                     ));
                                     ?>
                        
                                </ul>
                            </nav>

                            <nav id="menu-right">
                                <ul>
                                    <?php
                                     wp_nav_menu( array(
                                         'theme_location'   => 'Second',
                                         'depth'            => 1,
                                         // 'menu_id'           => 'main-menu',
                                         'menu_class'       => 'list-inline'
                                     ));
                                     ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>



            <div id="footer-bottom">
                <div class="container">
                    <span class="site-info">Copyright &copy; <?php echo date('Y'); ?> Komunitas Sedekah Celengan</span>
                    <span>Powered by SC. Designed by Sedekah Celengan</span>
                </div>
            </div>
        </footer>
       
<?php wp_footer(); ?>
<script type="text/javascript" charset="utf-8">
    $(function(){
        // Trigger maximage
        jQuery('#slider').maximage({
            cycleOptions: {
                fx: 'scrollHorz',
                speed: 1000,
                timeout: 2000,
                prev: '#arrow_left',
                next: '#arrow_right',
                pause: 1
            }
        });
        jQuery('.in-slide-content').fadeIn();
    });
</script>

<script>
    
        $(function(){
            $.stellar({
                horizontalScrolling: false,
                verticalOffset: 50,
                responsive: true
            });
        });

</script>

</body>
</html>


