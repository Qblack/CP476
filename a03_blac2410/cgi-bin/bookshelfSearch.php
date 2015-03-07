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

function filter_books($title, $author){
    $xmldoc = simplexml_load_file("mybookshelf.xml");
    $xsldoc = simplexml_load_file("static/xsl/bookshelf.xsl");
    $proc = new XSLTProcessor();
    $proc->registerPHPFunctions();
    $proc->importStyleSheet($xsldoc);

    $bookshelf = '<?xml version="1.0" encoding="UTF-8" standalone="no" ?>
<?xml-stylesheet type = "text/xsl"  href = "static/xsl/bookshelf.xsl" ?>';

    $bookshelf .= "<bookshelf>";
    foreach ($xmldoc->book as $book) {
        if ($book->title == $title || $book->author == $author) {
            $bookshelf.=$book->asXML();
        }
    }
    $bookshelf.="</bookshelf>";
    $xml_bookshelf = simplexml_load_string($bookshelf);
    printf($proc->transformToXml($xml_bookshelf));

}

