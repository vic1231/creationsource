<?php
 
if(isset($_POST['user']) && isset($_POST['pass']))
{
        $user = $_POST['user'];
        $pass = $_POST['pass'];
       
       header("Location: http://192.168.1.250/cgi-bin/snapshot.cgi? [channel=0]&u=admin&p=admin"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
       // echo $user . ' : ' . $pass;
}
 
?>