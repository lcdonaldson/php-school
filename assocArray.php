<?php

$allColors = array(
 '0' => array(
 "id"=> "1",
 "family"=> "Blue",
 "name"=> "Sky Blue",
 "hex"=> "#89ccff "),

'3' => array(
 "id"=> "3",
 "family"=> "Green",
 "name"=> "Emerald",
 "hex"=> "#018910 "),

'1' => array(
 "id"=> "2",
 "family"=> "Blue",
 "name"=> "Royal Blue",
 "hex"=> "#2f62dc "),

'4' => array(
 "id"=> "4",
 "family"=> "Green",
 "name"=> "Lime",
 "hex"=> "#aef35a "),

'2' => array(
 "id"=> "5",
 "family"=> "Blue",
 "name"=> "Turquoise",
 "hex"=> "#00ffef "),

'5' => array(
 "id"=> "6",
 "family"=> "Green",
 "name"=> "Sea Foam",
 "hex"=> "#3cec97")
); 

array_multisort( array_column( $allColors, 'family'), SORT_DESC, $allColors );

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
           <div id="family-container" style="border: 2px solid <?php echo $key; ?>; background-color: $currFamily; width: 100%; display: inline-block; margin-bottom: 1rem; padding: 0.5rem;">
               <h2><?php echo $key; ?></h2>
               <?php foreach ($family as $color): ?>
                   <div class="child-container" style="margin-right: 20px; width: 100px; height: 150px; border: 1px solid black; float: left;">
                       <div style="width: 100%; height: 100px; float: right; border-bottom: 1px solid black; background: <?php echo $color["hex"]; ?>;"></div>
                       <div style="width: 100%; height: 50px; float: right; padding-top: 5px; text-align: center;">
                           <?php echo $color["name"]; ?> 
                           <br>
                           <?php echo $color["hex"]; ?>
                       </div>
                   </div>
               <?php endforeach; ?>
           </div>
           
       <?php endforeach; ?>
   </body>
</html>
