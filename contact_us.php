<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>Mtwara Islamic Secondary School | Home</title>
        <link rel="stylesheet" type="text/css" href="./css/styleLargeScreen.css"/>
        <link rel="stylesheet" type="text/css" href="./css/styleSmallScreen.css" media="only screen and (max-width: 600px)"/>
        <!-- Mobile navigation starts here -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="./mobilenav/dist/slicknav.css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script> 
        <!-- Mobile navigation ends here -->
        <style> 
            .captionOrange, .captionBlack
            {
                color: #fff;
                font-size: 20px;
                line-height: 30px;
                text-align: center;
                border-radius: 4px;
            }
            .captionOrange
            {
                background: #EB5100;
                background-color: rgba(235, 81, 0, 0.6);
            }
            .captionBlack
            {
                font-size:16px;
                background: #000;
                background-color: rgba(0, 0, 0, 0.4);
            }
            a.captionOrange, A.captionOrange:active, A.captionOrange:visited
            {
                color: #ffffff;
                text-decoration: none;
            }
            a.captionOrange:hover
            {
                color: #eb5100;
                text-decoration: underline;
                background-color: #eeeeee;
                background-color: rgba(238, 238, 238, 0.7);
            }
            .bricon
            {
                background: url(./img/browser-icons.png);
            }
        </style>

    </head>
    <body>
        <!-- it works the same with all jquery version from 1.x to 2.x -->
        <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
        <!-- use jssor.slider.mini.js (40KB) instead for release -->
        <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
        <script type="text/javascript" src="./js/jssor.js"></script>
        <script type="text/javascript" src="./js/jssor.slider.js"></script>
        <script type="text/javascript" src="./js/imageSlider.js"></script>
        <div class="main-wrapper">
            <?php include './includes/banner.php'; ?>
            <?php include './includes/navigation1.php'; ?>
            <div class="separator"></div>
            <?php include './includes/news_events.php'; ?>
            <div class="main-content_wrapper">
                <div>
                    <h2 class="page_headings ">Contacts</h2>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1032.0529573284573!2d40.1886355!3d-10.3010789!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1434548377526" width="637" height="300" frameborder="0" style="border:0"></iframe>  
                    </div>

                    <div class="address">
                        <h3>Address</h3>
                        <p>Mmingano Street,</p>
                        <p>Mtwara Municipality,</p>
                        <p>Tanzania.</p>
                    </div>
                    <div class="phone">
                        <h3>Phone</h3>
                        <table>
                            <tr>
                                <td>Head Master:</td><td>89800990990</td>
                            </tr>
                            <tr>
                                <td>Second Master:</td><td>80800990990</td>
                            </tr>
                            <tr>
                                <td>Academic Master:</td><td>89800990990</td>
                            </tr>
                        </table>
                        
                        <p>Head Master: 89800990990</p>
                        <p>Second Master: 80800990990</p>
                        <p>Academic Master: 89800990990</p>
                    </div>
                    <div class="email">
                        <h3>Email</h3>
                        <p>headmaster@mtiss.ac.tz</p>
                    </div>
                    <div class="separator"></div>

                    <form class="contact_us" method="post" action="">
                        <table class="contact">
                            <tr><td>Full Name</td></tr>
                            <tr><td><input type="text" id="fullname" name="fullname"/></td></tr>
                            <tr><td>Email</td></tr>
                            <tr><td><input type="email" id="fullname" name="fullname"/></td></tr>
                            <tr><td>Message</td></tr>
                            <tr><td><textarea style=""></textarea></td></tr>
                            <tr><td><input type="submit" value="send email" class="button"/></td></tr>
                        </table>
                    </form>



                </div>

            </div>
            <div class="separator"></div>
            <?php include './includes/footer.php'; ?>
            <div class="separator"></div>

        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js_native"></script>
        <!-- script for navigation -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="mobilenav/dist/jquery.slicknav.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#menu').slicknav();
            });
        </script>
        <!-- script for navigation ends here -->
    </body>
</html>