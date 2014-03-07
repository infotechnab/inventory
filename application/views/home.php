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
</script>
<script type="text/javascript" src="http://smart-ip.net/geoip-json?callback=GetUserInfo"></script>
        <style>
            html
            {
                margin: 0;
                padding: 0;
            }
            body
            {
                margin: 0;
                padding: 0;
                font-family:"Whitney SSm A","Whitney SSm B","Helvetica Neue",Helvetica,Arial,sans-serif;
            }
            #topNavigationWithSlider
            {
                background: #00620C url('http://localhost/inventory/content/images/inventrogb.jpg') fixed; 
                background-repeat: no-repeat;
                width: 100%;
                height: 650px;
                border-bottom: 2px solid #fff;
                
            }
            #topNavigationDiv
            {
                margin: 0 auto 0 auto;

                height: 60px;
                background-color: #0096d6;

                color: #fff;
                position: fixed;
                width: 100%;        

            }
            #topNavigationDiv:hover
            {
                opacity: 1;
            }
            #topNavigationDiv a
            {
                color: #fff;
                text-decoration: none;
                margin-right: 20px;
                opacity: 1;
                font-weight: bold;            
            }

            .centerDiv
            {
                padding: 10px;
                margin: 0 auto 0 auto;
                width: 80%;

            }
            #topNavigation
            {
                padding: 10px;
                margin: 0 auto 0 auto;
                width: 80%;
                text-align:right;


            }
            #sliderDescriptionDiv
            {
                padding-top: 200px;
                text-align: right;
                color: #ffffff;


            }
            #sliderDescriptionDiv h1,   #sliderDescriptionDiv p
            {

            }
            #featureRibbonDiv{
                min-height: 200px; 
                background-color: #0096d6;

            }
            #featureRibbon
            {

            }
            #logoDiv
            {
                width: 10%;
                float: left;

            }
            #logoDiv img
            {
                height: 50px;
                margin: -7px;
                padding: 0;
            }
            .featureIteamDiv
            {
                width: 25%;
                float: left;
                margin-right: 20px;
                padding: 10px;
                min-width: 200px;
                color: #fff;
            }
            .clear
            {
                clear: both;
                height: 1px;
            }

            .featureDisplay
            {

                width: 80%;
                margin: 0 auto 0 auto;
                min-height: 300px;
            }
            #featueFullDiv hr
            {
                background-image: linear-gradient(to right, #FFFFFF, #DCDCDC 50%, #FFFFFF);
                background-repeat: no-repeat;
                border: 0 none;
                height: 2px;
                clear: both;
            }
            .featureImageDiv, .featureDiscriptionDiv
            {
                width: 50%; 
                float: left;
            }
            .featureDiscriptionDiv
            {
                padding-top: 150px;

            }
            #subscriptionDiv
            {
                padding:20px;
            }
            #subscriptionDiv h2, #subscriptionDiv form
            {
                width: 45%;
                float: left;
                margin: 0;
                padding: 20px;
                color: #fff;


            }
            #subscriptionDiv h2
            {
                text-align: justify;
            }
            #subscriptionDiv form{

            }
            #subscriptionDiv input
            {
                padding: 10px;
                font-weight: bold;

            }
            #email
            {
                width: 50%;
            }
            #whitePara
            {
                color: #fff;
            }

        </style>
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
                    <a href="#explore">SIGN UP</a>
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
                    <a name="notifyMePlz"/>
                    <h2> 
                        Let us notify you when we are ready to serve you with this product.
                    </h2>
                    
                    <?php
                    if (!isset($notifyMeMessage)) {                       
                   
                    ?>
                    <?php echo form_open('/defaultview/notifyme/#notifyMePlz') ?>
                    
                    <input type="hidden" id="lblIP" name="ip" />
                    <input type="hidden" id="lblCountry" name="country" />
                    <input type="hidden" id="lblCity" name="city"/>
                    <input type="hidden" id="lbllatitude" name="latitude"/>
                    <input type="hidden" id="lbllongitude" name="longitude"/>
                    <input type="hidden" name="browser" value="<?php echo $browser; ?>" />
                    <input type="hidden" name="os" value="<?php echo $os; ?>" />
                    
                    <input id="email" type="email" name="subscription"  placeholder="Email Address" required/>
                    <input type="submit" value="Notify Me">
                    <?php }
                    else
                    {
                        ?>
                    <h2 id="whitePara"><?php echo $notifyMeMessage;?> </h2>
                        <?php 
                    }
                    ?>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>