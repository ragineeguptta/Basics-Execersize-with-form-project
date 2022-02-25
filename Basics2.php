<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style> 
    *{
        margin:0;
        padding:0;
        text-align:center;
    }
  .container {
      max-width :100%;
      background-color: skyblue;
      height: 200px;
      margin:auto;
  }
    </style>
</head>
<body>
    <div class="container">
        <h1>More about PHP</h1>
        <br>
        <?php
        $age = 78;
        if($age>18 && $age<77){
            echo "You can go to the party";
        }
        elseif($age==7) {
             echo "You are 7 years old";
        }
        elseif($age>77) {
             echo "You are too old";
        }
        else{
            echo "You can not go to the party";
        }
        echo "<br> <br>";
        //Array in PHP
        $languages = array("Python", "C++", "php","ASP.Net Core");
        echo $languages[3] ;
        echo "<br>";
        echo count($languages);
        echo "<br>";


        //loops on PHP
        $a = 0;
        while ($a <= 10) {
            echo "The value of a is ";
            echo $a;
            echo "<br>";
            $a++;
        }
         
        //Iterating arrays in php using while loops 
        $a = 0;
        while ($a < count($languages)) {
            echo "The value of languages is ";
            echo $languages[$a];
            echo "<br>";
            $a++;
        }
         
        // do while loops 
        $a = 0;
        do  {
            echo "The value of languages is ";
            echo $languages[$a];
            echo "<br>";
            $a++;
        } while ($a < count($languages));

        $a = 20;
        do  {
            echo "The value of a is ";
            echo $a;
            echo "<br>";
            $a++;
        } while ($a <= 25);

         // For loop
         for ($a=0; $a <= 10; $a++) { 
            echo "<br> The value of a  from the for lop is ";
            echo $a;
         }
         echo "<br>";
         echo "<br>";

         // foreach loop
         foreach ($languages as $value) {
             echo "The value is from foreach is ";
             echo $value;
             echo "<br>";
         }
        ?>
    </div>
</body>
</html>