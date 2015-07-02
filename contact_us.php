<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mtwara Islamic Secondary School | About School</title>
        <link rel="stylesheet" type="text/css" href="./css/styleLargeScreen.css"/>
        <link rel="stylesheet" type="text/css" href="./css/styleSmallScreen.css" media=""/>
    </head>
    <body>
        <!-- it works the same with all jquery version from 1.x to 2.x -->
        <script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
        <!-- use jssor.slider.mini.js (40KB) instead for release -->
        <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
        <script type="text/javascript" src="./js/jssor.js"></script>
        <script type="text/javascript" src="./js/jssor.slider.js"></script>
        <div class="main-wrapper">
            <?php include './includes/banner.php'; ?>
            <?php include './includes/navigation.php'; ?>
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
            <div class="main-content_wrapper">
                <div>
                    <h3 class="page_headings">Contacts</h3>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1032.0529573284573!2d40.1886355!3d-10.3010789!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1434548377526" width="637" height="300" frameborder="0" style="border:0"></iframe>  
                    </div>

                    <div class="address">
                        <h3>Address</h3>
                        <p>Mmingano Street,</p>
                        <p>Mtwara Munnicipal,</p>
                        <p>Tanzania.</p>
                    </div>
                    <div class="phone">
                        <h3>Phone</h3>
                        <p>Head Master: 89800990990</p>
                        <p>Academic Master: 89800990990</p>
                    </div>
                    <div class="email">
                        <h3>Email</h3>
                        <p>headmaster@mtis.ac.tz</p>
                    </div>
                    <div class="separator"></div>

                    <form class="contact_us" method="post" action="">
                        <table>
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
            <div class="separator"></div>

            <footer>

                <p> &COPY; Mtwara Islamic Secondary School. All rights reserved.</p>
            </footer>
            <div class="separator"></div>

        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js_native"></script>
    </body>
</html>