
<?php


// loading the RSS file using simple xml  
 $simple_xml = simplexml_load_file ( "http://picasaweb.google.com/data/feed/base/user/107069028374380439764/albumid/6340716155566922545?alt=rss&kind=photo&hl=en_US" );
 // this loop helps to navigate through each item
 foreach ( $simple_xml->channel->item as $x ) {

 echo $x->enclosure['url'];
       $strings = explode(", ",$x->title);  
       echo $strings[0]." ".$strings[1]."<br/>" ; 
       echo "Description: ".$strings[2]."<br/>";


 } // cloing the loop
?>

