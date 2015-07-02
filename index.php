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
            <?php include './includes/navigation.php';?>
            <div class="separator"></div>

            <div class="news">
                <div class="box-title">
                    <p>News and Events</p>
                </div>
                <div class="content-box">
                    <ul>
                        <li><a href="" >Application form</a></li>
                        <li><a href="" >Joining instruction</a></li>
                        <li><a href="" >Ongezeko la ada</a></li>
                        <li><a href="" >Ongezeko la ada</a></li>
                        <li><a href="" >Ongezeko la ada</a></li>
                        <li><a href="" >Ongezeko la ada</a></li>
                        <li style="border-bottom: none"><a href="" >Link 1</a></li>
                        
                    </ul>
                    <div class="loadMore">
                        <a href="#"> View All </a>

                    </div>   
                </div>
            </div>
            <div class="slider">
                <?php include './imageSliderContainer.php';?>
            </div>

            <div class="separator"></div>
            <div class="content1 news">
                <div class="box-title">
                    <p>School Life</p>
                </div>
                <div class="content-box">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five 
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release 
                        of Letraset sheets containing Lorem Ipsum passages,
                    </p>
                    <div class="loadMore">
                        <a href="#"> Read More </a>

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
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five 
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release 
                        of Letraset sheets containing Lorem Ipsum passages,


                    </p>
                    <div class="loadMore">
                        <a href="#"> Read More </a>
                    </div> 
                </div>
                </div>

            </div>
            <div class="content3 news">
                <div class="box-title">
                    <p>Fees</p>
                </div>
                <div class="content-box">
                 <div class="content-box">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
                        since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five 
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release 
                        of Letraset sheets containing Lorem Ipsum passages,
                    </p>
                    <div class="loadMore">
                        <a href="#"> Read More </a>

                    </div> 

                </div>
                    
                </div>
            </div>
            <div class="separator"></div>

            <div class="footer">

                <!--<p> &COPY; Mtwara Islamic Secondary School. All rights reserved.</p>-->
            </div>
            <div class="separator"></div>

        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js_native"></script>
    </body>
</html>