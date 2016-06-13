    <?php global $theme_prefix; ?>
    <div class="menu-container clearfix">
        <div class="logo pull-left">
            <?php

            if(empty($theme_prefix['logo']['url'])){
            $theme_prefix['logo']['url'] = "";
            }

             if($theme_prefix['logo']['url'] != "" ){ ?>
            <a href="<?php echo home_url(); ?>"><img alt="logo" src="<?php echo $theme_prefix['logo']['url']; ?>"></a>
            <?php } else { ?>
            <a href="<?php echo home_url(); ?>"><img alt="logo" src="<?php echo THEMEROOT."/images/logo.png";?>"  ></a>
            <?php } ?>

        </div>
        <div class="menu pull-right">
            <nav id="menu">
                <?php 
                if (has_nav_menu('top-menu')) {
                         wp_nav_menu(array('theme_location' => 'top-menu', 'container' => '','menu_class' => 'sf-menu', 'menu_id' => 'nav', 'walker' => new description_walker()));
                }
                else {
                    echo __("Please Add Menu from Appearance > Menus","theme2035-fm");
                }       
                ?>   
            </nav>
        </div>
    </div>
    <div class="clearfix"></div>


