<?php

 $allColors = array(
  '0' => array(
  "id"=> "1",
  "family"=> "blue",
  "name"=> "ariel blue",
  "hex"=> "#339FFF"),

  '1' => array(
  "id"=> "2",
  "family"=> "yellow",
  "name"=> "canary",
  "hex"=> "#FAFF33"),

  '2' => array(
    "id"=> "3",
    "family"=> "blue",
    "name"=> "sky blue",
    "hex"=> "#33C7FF"),
    
  '2' => array(
    "id"=> "3",
    "family"=> "blue",
    "name"=> "sky blue",
    "hex"=> "#33C7FF"),  

); 

// print_r($allColors);
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
  p { margin: 0; }
  </style>
 
  <body> 

  <table>
   <?php foreach($allColors as $key => $value): ?>
   <tr>
       <td><?php //echo '<p>'.$value["family"]. '</p>'; ?></td>
   </tr>
   <?php endforeach; ?>
  </table>

  
  <div id="blueFamily" style="border: 2px solid blue; padding: 0.5rem;">
    
    <div id="familyTitle">
      <p style="padding-left: 1rem;font-weight: bold;"><?php echo $value["family"]?></p> 
    </div>

    <div id="familyColors" style="min-height: 300px;padding:0.5rem;">
      <div class="mediaObject" style="padding: 0.2rem;margin-top: 1rem;height: 100px;width: 80px;border: 1px solid #f6f6f6;">
        <div style="background-color: <?php echo $value["hex"]?>;height: 70px;width: 70px;padding:0;margin: 0 auto;"></div>
        <p style="font-size: 12px;text-align:center;"><?php echo $value["name"]?></p>
        <p style="font-size: 10px;text-align:center;"><?php echo $value["hex"]?></p>
      </div>
    </div>

  </div>
    
  </body>
</html>
