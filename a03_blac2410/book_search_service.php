<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 2/16/2015
 * Time: 12:49 PM
 */





function get_books(){
    $xmldoc = simplexml_load_file("mybookshelf.xml");
    $xsldoc = simplexml_load_file("static/xsl/bookshelf.xsl");

    $proc = new XSLTProcessor();
    $proc->registerPHPFunctions();
    $proc->importStyleSheet($xsldoc);
    $xml =  $proc->transformToXML($xmldoc);
    printf($xml);

}

function filter_books($title, $author,$file_location){

    $xmldoc = simplexml_load_file($file_location);
    header("Content-type: text/xml");


    $bookshelf = "<bookshelf>\n";
    foreach ($xmldoc->book as $book) {
        if ($book->title == $title || $book->author == $author) {
            $bookshelf.=$book->asXML()."\n";
        }
    }
    $bookshelf.="</bookshelf>";
    print($bookshelf);
}

$author = $_POST["author"];
$title = $_POST["title"];

$file_location = "mybookshelf.xml";
if(isset($_POST["file"])){
    $file_location = $_POST["file"];
}

filter_books($title,$author,$file_location);