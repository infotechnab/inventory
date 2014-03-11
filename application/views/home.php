<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Inventory Is Easy
        </title>
         <script type="text/javascript" src="<?php echo base_url(); ?>content/jquery-1.9.1.min.js"> </script>
         <link rel="stylesheet" media="screen" href="<?php echo base_url(); ?>content/css/style.css" type="text/css" />
         <script src="http://code.jquery.com/jquery-1.8.2.js" type="text/javascript"></script>
        <script type="text/javascript">
          
            
var strip, strcountry, strcity, strregion, strlatitude, strlongitude, strtimezone
function GetUserInfo(data) {
strip = data.host; strcountry = data.countryName; strcity = data.city;
strregion = data.region; strlatitude = data.latitude; strlongitude = data.longitude;
strtimezone = data.timezone;
}
$(function () {
BindUserInfo();
})
function BindUserInfo() { 

document.getElementById('lblIP').value = strip;
document.getElementById('lblCountry').value = strcountry;
document.getElementById('lblCity').value = strcity;

document.getElementById('lbllatitude').value = strlatitude;
document.getElementById('lbllongitude').value = strlongitude;
//document.getElementById('lbltimezone').value = strtimezone;
}


//=============================check email valid or not ====================================//
$(document).ready(function() {
 
//    $('#notifyButton').click(function() { 
//        var emailaddressVal = $("#notifyEmail").val();
//       checkEmail(emailaddressVal);
//}); 
//
//    $('#signupButton').click(function() { 
//        var emailaddressVal = $("#signupEmail").val();
//       checkEmail(emailaddressVal);
//});
//$('#loginButton').click(function() { 
//        var emailaddressVal = $("#loginEmail").val();
//       checkEmail(emailaddressVal);
//});
$('#loginLink').click(function(){
   $('#featueFullDiv').css('opacity','.5');
    $(".loginDiv").css({
        position: "fixed",
        top:"25%",
        left:"35%"
    }).show();
});

$('#signup_link').click(function(){
   $('#featueFullDiv').css('opacity','.5');
    $(".signupDiv ").css({
        position: "fixed",
        top:"25%",
        left:"35%"
    }).show();
});

    $('.closeLink').click(function(){
       $('.loginDiv').css('display','none');
       $('.signupDiv').css('display','none');
       $('#featueFullDiv').css('opacity','1');
    });

});

function checkEmail(emailaddressVal){
     var Error = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 
        
        if(emailaddressVal == '') {
            alert('email address can not be blank!');
            Error = true;
            return false;
        }
 
        else if(!emailReg.test(emailaddressVal)) {
            alert('Pleae type a correct email address');
            Error = true;
            return false;
        }
 
       
 
    }

</script>
<script type="text/javascript" src="http://smart-ip.net/geoip-json?callback=GetUserInfo"></script>
     
    </head>
    <body>
        <?php 

