<?php

$captcha;
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
           header("Location:http://dogeponny.tumblr.com/error"); 
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le7ugwTAAAAAMmCwkYFdNw0FlkCLMqih5m-sGAb&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
           header("Location:http://dogeponny.tumblr.com/error"); 
        }else
        {

      

$address = $_POST['hit'];

if (empty($address)) {
  
 header("Location:http://dogeponny.tumblr.com/error"); 
  die();
}





$url = 'https://block.io/api/v2/withdraw/?api_key=<API_KEY>&amounts=2&to_addresses='.$address.'&pin=<PASSWORD>';

$chain = file_get_contents($url);
echo $chain;
   if (strpos($chain,'invalid') !== false) {
   header("Location:http://dogeponny.tumblr.com/error"); 
    die();
    }


 { 			

header("Location:http://dogeponny.tumblr.com/success"); 


 			} 
  }
?>
