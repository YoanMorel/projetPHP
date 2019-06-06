<?php

//$doc = new DOMDocument();
//$doc->load('source.xml');
//$htmlElements = $doc->getElementsByTagName("content");
//foreach ($htmlElements as $htmlElement) {
//    foreach($htmlElement->childNodes as $child) {
//        if ($child->nodeType == XML_CDATA_SECTION_NODE) {
//            echo $child->textContent;
//        }
//    }
//}

$xml = simplexml_load_file('source.xml');

if($_GET):
    
    array_map('htmlspecialchars', $_GET);
    extract($_GET);
    
    $page = (int) $page;
    
    echo $xml->page[$page]->content;
    
else:
    echo $xml->page[0]->content;
    
endif;

?>