//echo $_SERVER['HTTP_USER_AGENT'];
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/MSIE/i', $user_agent)) { $browser = "Internet Explorer";}
    elseif (preg_match('/Firefox/i', $user_agent)){$browser = "Mozilla Firefox";}
    elseif (preg_match('/Chrome/i', $user_agent)){$browser = "Google Chrome";}
    elseif (preg_match('/Safari/i', $user_agent)){$browser = "Safari";}
    elseif (preg_match('/Opera/i', $user_agent)){$browser = "Opera";}
    else {$browser = "Other";}
    
    
    if (preg_match('/windows nt 6.2/i', $user_agent)) { $os = "Windows 8";}
    elseif (preg_match('/windows nt 6.1/i', $user_agent)){$os = "Winsows 7";}
    elseif (preg_match('/windows nt 5.1/i', $user_agent)){$os = "Windows xp";}
    elseif (preg_match('/linux/i', $user_agent)){$os = "Linux";}
    elseif (preg_match('/iphone/i', $user_agent)){$os = "iphone";}
    elseif (preg_match('/ipad/i', $user_agent)){$os = "ipad";}
    elseif (preg_match('/android/i', $user_agent)){$os = "anroid";}
    elseif (preg_match('/webos/i', $user_agent)){$os = "mobile";}
    else {$os = "Other";}
    
 ?> 
        <div id="topNavigationWithSlider">
          <div id="topNavigationDiv">

                <div id="topNavigation">
                    <div id="logoDiv">
                        <img src="<?php echo base_url() . "content/images/logo.png"; ?>"/>

                    </div>
                    <a href="#">HOME</a>
                    <a href="#explore">EXPLORE</a>
                    <a id="signup_link" href="#explore">SIGN UP</a>
                    <a id="loginLink" href="#explore">LOGIN</a>
                </div>


            </div>
            <div class="centerDiv" id="sliderDescriptionDiv">
                <h1>Inventory is your physical wealth.</h1>
                <p>Manage you physical wealth to keep record and investment on the right choice.</p>
            </div>
        </div>
        <div id="featureRibbonDiv">
            <div class="centerDiv" id="featureRibbon">
                <div class="featureIteamDiv">
                    <h3>Collaborative</h3>
                    <p>Now you can have collaborative work on your stock to keep upto date.</p>
                </div>

                <div class="featureIteamDiv">
                    <h3>Quick Access</h3>
                    <p>You can access your inventory from anywhere and anytime.</p>
                </div>

                <div class="featureIteamDiv">
                    <h3>Compatible</h3>
                    <p>No worry about hardware and software. Just care about the business.</p>
                </div>

            </div>
            <div class="clear"></div>
        </div>
        <div id="featueFullDiv">
            <a name="explore"></a> 
            <div class="featureDisplay" id="feature1">
                <div class="featureImageDiv">
                    <img src="<?php echo base_url() . "content/images/uptodate.png"; ?>"/>
                </div>
                <div class="featureDiscriptionDiv">
                    <h1>Be Upto date.</h1>
                    <p>Keep record of your all stuff so that you get the right information about how much inventory is on your hand.</p>
                </div>

            </div> 
            <hr>

            <div class="featureDisplay" id="feature2">
                <div class="featureDiscriptionDiv">
                    <h1>Billing </h1>
                    <p>Billing is just right click away for your transaction.</p>
                </div>
                <div class="featureImageDiv">
                    <img src="<?php echo base_url() . "content/images/billing.png"; ?>"/>
                </div>
            </div> 
            <hr>

            <div class="featureDisplay" id="feature3">
                <div class="featureImageDiv">
                    <img src="<?php echo base_url() . "content/images/access.png"; ?>"/>
                </div>               
                <div class="featureDiscriptionDiv">
                    <h1>Accessibility</h1>
                    <p>Access your data from anywhere at anytime. Your inventory is where ever you are.</p>
                </div>

            </div> 
            <hr>
            <div class="featureDisplay" id="feature4">
                <div class="featureDiscriptionDiv">
                    <h1>Report</h1>
                    <p>Your daily transaction will not only business it will be your decision for right choice for next day with personalized report.</p>
                </div>
                <div class="featureImageDiv">
                    <img src="<?php echo base_url() . "content/images/report.png"; ?>"/>
                </div>
            </div> 
            <hr>
            <div class="clear"></div>
        </div>
        <div id="featureRibbonDiv">
            <div class="centerDiv" id="featureRibbon">
                <div id="subscriptionDiv">
                    <a name="notifyMePlz"> </a>
                    <h2> 
                        Let us notify you when we are ready to serve you with this product.
                    </h2>
                    
                    <?php
                    if (!isset($notifyMeMessage)) {                       
                   
                    ?>
                    <?php echo form_open('/defaultview/notifyme/#notifyMePlz');   ?>
                    
                    <input type="hidden" id="lblIP" name="ip" />
                    <input type="hidden" id="lblCountry" name="country" />
                    <input type="hidden" id="lblCity" name="city"/>
                    <input type="hidden" id="lbllatitude" name="latitude"/>
                    <input type="hidden" id="lbllongitude" name="longitude"/>
                    <input type="hidden" name="browser" value="<?php echo $browser; ?>" />
                    <input type="hidden" name="os" value="<?php echo $os; ?>" />
                    
                    <input id="notifyEmail" type="email" name="subscription"  placeholder="Email Address" required/>
                    <input type="submit" value="Notify Me" id="notifyButton"/>
                    <?php }
                    else
                    {
                        ?>
                    <h2 id="whitePara"><?php echo $notifyMeMessage;?> </h2>
                        <?php 
                    }
                    ?>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footerDiv">
        <div class="mapDiv">
            <label class="siteLable"> Site Map </label>
            <a class="siteMap" href="#"> HOME </a>
            <a class="siteMap" href="#"> PAGE </a>
        </div>
        
        <div class="mapDiv">
            <label class="siteLable"> Social Share </label>
            <a class="siteMap" href="#"> HOME </a>
            <a class="siteMap" href="#"> PAGE </a>
        </div>
        
        <div class="mapDiv">
            <label class="siteLable"> Quick Contact </label>
            <a class="siteMap" href="#"> HOME </a>
            <a class="siteMap" href="#"> PAGE </a>
        </div>
        
        <div class="mapDiv">
            <label class="siteLable"> Useful Link </label>
            <a class="siteMap" href="#"> HOME </a>
            <a class="siteMap" href="#"> PAGE </a>
        </div>
    </div>
         <div class="clear"></div>
        <div class="visitorLink">
        <!-- hitwebcounter Code START -->
<a  href="http://salyani.com.np/" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=5295345&style=0030&nbdigits=5&type=ip&initCount=0" title="Visitors Counter" Alt="Visitors Counter"   border="0" >
</a><br/>
        </div>

        
        <!-- ======================== FOR Sign Up ============================== -->
        <div class="signupDiv" style="display: none">
            <a href="#" class="closeLink" >Close</a>
            <div class="signupHeading"> <h2>Sign Up</h2></div>
            <div class="singupFormDiv"> 
                <?php //$emailcheck = array('onsubmit' => "checkEmail()"); ?>
                <?php echo form_open('/defaultview/add_user'); ?>
               
                    <input type="text" name="signupFname" placeholder="first name" size="40" class="signText" />
                    <input type="text" name="signupLname" placeholder="last name" size="40" class="signText"/> 
                   
                    <input type="email" name="signup_email" placeholder="email" id="signupEmail" size="40" class="signText"/>
                    <input type="password" name="signup_password" placeholder="password" id="signupPassword" size="40" class="signText"/>
                    <input type="submit" value="Sign Up" id="signupButton" class="button_class"/>
               <?php echo form_close(); ?>     
               </div>
        </div>
        
        <!--========================= Login Div =============================== -->
        <div class="loginDiv" style="display: none">
            <a href="#" class="closeLink" >Close</a>
            <div class="loginHeading"> <h2>Login To Your Account</h2>   </div>
            <div class="loginFormDiv">
                <p id="sucessmsg">
<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}
    echo validation_errors(); ?> </p>
               
                <?php echo form_open('/defaultview/validate_credentials'); ?>
                
               <input type="email" name="login_email" placeholder="email" id="loginEmail" size="41" class="signText"/>
                    <input type="password" name="login_password" placeholder="password" id="signupPassword" size="41" class="signText"/>
                    <input type="submit" value="Login" id="loginButton" class="button_class"/>
                   
               <?php echo form_close(); ?> 
            </div>
            <?php if(isset($msg)){
                echo $msg;
            } ?>
        </div>
        
      
        
        
 
    </body>
</html>