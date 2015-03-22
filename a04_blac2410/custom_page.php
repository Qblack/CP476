<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/22/2015
 * Time: 3:31 PM
 */


require_once('cgi-bin/login.php');

?>

<div class="container">
    <div class="jumbotron">
        <p>Welcome <?php echo $first_name." ".$last_name?>.</p>
        <p>Here is your resume.</p>
    </div>
</div>


<?php

if($email=="blac2410@mylaurier.ca"){
    include_once("mydoc.html");
}else{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="static/css/darkly.css" rel="stylesheet">
    <link href="static/css/styles.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="row" id="Name">
        <div class="col-md-12 col-xs-12" style="text-align: center">
            <h1><?php echo $first_name." ".$last_name?></h1>
        </div>
    </div>

    <div class="row" id="Personal Information" style="text-align: center;">
        <div class="col-md-12">
            <?php echo $email ?>
        </div>
    </div>
    <div id="lipsum">
<p>
Skills
<ul>
<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
<li>Phasellus vel est et odio elementum ornare lacinia non odio.</li>
</ul>
<p>
Work Experience
<ul>
<li>Nulla suscipit ante efficitur nunc lobortis, quis accumsan urna tempus.</li>
<li>Quisque accumsan enim nec quam interdum finibus.</li>
<li>Sed pretium neque eget ex accumsan scelerisque.</li>
<li>Donec quis ipsum interdum ante pulvinar placerat.</li>
<li>Aliquam auctor risus ac faucibus tincidunt.</li>
</ul>
<p>
Volunteer Experience
<ul>
<li>Donec quis eros eget libero tincidunt pellentesque sit amet sit amet felis.</li>
<li>Sed id turpis dapibus tortor ultricies ornare.</li>
<li>Vivamus at mauris vitae turpis auctor pulvinar id at lacus.</li>
<li>Vestibulum nec ex viverra, dignissim mauris vitae, ornare leo.</li>
<li>Curabitur gravida sem vel metus tempus feugiat.</li>
</ul>
<p>

</p></div>

</body>
</html>

<?php } ?>