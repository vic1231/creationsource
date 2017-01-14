<?php
 
//if(isset($_POST['user']) && isset($_POST['pass']))
//{
      // $user = $_POST['user'];
      // $pass = $_POST['pass'];
       
        //echo $user . ' : ' . $pass;
        $ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "http://192.168.1.250/cgi-bin/snapshot.cgi?%20[channel=0]");
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);

 //}
?>