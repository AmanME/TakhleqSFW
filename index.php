<?php
require_once('src/inc/globals.inc');


?>




 
<html>
        <head> 
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="src/css/lgn.css" type="text/css">

            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="/resources/demos/style.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

              <script>
                    $( function() {
                        $( "#dialog" ).dialog({
                        autoOpen: false,
                        
                        show: {
                            effect: "blind",
                            duration: 1000
                        },
                        hide: {
                            effect: "blind",
                            duration: 1000
                        }
                        });
                    
                        $( "#opener" ).on( "click", function() {
                        $( "#dialog" ).dialog( "open" );
                        });
                    } );
              </script>

        </head>
        <body>
    
        <div class="header">
        <a href="#default" class="logo"><img src="images/img/logopng.png"/></a>
        <div class="header-right">
            
            <a class="active tooltip" href="#home"> <span class="tooltiptext"><p>version <?=$g['product_version']?> is development eddition of firewall,</p><p> no copy or distribution is allowed of this software at this stage.</p><p>Project start date is 24th Oct 2018, please contact aman@takhleq.tech for more information.</p></span>version:<?=$g['product_version']?></a>
            
            <a id="opener" >About </a>
            <div id="dialog" title="About Takhleq-SFW" >
            <p class="dialogb" >Takhleq's SFW ~ Smart FireWall is based on minimal Linux. </br> </br><b>Primary objective </b>of this system is to play its role as an inexpensive tool to detect and prevent intrusion and provide secure VPN capability by implementing openvpn+openssl. </p>
            </div>s
            
        </div>
        </div>
          
                <form class="login" method="post">
                        <h1 class="login-title"><?=$g['product_name']?></h1>
                        <input type="text" class="login-input" id="name" placeholder="Email Adress" autofocus>
                        <input type="password" class="login-input" placeholder="Password">
                        <input type="submit" value="login" class="login-button">
                        <p class="login-lost"><a href="">Forgot Password?</a></p>
                </form>

                <div class="footer">
                <p >&copy Takhleq business solutions <?=$g['product_copyright_years']?> ~ info@takhleq.tech  </p>
                </div>
                
            <body>
    </html>   