<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quinton Black</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.1/darkly/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/styles.css" rel="stylesheet">
    <?php
    require_once("cgi-bin/bookshelfSearch.php");
    ?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class ="col-md-12">
            <div class="jumbotron"><h1>Search My Bookshelf</h1></div>
        </div>
    </div>
    <div class="row">
        <div class ="col-md-12">
            <form class="form form-inline pull-right" method="post" action="bookshelf.php">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input class="form-control" type="text" id="author" name="author">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default" aria-label="Search">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $title = $_POST['title'];
                    $author = $_POST['author'];
                    if(empty($title)&&empty($author)){
                        get_books();
                    }else{
                        filter_books($title,$author);
                    }
                }else{
                    get_books();
                }
            ?>
        </div>
    </div>



</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?php include_once('footer.php')?>
</body>
</html>
