<?php
/**
 * Main admin panel script for YTLightbox
 */

if ( ! defined( 'ABSPATH' ) ) exit;


$tab_action = "content";
if (isset($_GET['tab']) && !empty($_GET['tab']) ) {
    $tab_action = $_GET['tab'];
}


?>
<div class="wrap">
    <h2>Youtube Lightbox</h2>

    <h2 class="nav-tab-wrapper">
        <a href="<?php echo menu_page_url('ytlightbox', false).'&tab=content'; ?>" title="Content" class="nav-tab main-tab <?php echo ($tab_action=="content"?"nav-tab-active":"");  ?>" id="options-group-1-tab">Content</a>
        <a href="<?php echo menu_page_url('ytlightbox', false).'&tab=options'; ?>" title="Options" class="nav-tab actionbutton-tab <?php echo ($tab_action=="options"?"nav-tab-active":"");  ?>" id="options-group-2-tab">Options</a>
    </h2>


    <div class="metabox-holder" id="optionsframework-metabox">
	<div class="postbox" id="optionsframework">

            <form method="post" action="options.php">
                <?php settings_fields( 'ytlight-settings-'.$tab_action ); ?>
                <?php do_settings_sections( 'ytlight-settings-'.$tab_action ); ?>
                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>


                            <?php

                            $inc_file = dirname(__FILE__)."/tabs/tab-".$tab_action.".inc.php";
                            if (!file_exists($inc_file)){
                                $inc_file = dirname(__FILE__)."/tabs/tab-error.inc.php";
                            }
                            require_once($inc_file);
                            
                            ?>
                    </tr>
                </table>
            </form>
            
            
	    
	</div> <!-- / #container -->
    </div>        

    
    <div class="metabox-holder" id="optionsframework-sidebar">
        <div class="postbox" id="optionsframework">
            <h3>Support and Documentation</h3>
            <div class="inside">
                <div id="social-share">
                    <!-- Github -->
                    <a aria-label="Follow @tuxxus on GitHub" href="https://github.com/tuxxus" class="github-button">Follow @tuxxus</a>
                    <script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
                    <!-- Twitter  -->
                    <div class="tw-follow">
                        <a href="https://twitter.com/tuxxus" class="twitter-follow-button" data-show-count="false">Follow @tuxxus</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                </div>
                <p><b><a href="http://www.tuxxus.com/projects/ytlightbox" rel="_blank">YTLightbox Documentation</a></b></p>
                <p>The best way to contact us with <b>support questions</b> and <b>bug reports</b> is via <a href="https://github.com/tuxxus">Github</a>.</p>
                <p>If you like this plugin, I'd appreciate any of the following:</p>
                <ul>
                    <li><a target="_blank" title="Rate this Plugin" href="https://wordpress.org/plugins/ytlightbox/" class="button">Rate this Plugin</a></li>
                    <li><a target="_blank" title="Follow Tuxxus on Twitter" href="http://twitter.com/tuxxus" class="button">Follow on Twitter</a></li>                    
                    <li><a target="_blank" title="Follow us on Github" href="https://github.com/tuxxus" class="button">Follow us on Github</a></li>
                </ul>
                <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="4QH7FT6WTLE48">
                        <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </center>
            </div>
        </div>
    </div>    


    
    
    
</div>
