<doctype html>
<body>
<body?php

$name = "university of kigali";


echo "Hello, " . $name . "!<br>";


echo "The length of your name is: " . strlen($name) . "<br>";


echo "Your name in uppercase: " . strtoupper($name) . "<br>";


echo "Your name in lowercase: " . strtolower($name) . "<br>";


echo str_replace("univ", "ST", $name) . "<br>";


echo "First 4 letters: " . substr($name, 0, 4) . "<br>";
?>


  </body>
  
