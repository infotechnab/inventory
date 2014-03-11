<?php header("Content-type: text/css; charset: UTF-8");
echo 'style display';?>

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
                background: #00620C url('<?php echo base_url(); ?>content/images/inventrogb.jpg') fixed; 
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
            .visitorLink{
                margin: 5px auto 5px auto;
                text-align: center;
            }
            .signupDiv, .loginDiv{
                width: 25%;
                margin: 0 auto auto auto;
                text-align: center;
            }
            .signText{
                padding: 10px;
                display: block;
                margin: 5px auto 5px auto;
            }
            .button_class{
                size: 20;
                border-radius: 5px;
                padding: 8px;
            }
</style>