<?php
    if(!session_id()) {
        @session_start();   
    }
    header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate( 'D, d M Y H:i:s') . ' GMT');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache'); 

    if(isset($_SESSION['form_submitted'])) {
        unset($_SESSION['form_submitted']);
        header('Location: ?' . uniqid());
        #header('Refresh: 0');
    }

    # Set random colors
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <title>Kris Bunch</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="_css/krisbunch.css">
    </head>
    <body>
        <h1>Who is Kris Bunch?</h1>
        <div class="content">
            <img src="http://www.krisbunch.com/ip.php?r=<?php echo $r;?>&g=<?php echo $g;?>&b=<?php echo $b;?>" width="100%">
            <div class="agent">
                <p>
                    <tt>
                    <?php
                        echo $_SERVER["HTTP_USER_AGENT"];?>
                    </tt>
                </p>
            </div>
        </div>
        <p id="copyright">&copy; <?php print date('Y'); ?> - kris bunch</p>
    </body>
</html>
