<?php
header("Location: http://192.168.1.250/cgi-bin/snapshot.cgi? [channel=0]&u=admin&p=admin"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
?>