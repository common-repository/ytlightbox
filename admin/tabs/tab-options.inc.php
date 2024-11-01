<?php
// get the content from options or use default
$ytlight_socials = get_option('ytlight_lightbox_socials');

?>
<table class="form-table" border="0" style="min-width:500px;">
    <tr>
        <td style="padding-top:0;margin-top:0;">
            Options for the lightbox message display
            <hr />

            <table class="form-table">
                
                <tbody>
                    <tr>
                    <th scope="row"><label for="blogname">Show social buttons</label></th>
                    <td><input type="checkbox" name="ytlight_lightbox_socials" value="1" <?php checked($ytlight_socials , 1 ); ?> /></td>
                </tr>
                                                	        
	        </tbody>
            </table>
            
            
        </td>
    </tr>
    <tr>
        <td>
            <?php submit_button(); ?>
        </td>
    </tr>

</table>
