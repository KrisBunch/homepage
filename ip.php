<?php
    $string = "$_SERVER[REMOTE_ADDR]";
    $r = $_GET['r'];
    $g = $_GET['g'];
    $b = $_GET['b'];
    $font_size = 6;
    $width  = imagefontwidth($font_size) * strlen($string);
    $height = imagefontheight($font_size);
    $img = imagecreate($width,$height);
    $bg = imagecolorallocate($img, 42, 48, 18);    #2A3012
    #$fg = imagecolorallocate($img, 123, 135, 77); #7B874D
    $fg = imagecolorallocate($img, $r, $g, $b); #7B874D
    $len = strlen($string);
    $ypos = 0;
    for ($i=0; $i < $len; $i++) {
        # Position of the character horizontally
        $xpos = $i * imagefontwidth($font_size);
        # Draw character
        imagechar($img, $font_size, $xpos, $ypos, $string, $fg);
        # Remove character from string
        $string = substr($string, 1);   
    }
    header("Content-Type: image/gif");
    imagegif($img);
    imagedestroy($img);
?>
