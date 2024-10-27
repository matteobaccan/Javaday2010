<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/it_IT" type="text/javascript"></script>
<script type="text/javascript">FB.init("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");</script>


<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved.
//
// Application: Baccan.it
// File: 'index.php'
//   This is a sample skeleton for your application.
//

require_once 'facebook.php';

$appapikey = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$appsecret = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Parametri di accesso

// Greet the currently logged-in user!
echo "<p>Ciao, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";

echo "<p>Ecco 5 tuoi amici:";
$friends = $facebook->api_client->friends_get();
$friends = array_slice($friends, 0, 5);
foreach ($friends as $friend) {
  echo 'UID: ' .$friend .' <fb:profile-pic uid="' .$friend .'" size="square" facebook-logo="true"></fb:profile-pic> - ';
}
echo "</p>";

echo "<br>";
echo "<br>apikey: $appapikey";
echo "<br>appsec: $appsecret";
echo "<br>session key: " .$_POST["fb_sig_session_key"];

?>

<fb:comments xid="commento_di_test" canpost="true" candelete="false">
  <fb:title>Parlami di te</fb:title>
</fb:comments>

<fb:board xid="board_di_test"
    canpost="true"
    candelete="false"
    canmark="false"
    cancreatetopic="true"
    numtopics="5"
    returnurl="http://apps.facebook.com/javaday/">
    <fb:title>Parliamo del javaday</fb:title>
</fb:board>
