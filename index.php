<?php

include './function.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
  <title>PHP Strong Password Generator</title>
</head>
<body>

<div class="container">
  <h1>Password Generator</h1>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
  <button type="submit">Genera Password</button>
  
</form>


<?php 

  
  generaPassword();
  
  
?>
  </div>
</body>
</html>
  