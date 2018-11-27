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

      ?>
    <html>
      <form action="index.php">
        <input type="radio" name="deck" value="nordic" checked> nordic<br>
        <input type="radio" name="deck" value="phantom knights"> phantom knights<br>
        <input type="radio" name="deck" value="destiny hero"> destiny hero <br>
        <input type="text" name="ace" value=""> ace monster <br>
        <input type="submit">
      </form>
    </html>
<?php
$objson['yu-gi-oh decks'][$_GET["deck"]]['ace monster']= $_GET["ace"];

echo "<hr><code><pre>";
print_r($objson);
echo"</pre></code></hr>";

 $fileOutput="test.json";
writeJson($objson, $fileOutput);
    ?>
  </body>
</html>
