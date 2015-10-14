<?php
/**
 * Created by PhpStorm.
 * User: francismoore
 * Date: 2015-10-13
 * Time: 21:16
 */

require "GreetingsGenerator.php";
require "FrenchResourceProvider.php"

?>

<html>
 <head>
  <title>Greetings Page</title>
 </head>
 <body>
 <p>
     <?php
        $greetingsGenerator = new \PhpUnitSandbox\GreetingsGenerator(new \PhpUnitSandbox\FrenchResourceProvider());
        echo $greetingsGenerator->sayHello();
     ?>
 </p>
</body>
</html>