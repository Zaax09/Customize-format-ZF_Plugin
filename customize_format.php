
<?php
/*
 * Plugin Name:       ZF_Forms
 * Description:       Building forms in WordPress can be hard. ZF_Forms makes it easy.
 * Version:           0.0.1
 * Author:            Zakaria Fichtali & Salma
 */

function customize_format(){
    // global $wpdb;
    // $sql = "SELECT option_name FROM wp_options WHERE option_value='enable'";
    // $get = $wpdb->get_results($sql);
    $full_name = get_option('full_name','disable');
      $email = get_option('email','disable');
         $phone = get_option('phone','disable');
         $adress = get_option('adress','disable');
      $subject = get_option('subject','disable');
    $message = get_option('message','disable');


    $content = '';
    $content .= '<h1>Contact US!</h1>';


 // -------------- div 0 ---------------
 $content .= '<div class="vv" 
            style="background-color: #d3e4fe;
                   height:100vh ;
                   width:100% ;
                   
   
                   
                   
                    

 ">';

 $content .= '<br>';
 // -------------- div 1 ---------------
    $content .= '<div class="cc" 
    style="background-color: #fff;
     display: block; 
    height:89vh ;
    width:60% ;
    padding: 20px;
    color: #5460f5;
    font-weight: 500;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 2px;
    margin-left:250px ;
    

    ">';

    $content .= '<form method="post" action="http://localhost/wordpress/thank-you/">';

    if($full_name == "enable"){
        $content .= '<label for="your_name"style="display: block;">Your Name</label>';
        $content .= '<input type="text" name="name" placeholder="Enter Your Name" 
        style="
        background-color: #e7e9fe;
        display: block;
        width:500px ;
        height:38px ;
        color: #5460f5;
        

        ">';
    }
    if($email == "enable"){
        $content .= '<label for="email" style="display: block;">Your Email</label>';
        $content .= '<input type="text" name="email" placeholder="Enter Your Email" style="
        color: #5460f5;
        background-color: #dce1ff;
        display: block;
        width:500px ;
        height:38px ;

        ">';
    }
    if($phone == "enable"){
        $content .= '<label for="phone"style="display: block;">Your Phone N°</label>';
        $content .= '<input type="text" name="phone" placeholder="Enter Your Phone N°" style="
        background-color: #c7cdfd;
        display: block;
        width:500px ;
        height:38px ;
        ">';
    }
    if($adress == "enable"){
        $content .= '<label for="adress"style="display: block;">Your Adress</label>';
        $content .= '<input type="text" name="adress" placeholder="Enter Your Adress" 
        style="
        background-color: #bfc6fe;
        display: block;
        width:500px ;
        height:38px ;
        ">';
    }
    if($subject == "enable"){
        $content .= '<label for="subject"style="display: block;">Your Subject</label>';
        $content .= '<input type="text" name="subject" placeholder="Enter Your Subject" style="
        background-color: #b3bcfc;
        display: block;
        width:500px ;
        height:38px ;
        ">';
    }
    if($message == "enable"){
        $content .= '<label for="message"style="display: block;">Your message</label>';
        $content .= '<textarea type="text" name="message" placeholder="Enter Your Message" 
        style="
        background-color: #a9b4fb;
        width:500px ;
        height:58px ;
        display: block;
        
        "></textarea>';
    }
    

    $content .= '<input type="submit" name="submit_button" value="Submit!" 
    style="
    width:100px ;
        height:38px ;
        background-color: #233bf5;
        margin-top: 30px;
        border-radius: 27px;
        outline:none;

        ">';

    $content .= '</form>';
    return $content;
}
add_shortcode('customize_format','customize_format');

add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'customize_format',
        'customize_format Options',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php',

        null,
        'dashicons-admin-generic',
        20
    );
}

// -------------- div 1 ---------------
$content .= '</div>';
// -------------- div 0 ---------------
$content .= '</div>';
   