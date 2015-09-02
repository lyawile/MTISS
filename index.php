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
            <div class="slider">
                <?php include './imageSliderContainer.php'; ?>
            </div>

            <div class="separator"></div>
            <div class="content1 news">
                <div class="box-title">
                    <p>School Life</p>
                </div>
                <div class="content-box">
                    <p>
                        Mtwara Islamic Secondary School is both a boarding and a day school.
                        The school has modern and well-designed hostels within the school compound
                        that offer accommodation to boarding students. The school has a conducive learning atmosphere that makes the study easier. 
                        Boarding scholars have advantages over day scholars as they have a well arranged time table...
                    </p>
                    <div class="loadMore">
                        <a href="about.php#life"> Read More </a>

                    </div> 

                </div>

            </div>
            <div class="content2  news">
                <div class="box-title">
                    <p>Subjects</p>
                </div>
                <div class="content-box">
                    <div class="content-box">
                        <p>
                            Mtwara Islamic Secondary School is an Ordinary Level education center. It has enough, qualified, well experienced and responsible teachers. 
                            Subjects offered in our school include: Arabic Language, Basic Mathematics, Biology,Book-keeping, Chemistry, Civics, Commerce, English, Geography, 
                            History, Kiswahili, Physics, Qur’an and Islamic knowledge...

                        </p>
                        <div class="loadMore">
                            <a href="about.php#subjects"> Read More </a>
                        </div> 
                    </div>
                </div>

            </div>
            <div class="content3 news">
                <div class="box-title">
                    <p>Application and Fees</p>
                </div>
                <div class="content-box">
                    <div class="content-box">
                        <p>The school fees are very cheap compared to the quality education provided. It is affordable to everyone, therefore parents 
                            let your sons and daughters get quality education in Mtwara Islamic Secondary School...

                        </p>
                        <div class="loadMore">
                            <a href="about.php#registration"> Read More </a>

                        </div> 

                    </div>

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