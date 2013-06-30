<?php


/*
Plugin Name: Wp Attachment Rename
Plugin URI: https://github.com/oritromax/wp-attachment-rename/
Description: This is A simple Plugin to Change the Name of Uploaded Wordpress Attachments. 
Version: 0.0.1
Author: Oritro Ahmed
Author URI: http://facebook.com/theoritro
*/


/* 
The How to: 

1. Check the line no , A veriable Called $file is there, Which will Determine the new name of the file. 
2. Just Change the 'Yourblogname_' part with whatever you want. keep the '' site intact. 
3. Don't change anything else if you are not sure what you are doing. 
4. To modify this plugin, A bit of PHP and Wordpress Function Knowledge is a must. 
5. The Default Method will generate A Renamed file like: Yourblogname_51cf9b31ce124_boycut.jpg
6. Each file will be Delivered a Unique ID, So You don't have to see a Same File named changed like this : boycut (2).jpg
7. GUI is Comming :D 
 */
function wpattachmentrename($filename) {
    $info = pathinfo($filename);
    $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
    $name = basename($filename, $ext);
  $file = 'Yourblogname_'.uniqid().'_'.$name.$ext;
    return  $file;
}
add_filter('sanitize_file_name', 'wpattachmentrename', 10);

?>
