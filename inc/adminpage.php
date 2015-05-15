<?php
class CXSettingsPageShortCodes
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page_cx_shortcodes' ) );
        add_action( 'admin_init', array( $this, 'page_init_cx_shortcodes' ) );
    }
    
    /**
     * Add options page
     */
    public function add_plugin_page_cx_shortcodes()
    {
        // This page will be under "Settings"
        add_menu_page(
            'Settings Admin', 
            'Shortcodes', 
            'view_cx', 
            'cx-shortcodes-admin', 
            array( $this, 'create_admin_page_cx_shortcodes' )
        );
    }

    /**
     * Options page callback
     */
    public function create_admin_page_cx_shortcodes()
    {
        // Set class property
        $this->options = get_option( 'cx_shortcodes' );
        ?>
        <div class="wrap">
            <?php screen_icon(); ?>
            <?php $plugin = plugin_dir_url( __FILE__ ); ?>
            <h2>AbleWild Shortcodes</h2>           
            
            <p>There are various shortcodes available which help to control the layout and content of your pages.</p>
                        
            <h3>Button links</h3>
            <p>You can style a link as a button by adding the opening and closing [button] shortcodes before and after it. Adding the button shortcodes only styles the text, you need to add the actual link in the normal way from the Add Link button in the Wordpress editor.</p>            
            <p><b>Example:</b> <code>[button] My link [/button]</code></p>
            
            <hr />
            
            <h3>Youtube Videos</h3>
            <p>It is possible to add a Youtube video to a page or post simply by pasting its URL into the Wordpress edit screen. However adding videos in this way can stop them from displaying correctly on certain screens. You can make sure videos display correctly by adding the following shortcode instead of pasting the full video URL. The id of the video is the collection of numbers at the end of the URL.</p>
            <p><b>Example:</b> For the video <a href="https://www.youtube.com/watch?v=Tcx6YyXvvRI">https://www.youtube.com/watch?v=Tcx6YyXvvRI</a> you would enter the following shortcode: <code>[youtube id="Tcx6YyXvvRI"]</code></p>
            
            <hr />
            
            
            <h3>Content Blocks</h3>
            <p>It's sometimes necessary to group content into blocks to allow for the layouts you want onscreen. An example of this could be when you want a block of text to appear to the right of an image. To do this all you need to do is add your image before the text and then surround the text you want to group together with the opening and closing [block] shortcodes.</p>            
            <p><code>[block] Your content here. [/block]</code></p>
            <p>There are a couple of extra parameters you can add which make the grouped content appear in a narrower block or move to the right-hand side of the page.</p>
            <p><code>[block width="narrow" align="right"] Your content here. [/block]</code></p>
            
            <hr />
            
            <h3>Coloured boxes</h3>
            <p>The [boxout] shortcode works in a similar way to the [block] shortcode above. The main difference is that the text will appear within a coloured box.</p>
            <p><b>Example:</b> <code>[boxout] Your content here. [/boxout]</code></p>
            <p>You can set the boxout to a lighter colour like this: <code>[boxout class="light"] Your content [/boxout]</code></p>
            <p>Another thing you can do with the [boxout] shortcode is add content which will only appear on certain size screens. The following example results in a box which only appears on medium and larger screens.</p>
            <p><code>[boxout show="medium-up"] Your content for tablets and desktops.[/boxout]</code></p>
            <p>You can also add a box which will only display on smartphones like this:</p>
            <p><code>[boxout show="small-only"] Your content for smartphones.[/boxout]</code></p>
            
            <hr />

            <h3>Sub-page menus</h3>
            <p>You can add navigation menus to the body of pages with the help of the [menu] shortcode. The first thing you'll need to do is create a menu in the <i>Appearance > Menus</i> area of the Wordpress admin. Give the menu a title that's a single, lowercase word. This title will be included in the shortcode as in the example below:</p>            
            <p><code>[menu name="home"]</code></p>
            
            <hr />


            


            <h3>Styling logos</h3>
            <p>If you need to add a group of logos to a page you can make sure they display neatly by surrounding the group of images with the opening and closing [logos] shortcodes. </p>            
            <p><code>[logos] <img style="margin-right: .5em;" src="<?php echo $plugin; ?>img/logos-1.png" /><img style="margin-right: .5em;" src="<?php echo $plugin; ?>img/logos-3.png" /><img src="<?php echo $plugin; ?>img/logos-2.png" /> [/logos]</code></p><p><b>Result: </b><img src="<?php echo $plugin; ?>img/logos-group.png" /></p>
            
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init_cx_shortcodes()
    {        
        register_setting(
            'cx_option_group_shortcodes', // Option group
            'cx_shortcodes', // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'cx_section_deets', // ID
            '', // Title
            array( $this, 'print_section_info_cx_shortcodes' ), // Callback
            'cx-shortcodes-admin' // Page
        );  
        add_settings_section(
            'cx_section_deets_social', // ID
            '', // Title
            array( $this, 'print_section_info_cx_social' ), // Callback
            'cx-shortcodes-admin' // Page
        );
        

    }



}

if( is_admin() )
    $deets_settings_page = new CXSettingsPageShortCodes();
    
?>