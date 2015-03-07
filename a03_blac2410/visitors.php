<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Visitors</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.1/darkly/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/styles.css" rel="stylesheet">
    <?php
        require_once("cgi-bin/IPstorage.php");
    ?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class ="col-md-10 col-md-offset-1">
            <div class="jumbotron"><h1>Visitors of my index.php</h1></div>
        </div>
    </div>
    <div class="row">
        <div class ="col-md-10 col-md-offset-1">
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th>IP</th>
                        <th>Frequency</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $visitors = get_visitors();
                foreach($visitors as $row){
                    printf("<tr>");
                    foreach($row as $cell){
                        printf("<td>%s</td>",$cell);
                    }
                    printf("</tr>");
                }
                ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?php include_once('footer.php')?>
</body>
</html>