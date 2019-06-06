<?php

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
