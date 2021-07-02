<?php



if (!defined('ABSPATH')) {
    exit;
}



global $fb;
global $inst;
global $git;
global $gm;

if (isset($_POST['wphw_submit'])) {
    dataUpdate();
}
function dataUpdate()
{
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $github = $_POST['github'];
    $google = $_POST['google'];

    // global $fb;
    if (get_option('facebook-icon') != trim($facebook)) {
        $fb = update_option('facebook-icon', trim($facebook));
    }
    // global $inst;
    if (get_option('instagram-icon') != trim($instagram)) {
        $inst = update_option('instagram-icon', trim($instagram));
    }
    // global $git;
    if (get_option('github-icon') != trim($github)) {
        $git = update_option('github-icon', trim($github));
    }
    // global $gm;
    if (get_option('google-icon') != trim($google)) {
        $gm = update_option('google-icon', trim($google));
    }
    
}

?>
<div class="wrap">
    <div id="icon-options-general"><br>
    </div>
    <h2>Update Footer data</h2>
    <?php if (isset($_POST['wphw_submit']) && $fb) : ?>
        <div id="message" class="updated below-h2">
            <p>Content updated successfully</p>
        </div>
    <?php endif; ?>
    <div class="metabox-holder">
        <div class="postbox">
            <h3><strong>Enter Footer links then click the save button:</strong></h3>
            <form method="post" action="" style="padding: 50px;">
                <table class="form-table">
                    <tr>
                        <th scope="row">facebook Link</th>
                        <td><input type="text" name="facebook" value="<?php echo get_option('facebook-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">instagram Link</th>

                        <td><input type="text" name="instagram" value="<?php echo get_option('instagram-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">github Link</th>

                        <td><input type="text" name="github" value="<?php echo get_option('github-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">Gmail</th>

                        <td><input type="text" name="google" value="<?php echo get_option('google-icon'); ?>" style="width:350px;"></td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td style="padding-top:10px;  padding-bottom:10px;">
                            <input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>