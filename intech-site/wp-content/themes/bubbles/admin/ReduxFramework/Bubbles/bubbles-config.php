<?php
/**
  ReduxFramework Sample Config File
  For full documentation, please visit: https://github.com/ReduxFramework/ReduxFramework/wiki
 * */

if (!class_exists("Redux_Framework_sample_config")) {

    class Redux_Framework_sample_config {

        public $args = array();
        public $sections = array();
        public $theme;
        public $ReduxFramework;

        public function __construct() {

            if ( !class_exists("ReduxFramework" ) ) {
                return;
            }
            define('TEMPWAY',get_template_directory());

            // This is needed. Bah WordPress bugs.  ;)
            if ( defined('TEMPWAY') && strpos( Redux_Helpers::cleanFilePath( __FILE__ ), Redux_Helpers::cleanFilePath( TEMPWAY ) ) !== false) {
                $this->initSettings();
            } else {
                add_action('plugins_loaded', array($this, 'initSettings'), 10);
            }
        }

        public function initSettings() {

            // Just for demo purposes. Not needed per say.
            $this->theme = wp_get_theme();

            // Set the default arguments
            $this->setArguments();

            // Set a few help tabs so you can see how it's done
            $this->setHelpTabs();

            // Create the sections and fields
            $this->setSections();

            if (!isset($this->args['opt_name'])) { // No errors please
                return;
            }

            // If Redux is running as a plugin, this will remove the demo notice and links
            //add_action( 'redux/loaded', array( $this, 'remove_demo' ) );

            // Function to test the compiler hook and demo CSS output.
            //add_filter('redux/options/'.$this->args['opt_name'].'/compiler', array( $this, 'compiler_action' ), 10, 2);
            // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
            // Change the arguments after they've been declared, but before the panel is created
            //add_filter('redux/options/'.$this->args['opt_name'].'/args', array( $this, 'change_arguments' ) );
            // Change the default value of a field after it's been set, but before it's been useds
            //add_filter('redux/options/'.$this->args['opt_name'].'/defaults', array( $this,'change_defaults' ) );
            // Dynamically add a section. Can be also used to modify sections/fields


            $this->ReduxFramework = new ReduxFramework($this->sections, $this->args);
        }

        /**

          This is a test function that will let you see when the compiler hook occurs.
          It only runs if a field	set with compiler=>true is changed.

         * */
        function compiler_action($options, $css) {
            //echo "<h1>The compiler hook has run!";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )

            /*
              // Demo of how to use the dynamic CSS and write your own static CSS file
              $filename = dirname(__FILE__) . '/style' . '.css';
              global $wp_filesystem;
              if( empty( $wp_filesystem ) ) {
              require_once( ABSPATH .'/wp-admin/includes/file.php' );
              WP_Filesystem();
              }

              if( $wp_filesystem ) {
              $wp_filesystem->put_contents(
              $filename,
              $css,
              FS_CHMOD_FILE // predefined mode settings for WP files
              );
              }
             */
        }

        /**

          Custom function for filtering the sections array. Good for child themes to override or add to the sections.
          Simply include this function in the child themes functions.php file.

          NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
          so you must use get_template_directory_uri() if you want to use any of the built in icons

         * */

        /**

          Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.

         * */
        function change_arguments($args) {
            //$args['dev_mode'] = true;

            return $args;
        }

        /**

          Filter hook for filtering the default value of any given field. Very useful in development mode.

         * */
        function change_defaults($defaults) {
            $defaults['str_replace'] = "Testing filter hook!";

            return $defaults;
        }

        // Remove the demo link and the notice of integrated demo from the redux-framework plugin
        function remove_demo() {

            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if (class_exists('ReduxFrameworkPlugin')) {
                remove_filter('plugin_row_meta', array(ReduxFrameworkPlugin::instance(), 'plugin_metalinks'), null, 2);

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));

            }
        }

        public function setSections() {

            /**
              Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
             * */
            // Background Patterns Reader
            $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
            $sample_patterns_url = ReduxFramework::$_url . '../sample/patterns/';
            $sample_patterns = array();

            if (is_dir($sample_patterns_path)) :

                if ($sample_patterns_dir = opendir($sample_patterns_path)) :
                    $sample_patterns = array();

                    while (( $sample_patterns_file = readdir($sample_patterns_dir) ) !== false) {

                        if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                            $name = explode(".", $sample_patterns_file);
                            $name = str_replace('.' . end($name), '', $sample_patterns_file);
                            $sample_patterns[] = array('alt' => $name, 'img' => $sample_patterns_url . $sample_patterns_file);
                        }
                    }
                endif;
            endif;

            ob_start();

            $ct = wp_get_theme();
            $this->theme = $ct;
            $item_name = $this->theme->get('Name');
            $tags = $this->theme->Tags;
            $screenshot = $this->theme->get_screenshot();
            $class = $screenshot ? 'has-screenshot' : '';

            $customize_title = sprintf(__('Customize &#8220;%s&#8221;', 'redux-framework-demo'), $this->theme->display('Name'));
            ?>
            <div id="current-theme" class="<?php echo esc_attr($class); ?>">
            <?php if ($screenshot) : ?>
                <?php if (current_user_can('edit_theme_options')) : ?>
                        <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr($customize_title); ?>">
                            <img src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview'); ?>" />
                        </a>
                <?php endif; ?>
                    <img class="hide-if-customize" src="<?php echo esc_url($screenshot); ?>" alt="<?php esc_attr_e('Current theme preview'); ?>" />
            <?php endif; ?>

                <h4>
            <?php echo $this->theme->display('Name'); ?>
                </h4>

                <div>
                    <ul class="theme-info">
                        <li><?php printf(__('By %s', 'redux-framework-demo'), $this->theme->display('Author')); ?></li>
                        <li><?php printf(__('Version %s', 'redux-framework-demo'), $this->theme->display('Version')); ?></li>
                        <li><?php echo '<strong>' . __('Tags', 'redux-framework-demo') . ':</strong> '; ?><?php printf($this->theme->display('Tags')); ?></li>
                    </ul>
                    <p class="theme-description"><?php echo $this->theme->display('Description'); ?></p>
                <?php
                if ($this->theme->parent()) {
                    printf(' <p class="howto">' . __('This <a href="%1$s">child theme</a> requires its parent theme, %2$s.') . '</p>', __('http://codex.wordpress.org/Child_Themes', 'redux-framework-demo'), $this->theme->parent()->display('Name'));
                }
                ?>

                </div>

            </div>

            <?php
            $item_info = ob_get_contents();

            ob_end_clean();

            $sampleHTML = '';
            if (file_exists(dirname(__FILE__) . '/info-html.html')) {
                /** @global WP_Filesystem_Direct $wp_filesystem  */
                global $wp_filesystem;
                if (empty($wp_filesystem)) {
                    require_once(ABSPATH . '/wp-admin/includes/file.php');
                    WP_Filesystem();
                }
                $sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__) . '/info-html.html');
            }




            // ACTUAL DECLARATION OF SECTIONS

            $this->sections[] = array(
                'title' => __('Home Settings', 'redux-framework-demo'),
                'desc' => __('', 'redux-framework-demo'),
                'icon' => 'el-icon-home',
                // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                'fields' => array(

                    array(
                        'id' => 'background-color',
                        'type' => 'color',
                        'title' => __('Background Color', 'redux-framework-demo'),
                        'subtitle' => __('Pick a background color for the Background (default: #FFF).', 'redux-framework-demo'),
                        'default' => '#FFF',
                        'validate' => 'color',
                    ),
                    array(
                        'id' => 'main-color',
                        'type' => 'color',
                        'title' => __('Main Color', 'redux-framework-demo'),
                        'subtitle' => __('Pick a main color  (default: #00A8D6).', 'redux-framework-demo'),
                        'default' => '#00A8D6',
                        'validate' => 'color',
                    ),  
                    array(
                        'id' => 'second-color',
                        'type' => 'color',
                        'title' => __('Second Color', 'redux-framework-demo'),
                        'subtitle' => __('Pick a second color  (default: #ED503C).', 'redux-framework-demo'),
                        'default' => '#ED503C',
                        'validate' => 'color',
                    ),
                    array(
                        'id' => 'third-color',
                        'type' => 'color',
                        'title' => __('Third Color', 'redux-framework-demo'),
                        'subtitle' => __('Pick a third color  (default: #ffd33c).', 'redux-framework-demo'),
                        'default' => '#ffd33c',
                        'validate' => 'color',
                    ), 
                    array(
                        'id' => 'fourth-color',
                        'type' => 'color',
                        'title' => __('Fourth Color', 'redux-framework-demo'),
                        'subtitle' => __('Pick a fourth color  (default: #8ECFC2).', 'redux-framework-demo'),
                        'default' => '#8ECFC2',
                        'validate' => 'color',
                    ),                                        
                    array(
                        'id' => 'section-media-start',
                        'type' => 'section',
                        'title' => __('Home Section Type', 'redux-framework-demo'),
                        'subtitle' => __(' Please select Home Section Type ', 'redux-framework-demo'),
                        'indent' => true // Indent all options below until the next 'section' option is set.
                    ),
                    array(
                        'id' => 'home-page-type',
                        'type' => 'select',
                        'title' => __('', 'redux-framework-demo'),
                        'subtitle' => __('', 'redux-framework-demo'),
                        'options' => array('video' => 'Video Background', 'slider' => 'Slider Background', 'sliderrev' => 'Slider Revolution'),
                        'default' => 'slider',
                    ), 
                     array(
                        'id' => 'video-background-home',
                        'type' => 'text',
                        'title' => __('Video Background', 'redux-framework-demo'),
                        'desc' => __('Please upload your .mp4 videos .webm and .ogg versions to same folder with same name!', 'redux-framework-demo'),
                        'subtitle' => __('Video Background', 'redux-framework-demo'),
                        'default' => 'http://www.2035themes.com/bubbles/wp/wp-content/uploads/2014/03/168883037-online-video-cutter.com-1.mp4'
                    ),                      
                     array(
                        'id' => 'video-background-image',
                        'type' => 'media',
                        'title' => __('Video Background Mobile Image', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Video Background Mobile Image', 'redux-framework-demo'),
                        'subtitle' => __('Upload Video Background Mobile Image', 'redux-framework-demo'),
                    ),
                    array(
                        'id' => 'section-media-start',
                        'type' => 'section',
                        'title' => __('Title Underline', 'redux-framework-demo'),
                        'subtitle' => __(' Please select Title Underline ', 'redux-framework-demo'),
                        'indent' => true // Indent all options below until the next 'section' option is set.
                    ), 
                    array(
                        'id'        => 'title_underline',
                        'type'      => 'image_select',
                        'presets'   => true,
                        'title'     => __('', 'redux-framework-demo'),
                        'default'   => 1,
                        'desc'      => __('Please select Title underline Type', 'redux-framework-demo'),
                        'options'   => array(
                            '1'         => array('alt' => 'Preset 1', 'img' => ReduxFramework::$_url . '../sample/presets/underline.jpg', 'presets' => array('switch-on' => 1, 'switch-off' => 1, 'switch-custom' => 1)),
                            '2'         => array('alt' => 'Preset 2', 'img' => ReduxFramework::$_url . '../sample/presets/underline2.jpg', 'presets' => '{"slider1":"1", "slider2":"0", "switch-on":"1"}'),
                        ),
                    ),                                                                         
                ),
            );

            $this->sections[] = array(
                'icon' => 'el-icon-adjust-alt',
                'title' => __('Scroll & Speed', 'redux-framework-demo'),
                'fields' => array(
                    array(
                        'id' => 'menu_scroll_speed',
                        'type' => 'slider',
                        'title' => __('Menu Scrool Speed', 'redux-framework-demo'),
                        'desc' => __('Menu Scrool Speed', 'redux-framework-demo'),
                        "default" => "1500",
                        "min" => "400",
                        "step" => "50",
                        "max" => "3000",
                    ),
                    array(
                        'id' => 'section-media-start',
                        'type' => 'section',
                        'title' => __('Home Background Slider', 'redux-framework-demo'),
                        'subtitle' => __(' ', 'redux-framework-demo'),
                        'indent' => true // Indent all options below until the next 'section' option is set.
                    ),                    
                    array(
                        'id' => 'home-background-speed',
                        'type' => 'slider',
                        'title' => __('Home Page Background Slider Speed', 'redux-framework-demo'),
                        'desc' => __('Home Page Background Slider Speed (Length between transitions)', 'redux-framework-demo'),
                        "default" => "5600",
                        "min" => "200",
                        "step" => "400",
                        "max" => "8000",
                    ), 
                    array(
                        'id' => 'home-transition-speed',
                        'type' => 'slider',
                        'title' => __('Home Page Background Slider transition Speed', 'redux-framework-demo'),
                        'desc' => __('Home Page Background Slider transition Speed (Speed of transition)', 'redux-framework-demo'),
                        "default" => "500",
                        "min" => "50",
                        "step" => "50",
                        "max" => "3000",
                    ),
                    array(
                        'id' => 'slider-effect',
                        'type' => 'select',
                        'title' => __('Home Background Slider Effect', 'redux-framework-demo'),
                        'subtitle' => __('Home Background Slider Effect', 'redux-framework-demo'),
                        'options' => array(
                            "0" => "None",
                            "1" => "Fade",
                            "2" => "Slide Top",
                            "3" => "Slide Right",
                            "4" => "Slide Bottom",
                            "5" => "Slide Left",
                            "6" => "Carousel Right",
                            "7" => "Carousel Left",
                        ),
                        'default' => '1',
                    ),                                          
                    array(
                        'id' => 'section-media-start',
                        'type' => 'section',
                        'title' => __('Home Text Slider', 'redux-framework-demo'),
                        'subtitle' => __(' ', 'redux-framework-demo'),
                        'indent' => true // Indent all options below until the next 'section' option is set.
                    ),                    
                    array(
                        'id' => 'home-text-speed',
                        'type' => 'slider',
                        'title' => __('Home Page Text Slider Speed', 'redux-framework-demo'),
                        'desc' => __('Home Page Text Slider Speed', 'redux-framework-demo'),
                        "default" => "3400",
                        "min" => "200",
                        "step" => "200",
                        "max" => "6000",
                    ),                     
                     array(
                        'id' => 'home-text-animation-speed',
                        'type' => 'slider',
                        'title' => __('Home Page Text Slider Animation Speed', 'redux-framework-demo'),
                        'desc' => __('Home Page Text Slider Animation Speed', 'redux-framework-demo'),
                        "default" => "1000",
                        "min" => "100",
                        "step" => "100",
                        "max" => "2600",
                    ),  
                    array(
                        'id' => 'section-media-start',
                        'type' => 'section',
                        'title' => __('Custom Scroll', 'redux-framework-demo'),
                        'subtitle' => __(' ', 'redux-framework-demo'),
                        'indent' => true // Indent all options below until the next 'section' option is set.
                    ),                       
                    array(
                        'id' => 'custom-scroll',
                        'type' => 'switch',
                        'title' => __('Custom Scroll', 'redux-framework-demo'),
                        'subtitle' => __('', 'redux-framework-demo'),
                        "default" => 1,
                    ),                                                         
                    array(
                        'id' => 'scroll-width',
                        'type' => 'slider',
                        'title' => __('Custom Scrool Width', 'redux-framework-demo'),
                        'desc' => __('Custom Scrool Width', 'redux-framework-demo'),
                        "default" => "5",
                        "min" => "1",
                        "step" => "1",
                        "max" => "30",
                    ),
                    array(
                        'id' => 'section-media-start',
                        'type' => 'section',
                        'title' => __('Other', 'redux-framework-demo'),
                        'subtitle' => __(' ', 'redux-framework-demo'),
                        'indent' => true // Indent all options below until the next 'section' option is set.
                    ),                      
                    array(
                        'id' => 'carousel-speed',
                        'type' => 'slider',
                        'title' => __('Carousel Speed', 'redux-framework-demo'),
                        'desc' => __('Carousel Speed', 'redux-framework-demo'),
                        "default" => "3000",
                        "min" => "200",
                        "step" => "200",
                        "max" => "6000",
                    ),                      
                    array(
                        'id' => 'animate',
                        'type' => 'switch',
                        'title' => __('Animate', 'redux-framework-demo'),
                        'subtitle' => __('', 'redux-framework-demo'),
                        "default" => 1,
                    ),  
                    array(
                        'id' => 'portfolio-filter',
                        'type' => 'switch',
                        'title' => __('Portfolio Filter', 'redux-framework-demo'),
                        'subtitle' => __('', 'redux-framework-demo'),
                        "default" => 1,
                    ),                                                          
                )
            );



            $this->sections[] = array(
                'icon' => 'el-icon-circle-arrow-down',
                'title' => __('Logo & Favicon', 'redux-framework-demo'),
                'fields' => array(
                     array(
                        'id' => 'logo',
                        'type' => 'media',
                        'title' => __('Logo', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Logo', 'redux-framework-demo'),
                        'subtitle' => __('Upload Logo', 'redux-framework-demo'),
                    ), 
                     array(
                        'id' => 'favicon',
                        'type' => 'media',
                        'title' => __('Favicon', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Favicon', 'redux-framework-demo'),
                        'subtitle' => __('Upload Logo', 'redux-framework-demo'),
                    ), 
                     array(
                        'id' => 'ipad_retina_icon',
                        'type' => 'media',
                        'title' => __('Ipad Retina Icon (144x144)', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Ipad Retina Icon (144x144)', 'redux-framework-demo'),
                        'subtitle' => __('Upload Ipad Retina Icon', 'redux-framework-demo'),
                    ),   
                     array(
                        'id' => 'iphone_icon_retina',
                        'type' => 'media',
                        'title' => __('Iphone Retina Icon (114x114)', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Iphone Retina Icon (114x114)', 'redux-framework-demo'),
                        'subtitle' => __('Upload Iphone Retina Icon', 'redux-framework-demo'),
                    ), 
                      array(
                        'id' => 'ipad_icon',
                        'type' => 'media',
                        'title' => __('Ipad Icon (72x72)', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Ipad Icon (72x72)', 'redux-framework-demo'),
                        'subtitle' => __('Upload Ipad Icon', 'redux-framework-demo'),
                    ), 
                      array(
                        'id' => 'iphone_icon',
                        'type' => 'media',
                        'title' => __('Iphone Icon (57x57)', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Iphone Icon (57x57)', 'redux-framework-demo'),
                        'subtitle' => __('Upload Iphone Icon', 'redux-framework-demo'),
                    ),                                                                                                          
                )
            );


            $this->sections[] = array(
                'icon' => 'el-icon-list',
                'title' => __('Menu', 'redux-framework-demo'),
                'fields' => array(
                     array(
                        'id' => 'menu-background-color',
                        'type' => 'color',
                        'title' => __('Menu Background Color', 'redux-framework-demo'),
                        'compiler' => 'true',
                        'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                        'desc' => __('Menu Background Color', 'redux-framework-demo'),
                        'subtitle' => __('Menu Background Color', 'redux-framework-demo'),
                    ), 
                    array(
                        'id' => 'menu-typography',
                        'type' => 'typography',
                        'title' => __('Menu Typography', 'redux-framework-demo'),
                        //'compiler'=>true, // Use if you want to hook in your own CSS compiler
                        'google' => true, // Disable google fonts. Won't work if you haven't defined your google api key
                        'font-backup' => true, // Select a backup non-google font in addition to a google font
                        //'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
                        //'subsets'=>false, // Only appears if google is true and subsets not set to false
                        //'font-size'=>false,
                        //'line-height'=>false,
                        //'word-spacing'=>true, // Defaults to false
                        //'letter-spacing'=>true, // Defaults to false
                        //'color'=>true,
                        //'preview'=>false, // Disable the previewer
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h2.site-description'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
                        'units' => 'px', // Defaults to px
                        'subtitle' => __('Menu Typography', 'redux-framework-demo'),
                        'default' => array(
                            'color' => "#727272",
                            'font-weight' => '400',
                            'font-family' => 'Montserrat',
                            'google' => true,
                            'font-size' => '11px',
                            'line-height' => '40px'),
                    ),                                                                                                      
                )
            );


            $this->sections[] = array(
                'icon' => 'el-icon-text-width',
                'title' => __('Typography', 'redux-framework-demo'),
                'fields' => array(
                    array(
                        'id' => 'fontselect',
                        'type' => 'select',
                        'title' => __('Title Font', 'redux-framework-demo'),
                        'subtitle' => __('Title Font', 'redux-framework-demo'),
                        'options' => array( 'customfont' => 'Custom Font', 'titlefontsgoogle' => 'Google Font'),
                        'default' => 'titlefontsgoogle',
                    ),
                    array(
                        'id' => 'custom-font-name',
                        'required'    => array('fontselect', 'equals', 'customfont'),
                        'type' => 'text',
                        'title' => __('Font Name', 'redux-framework-demo'),
                        'subtitle' => __('Font Name', 'redux-framework-demo'),
                        'desc' => __('', 'redux-framework-demo'),
                        'default' => "novecento_bold",
                    ), 
                    array(
                        'id' => 'eot',
                        'required'    => array('fontselect', 'equals', 'customfont'),
                        'type' => 'text',
                        'title' => __('Custom Font (eot)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (eot) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (eot) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.eot",
                    ),                     
                    array(
                        'id' => 'iefix',
                        'required'    => array('fontselect', 'equals', 'customfont'),
                        'type' => 'text',
                        'title' => __('Custom Font (eot?#iefix)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (eot?#iefix) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (eot?#iefix) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.eot?#iefix",
                    ),                     
                    array(
                        'id' => 'woff',
                        'required'    => array('fontselect', 'equals', 'customfont'),
                        'type' => 'text',
                        'title' => __('Custom Font (woff)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (woff) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (woff) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.woff",
                    ),                      
                    array(
                        'id' => 'ttf',
                        'required'    => array('fontselect', 'equals', 'customfont'),
                        'type' => 'text',
                        'title' => __('Custom Font (ttf)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (ttf) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (ttf) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.ttf",
                    ),                       
                    array(
                        'id' => 'svg',
                        'required'    => array('fontselect', 'equals', 'customfont'),
                        'type' => 'text',
                        'title' => __('Custom Font (svg)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (svg) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (svg) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.svg#novecento_sans_wide_bookbold",
                    ), 

                    array(
                        'id' => 'title-typography',
                        'type' => 'typography',
                        'required'    => array('fontselect', 'equals', 'titlefontsgoogle'),
                        'title' => __('Title Typography', 'redux-framework-demo'),
                        //'compiler'=>true, // Use if you want to hook in your own CSS compiler
                        'google' => true, // Disable google fonts. Won't work if you haven't defined your google api key
                        'font-backup' => true, // Select a backup non-google font in addition to a google font
                        //'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
                        //'subsets'=>false, // Only appears if google is true and subsets not set to false
                        'font-size'=>false,
                        'line-height'=>false,
                        //'word-spacing'=>true, // Defaults to false
                        //'letter-spacing'=>true, // Defaults to false
                        'color'=>false,
                        //'preview'=>false, // Disable the previewer
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h2.site-description'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
                        'units' => 'px', // Defaults to px
                        'subtitle' => __('Title Typography', 'redux-framework-demo'),
                        'default' => array(
                            'color' => "#727272",
                            'font-weight' => '400',
                            'font-family' => 'Montserrat',
                            'google' => true,
                            'font-size' => '18px',
                            'line-height' => '23px'),
                    ),



                    array(
                        'id' => 'fontselect-two',
                        'type' => 'select',
                        'title' => __('Title Two Font', 'redux-framework-demo'),
                        'subtitle' => __('Title Two Font', 'redux-framework-demo'),
                        'options' => array( 'customfont-two' => 'Custom Font', 'titlefontsgoogle-two' => 'Google Font'),
                        'default' => 'titlefontsgoogle-two',
                    ),
                    array(
                        'id' => 'custom-font-name-two',
                        'required'    => array('fontselect-two', 'equals', 'customfont-two'),
                        'type' => 'text',
                        'title' => __('Font Name', 'redux-framework-demo'),
                        'subtitle' => __('Font Name', 'redux-framework-demo'),
                        'desc' => __('', 'redux-framework-demo'),
                        'default' => "novecento_bold",
                    ), 
                    array(
                        'id' => 'eot-two',
                        'required'    => array('fontselect-two', 'equals', 'customfont-two'),
                        'type' => 'text',
                        'title' => __('Custom Font (eot)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (eot) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (eot) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.eot",
                    ),                     
                    array(
                        'id' => 'iefix-two',
                        'required'    => array('fontselect-two', 'equals', 'customfont-two'),
                        'type' => 'text',
                        'title' => __('Custom Font (eot?#iefix)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (eot?#iefix) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (eot?#iefix) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.eot?#iefix",
                    ),                     
                    array(
                        'id' => 'woff-two',
                        'required'    => array('fontselect-two', 'equals', 'customfont-two'),
                        'type' => 'text',
                        'title' => __('Custom Font (woff)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (woff) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (woff) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.woff",
                    ),                      
                    array(
                        'id' => 'ttf-two',
                        'required'    => array('fontselect-two', 'equals', 'customfont-two'),
                        'type' => 'text',
                        'title' => __('Custom Font (ttf)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (ttf) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (ttf) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.ttf",
                    ),                       
                    array(
                        'id' => 'svg-two',
                        'required'    => array('fontselect-two', 'equals', 'customfont-two'),
                        'type' => 'text',
                        'title' => __('Custom Font (svg)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (svg) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (svg) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.svg#novecento_sans_wide_bookbold",
                    ), 

                    array(
                        'id' => 'title-typography-two',
                        'type' => 'typography',
                        'required'    => array('fontselect-two', 'equals', 'titlefontsgoogle-two'),
                        'title' => __('Title Typography', 'redux-framework-demo'),
                        //'compiler'=>true, // Use if you want to hook in your own CSS compiler
                        'google' => true, // Disable google fonts. Won't work if you haven't defined your google api key
                        'font-backup' => true, // Select a backup non-google font in addition to a google font
                        //'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
                        //'subsets'=>false, // Only appears if google is true and subsets not set to false
                        'font-size'=>false,
                        'line-height'=>false,
                        //'word-spacing'=>true, // Defaults to false
                        //'letter-spacing'=>true, // Defaults to false
                        'color'=>false,
                        //'preview'=>false, // Disable the previewer
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h2.site-description'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
                        'units' => 'px', // Defaults to px
                        'subtitle' => __('Title Typography', 'redux-framework-demo'),
                        'default' => array(
                            'color' => "#333",
                            'font-weight' => '300',
                            'font-family' => 'Open Sans',
                            'google' => true,
                            'font-size' => '18px',
                            'line-height' => '23px'),
                    ),




                    array(
                        'id' => 'fontselect-site',
                        'type' => 'select',
                        'title' => __('Site Typography', 'redux-framework-demo'),
                        'subtitle' => __('Site Typography', 'redux-framework-demo'),
                        'options' => array( 'customfontsite' => 'Custom Font', 'sitefontsgoogle' => 'Google Font'),
                        'default' => 'sitefontsgoogle',
                    ),
                    array(
                        'id' => 'custom-font-name-site',
                        'required'    => array('fontselect-site', 'equals', 'customfontsite'),
                        'type' => 'text',
                        'title' => __('Font Name', 'redux-framework-demo'),
                        'subtitle' => __('Font Name', 'redux-framework-demo'),
                        'desc' => __('', 'redux-framework-demo'),
                        'default' => "novecento_bold",
                    ), 
                    array(
                        'id' => 'eot-site',
                        'required'    => array('fontselect-site', 'equals', 'customfontsite'),
                        'type' => 'text',
                        'title' => __('Custom Font (eot)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (eot) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (eot) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.eot",
                    ),                     
                    array(
                        'id' => 'iefix-site',
                        'required'    => array('fontselect-site', 'equals', 'customfontsite'),
                        'type' => 'text',
                        'title' => __('Custom Font (eot?#iefix)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (eot?#iefix) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (eot?#iefix) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.eot?#iefix",
                    ),                     
                    array(
                        'id' => 'woff-site',
                        'required'    => array('fontselect', 'equals', 'customfontsite'),
                        'type' => 'text',
                        'title' => __('Custom Font (woff)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (woff) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (woff) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.woff",
                    ),                      
                    array(
                        'id' => 'ttf-site',
                        'required'    => array('fontselect-site', 'equals', 'customfontsite'),
                        'type' => 'text',
                        'title' => __('Custom Font (ttf)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (ttf) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (ttf) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.ttf",
                    ),                       
                    array(
                        'id' => 'svg-site',
                        'required'    => array('fontselect-site', 'equals', 'customfontsite'),
                        'type' => 'text',
                        'title' => __('Custom Font (svg)', 'redux-framework-demo'),
                        'desc' => __('Custom Font (svg) URL', 'redux-framework-demo'),
                        'subtitle' => __('Custom Font (svg) URL', 'redux-framework-demo'),
                        'default' => THEMEROOT."/fonts/novecento_sans_wide_bold.svg#novecento_sans_wide_bookbold",
                    ), 

                    array(
                        'id' => 'site-typography',
                        'type' => 'typography',
                        'required'    => array('fontselect-site', 'equals', 'sitefontsgoogle'),
                        'title' => __('Site Typography', 'redux-framework-demo'),
                        //'compiler'=>true, // Use if you want to hook in your own CSS compiler
                        'google' => true, // Disable google fonts. Won't work if you haven't defined your google api key
                        'font-backup' => true, // Select a backup non-google font in addition to a google font
                        'font-style'=>false, // Includes font-style and weight. Can use font-style or font-weight to declare
                        //'subsets'=>false, // Only appears if google is true and subsets not set to false
                        //'font-size'=>false,
                        //'line-height'=>false,
                        //'word-spacing'=>true, // Defaults to false
                        //'letter-spacing'=>true, // Defaults to false
                        //'color'=>true,
                        //'preview'=>false, // Disable the previewer
                        'all_styles' => true, // Enable all Google Font style/weight variations to be added to the page
                        'output' => array('h2.site-description'), // An array of CSS selectors to apply this font style to dynamically
                        'compiler' => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
                        'units' => 'px', // Defaults to px
                        'subtitle' => __('Site Typography', 'redux-framework-demo'),
                        'default' => array(
                            'color' => "#828282",
                            'font-weight' => '400',
                            'font-family' => 'Open Sans',
                            'google' => true,
                            'font-size' => '13px',
                            'line-height' => '23px'),
                    ), 
                                                                                                                         
                )
            );


            $this->sections[] = array(
                'icon' => 'el-icon-map-marker-alt',
                'title' => __('Map Settings', 'redux-framework-demo'),
                'fields' => array(
                     array(
                        'id' => 'latitude',
                        'type' => 'text',
                        'title' => __('Latitude', 'redux-framework-demo'),
                        'desc' => __('Please Visit for your address <a href="http://itouchmap.com/latlong.html">itouchmap</a>', 'redux-framework-demo'),
                        'subtitle' => __('Latitude', 'redux-framework-demo'),
                        'default' => '40.783435'
                    ), 
                     array(
                        'id' => 'longitude',
                        'type' => 'text',
                        'title' => __('Longitude', 'redux-framework-demo'),
                        'desc' => __('Please Visit for your address <a href="http://itouchmap.com/latlong.html">itouchmap</a>', 'redux-framework-demo'),
                        'subtitle' => __('Longitude', 'redux-framework-demo'),
                        'default' => '-73.966249'
                    ),                                                                                                                         
                )
            );


            $this->sections[] = array(
                'icon' => 'el-icon-css',
                'title' => __('Custom Css', 'redux-framework-demo'),
                'fields' => array(
                    array(
                        'id' => 'custom-css-area',
                        'type' => 'textarea',
                        'title' => __('Custom CSS', 'redux-framework-demo'),
                        'subtitle' => __('Quickly add some CSS to your theme by adding it to this block.', 'redux-framework-demo'),
                        'desc' => __('', 'redux-framework-demo'),
                        'validate' => 'css',
                    ),                                                                                                                      
                )
            );


            $this->sections[] = array(
                'icon' => 'el-icon-pause',
                'title' => __('Loading', 'redux-framework-demo'),
                'fields' => array(
                    array(
                        'id' => 'loading_type',
                        'type' => 'select',
                        'title' => __('Loading Type', 'redux-framework-demo'),
                        'subtitle' => __('Loading Type', 'redux-framework-demo'),
                        'options' => array(
                            "Off" => "Off",
                            "loading" => "Standart",
                            "loading1" => "Loading Style 1 (Clock) ",
                            "loading2" => "Loading Style 2 (Typing Loader) ",
                            "loading3" => "Loading Style 3 (Location Indicator) ",
                            "loading4" => "Loading Style 4 (Battery) ",
                            "loading5" => "Loading Style 5 (Help) ",
                            "loading6" => "Loading Style 6 (Cloud) ",
                            "loading7" => "Loading Style 7 (Eye) ",
                            "loading8" => "Loading Style 8 (Coffee Cup) ",
                            "loading9" => "Loading Style 9 (Square) ",
                            "loading10" => "Loading Style 10 (Circle) ",
                            "loading11" => "Loading Gif for old Browsers",
                        ),
                        'default' => 'loading',
                    ),                                                                                                                      
                )
            );

            $this->sections[] = array(
                'icon' => 'el-icon-graph',
                'title' => __('Tracking Code', 'redux-framework-demo'),
                'fields' => array(
                    array(
                        'id'        => 'track_code',
                        'type'      => 'ace_editor',
                        'title'     => __('JS Code', 'redux-framework-demo'),
                        'subtitle'  => __('Paste your JS code here.', 'redux-framework-demo'),
                        'mode'      => 'javascript',
                        'theme'     => 'chrome',
                        'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
                        'default'   => ""
                    ),                                                                                                                                                            
                )
            );

            if (file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
                $tabs['docs'] = array(
                    'icon' => 'el-icon-book',
                    'title' => __('Documentation', 'redux-framework-demo'),
                    'content' => nl2br(file_get_contents(trailingslashit(dirname(__FILE__)) . 'README.html'))
                );
            }
        }

        public function setHelpTabs() {

            // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
            $this->args['help_tabs'][] = array(
                'id' => 'redux-opts-1',
                'title' => __('Theme Information 1', 'redux-framework-demo'),
                'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
            );

            $this->args['help_tabs'][] = array(
                'id' => 'redux-opts-2',
                'title' => __('Theme Information 2', 'redux-framework-demo'),
                'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
            );

            // Set the help sidebar
            $this->args['help_sidebar'] = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');
        }

        /**

          All the possible arguments for Redux.
          For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

         * */
        public function setArguments() {

            $theme = wp_get_theme(); // For use with some settings. Not necessary.

            $this->args = array(
                // TYPICAL -> Change these values as you need/desire
                'opt_name' => 'theme_prefix', // This is where your data is stored in the database and also becomes your global variable name.
                'display_name' => $theme->get('Name'), // Name that appears at the top of your panel
                'display_version' => $theme->get('Version'), // Version that appears at the top of your panel
                'menu_type' => 'menu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                'allow_sub_menu' => true, // Show the sections below the admin menu item or not
                'menu_title' => __('Bubbles Options', 'redux-framework-demo'),
                'page_title' => __('Bubbles Options', 'redux-framework-demo'),
                // You will need to generate a Google API key to use this feature.
                // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                'google_api_key' => 'AIzaSyC_DvFJA7SljYfSGUwT-N5VQWhz2iMK-RQ', // Must be defined to add google fonts to the typography module
                //'admin_bar' => false, // Show the panel pages on the admin bar
                'global_variable' => '', // Set a different name for your global variable other than the opt_name
                'dev_mode' => false, // Show the time the page took to load, etc
                'customizer' => true, // Enable basic customizer support
                // OPTIONAL -> Give you extra features
                'page_priority' => null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                'page_parent' => 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                'page_permissions' => 'manage_options', // Permissions needed to access the options panel.
                'menu_icon' => '', // Specify a custom URL to an icon
                'last_tab' => '', // Force your panel to always open to a specific tab (by id)
                'page_icon' => 'icon-themes', // Icon displayed in the admin panel next to your menu_title
                'page_slug' => '_options', // Page slug used to denote the panel
                'save_defaults' => true, // On load save the defaults to DB before user clicks save or not
                'default_show' => false, // If true, shows the default value next to each field that is not the default value.
                'default_mark' => '', // What to print by the field's title if the value shown is default. Suggested: *
                // CAREFUL -> These options are for advanced use only
                'transient_time' => 60 * MINUTE_IN_SECONDS,
                'output' => true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                'output_tag' => true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                //'domain'             	=> 'redux-framework', // Translation domain key. Don't change this unless you want to retranslate all of Redux.
                //'footer_credit'      	=> '', // Disable the footer credit of Redux. Please leave if you can help it.
                // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                'database' => '', // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                'show_import_export' => true, // REMOVE
                'system_info' => false, // REMOVE
                'help_tabs' => array(),
                'help_sidebar' => '', // __( '', $this->args['domain'] );
                'hints' => array(
                    'icon'              => 'icon-question-sign',
                    'icon_position'     => 'right',
                    'icon_color'        => 'lightgray',
                    'icon_size'         => 'normal',

                    'tip_style'         => array(
                        'color'     => 'light',
                        'shadow'    => true,
                        'rounded'   => false,
                        'style'     => '',
                    ),
                    'tip_position'      => array(
                        'my' => 'top left',
                        'at' => 'bottom right',
                    ),
                    'tip_effect' => array(
                        'show' => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'mouseover',
                        ),
                        'hide' => array(
                            'effect'    => 'slide',
                            'duration'  => '500',
                            'event'     => 'click mouseleave',
                        ),
                    ),
                )
            );




            // Panel Intro text -> before the form
            if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
                if (!empty($this->args['global_variable'])) {
                    $v = $this->args['global_variable'];
                } else {
                    $v = str_replace("-", "_", $this->args['opt_name']);
                }
                $this->args['intro_text'] = sprintf(__('<p> Theme2035 Framework etc.', 'redux-framework-demo'), $v);
            } else {
                $this->args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo');
            }

            // Add content after the form.
            $this->args['footer_text'] = __('<p> Bubbles Admin Panel </p>', 'redux-framework-demo');
        }

    }

    new Redux_Framework_sample_config();
}


/**

  Custom function for the callback referenced above

 */
if (!function_exists('redux_my_custom_field')):

    function redux_my_custom_field($field, $value) {
        print_r($field);
        print_r($value);
    }

endif;

/**

  Custom function for the callback validation referenced above

 * */
if (!function_exists('redux_validate_callback_function')):

    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $value = 'just testing';
        /*
          do your validation

          if(something) {
          $value = $value;
          } elseif(something else) {
          $error = true;
          $value = $existing_value;
          $field['msg'] = 'your custom error message';
          }
         */

        $return['value'] = $value;
        if ($error == true) {
            $return['error'] = $field;
        }
        return $return;
    }


endif;
