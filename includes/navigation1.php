<div class="separator"></div>
<nav class="navigation">
    <?php
    $index = 'myButton';
    $about = 'myButton';
    $contact = 'myButton';
    $menuLinkId = basename($_SERVER['PHP_SELF'], ".php");
    if ($menuLinkId == 'index')
        $index = 'myActiveButton';
    elseif ($menuLinkId == 'about')
        $about = 'myActiveButton';
    elseif ($menuLinkId == 'contact_us')
        $contact = 'myActiveButton';
        ?>
    <ul id="menu">
        <li><a  href="index.php">Home</a></li>
        <li><a  href="about.php">About Us</a></li>
        <li><a  href="contact_us.php"><span>Contact Us</span></a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    <ul id="menu-large">
        <li><a class="<?php echo $index; ?>" href="index.php">Home</a></li>
        <li><a class="<?php echo $about; ?>" href="about.php">About Us</a></li>
        <li><a class="<?php echo $contact; ?>" href="contact_us.php"><span>Contact Us</span></a></li>
    </ul>
</nav>
<div>
    <h3  class="smallTitle" style="text-align: center">MTWARA ISLAMIC SECONDARY SCHOOL</h3>
</div>