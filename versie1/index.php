<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
          function writeJson($objson, $fileOutput){
          $saveJson = json_encode($objson);
          $file = fopen($fileOutput, "w") or die ("can't open file");
          fwrite($file, $saveJson);
          fclose($file);
      }

    	$file ='test.json';
      if(file_exists($file)){
        $filedata = file_get_contents($file);

        $objson = json_decode($filedata,true);
        echo "<hr><code><pre>";
        print_r($objson);
        echo"</pre></code></hr>";
      }
      else echo $file .'not exists ';
/*
      echo($objson['yu-gi-oh decks']['nordic']['ace monster']);
      echo("<br>");
      echo($objson['yu-gi-oh decks']['nordic']['extra deck summoning type']);

      echo("<br>");


      echo($objson['yu-gi-oh decks']['phantom knights']['ace monster']);
      echo("<br>");
      echo($objson['yu-gi-oh decks']['phantom knights']['extra deck summoning type']);

      echo("<br>");


      echo($objson['yu-gi-oh decks']['destiny hero']['ace monster']);
      echo("<br>");
      echo($objson['yu-gi-oh decks']['destiny hero']['extra deck summoning type']);*/
$objson['yu-gi-oh decks']['destiny hero']['ace monster']=" MaxV";
$objson['yu-gi-oh decks']['destiny hero']['extra deck summoning type']="KevinC";
echo "<hr><code><pre>";
print_r($objson);
echo"</pre></code></hr>";

 $fileOutput="test.json";
writeJson($objson, $fileOutput);
    ?>
  </body>
</html>
