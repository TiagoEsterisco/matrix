<?php
   $xml = ("http://rss.cnn.com/rss/cnn_topstories.rss");
   $xmlDoc = new DOMDocument();
   $xmlDoc->load($xml);

   $items = $xmlDoc->getElementsByTagName('item');

    foreach ($items as $item) {

        $item_link = $item->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
        $item_title = $item->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
        $item_desc = $item->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;
        $itemArray[] = array('link' => $item_link, 'title' => $item_title, 'desc' => $item_desc);
    }

   echo json_encode($itemArray);
?>