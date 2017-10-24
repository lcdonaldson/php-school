<?php

$allColors = array(
 '0' => array(
 "id"=> "1",
 "family"=> "blue",
 "name"=> "ariel blue",
 "hex"=> "#339FFF "),

'3' => array(
 "id"=> "3",
 "family"=> "green",
 "name"=> "forest",
 "hex"=> "#FAFF33 "),

'1' => array(
 "id"=> "2",
 "family"=> "blue",
 "name"=> "aqua marine",
 "hex"=> "#339FFF "),

'4' => array(
 "id"=> "4",
 "family"=> "green",
 "name"=> "lime",
 "hex"=> "#FAFF33 "),

'2' => array(
 "id"=> "5",
 "family"=> "blue",
 "name"=> "teal",
 "hex"=> "#339FFF "),

'5' => array(
 "id"=> "6",
 "family"=> "green",
 "name"=> "yellow-green",
 "hex"=> "#FAFF33 ")
); 

array_multisort( array_column( $allColors, 'family') , SORT_DESC, $allColors );

$arGroupedByFamily = [];
foreach ($allColors as $color) {
   $arGroupedByFamily[$color['family']][] = $color;
}

?> 

<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <title></title>
       <link rel="stylesheet" type="text/css" href="main.css">
   </head>

   <body>
       <?php foreach ($arGroupedByFamily as $key => $family): ?>
           <div id="family-container" style="border: 1px solid <?php echo $key; ?>; background-color: $currFamily;">
               <?php foreach ($family as $color): ?>
                   <h2><?php echo $color['name'];?> <?php echo $key; ?></h2>
                   <div class="child-container" style="margin-right: 20px; width: 100px; height: 150px; border: 1px solid black; float: left;">
                       <div style="width: 100%; height: 100px; float: right; border-bottom: 1px solid black; background: <?php echo $color["hex"]; ?>;"></div>
                       <div style="width: 100%; height: 50px; float: right;">
                           <?php echo $color["name"]; ?>;
                           <?php echo $color["hex"]; ?>;
                       </div>
                   </div>
               <?php endforeach; ?>
           </div>
       <?php endforeach; ?>
   </body>
</html>
