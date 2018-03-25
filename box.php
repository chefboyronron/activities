<?php

echo "<p>Create a function that output a box, that depends on the length and height.</p>";
echo "<p>using PHP and JavaScript</p>";

function box($length = 0, $height = 0){
  $newLine = nl2br("\r\n");
  for($x = 1; $x <= $height; $x++){
    for($y = 1; $y <= $length; $y++){
      if($y == $length){
        echo "*" . $newLine;
      }else{
        if($x == 1){
          echo "*";
        }else if($x == $height){
          echo "*";
        }else{
          if($y == 1){
            echo "*";
          }else{
            echo "&nbsp;&nbsp;";
          }
        }
      }
    }
  }
}
echo "<h1>From PHP</h1>";
box(4, 3);
echo "<hr>";
box(10, 5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Box</title>
</head>
<body>
  
  <hr>
  <h1>From JavaScript</h1>
  <div id="output"></div>
  <hr>
  <div id="output2"></div>
  <script>

    function box(length, height){
      var output =  document.getElementById('output');
      var newLine = "<br>";
      for(x = 1; x <= height; x++){
        for(y = 1; y <= length; y++){
          if(y == length){
            output.innerHTML += '*' + newLine;
          }else{
            if(x == 1){
              output.innerHTML += '*';
            }else if(x == height){
              output.innerHTML += '*';
            }else{
              if(y == 1){
                output.innerHTML += '*';
              }else{
                output.innerHTML += "&nbsp;&nbsp;";
              }
            }
          }
        }
      }
    }
    box(4,3);
    box(10,5);

  </script>

</body>
</html>