<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <?php 
    define('PI', 2.4);
    ?>
    <h1>Raag</h1>
    <?php 
    //sinngle comments
    /* multiline
    comments
     */
    
     
    echo "My name is Raginee Gupta";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $variable1 = 40;
    $variable2 = 20;
    echo $variable1;
    echo $variable2;


    //  Arithmetic Oprators
    echo "The value of variable1 + Variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable1 - Variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of variable1 * Variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of variable1 / Variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //  Assigment Oprators
     $newVar = $variable1;
     echo "The value of new vaariable is ";
     echo $newVar;
     echo "<br>";
     $newVar1 = $variable1;
     $newVar1 +=1;
     echo "The value of new vaariable1 is ";
     echo $newVar1;
     echo "<br>";
     $newVar2 = $variable1;
     $newVar2 -=2;
     echo "The value of new vaariable2 is ";
     echo $newVar2;
     echo "<br>";
     $newVar3 = $variable1;
     $newVar3 *=3;
     echo "The value of new vaariable3 is ";
     echo $newVar3;
     echo "<br>";
     $newVar4 = $variable1;
     $newVar4 /=4;
     echo "The value of new vaariable4 is ";
     echo $newVar4;
     echo "<br>";
     echo "<br>";
     echo "<br>";

    //  Comparison Oprators
      echo "The value of 1==4 is ";
      echo var_dump(1==4);
      echo "<br>";
      echo "The value of 1!=4 is ";
      echo var_dump(1!=4);
      echo "<br>";
      echo "The value of 1>=4 is ";
      echo var_dump(1>=4);
      echo "<br>";
      echo "The value of 1<=4 is ";
      echo var_dump(1<=4);
      echo "<br>";
      echo "<br>";
      echo "<br>";
    //  Increment/Decrement Oprators
    echo "<h5> variable++ of </h5>";
       echo $variable1++;
       echo "<br>";
       echo $variable1;
       echo "<br>";
       echo "<br>";
       echo "<h5> variable-- of </h5>";
       echo $variable1--;
       echo "<br>";
       echo $variable1;
       echo "<br>";
       echo "<br>";
       echo "<h5> ++variable of </h5>";
       echo ++$variable1;
       echo "<br>";
       echo $variable1;
       echo "<br>";
       echo "<br>";
       echo "<h5> --variable of </h5>";
       echo --$variable1;
       echo "<br>";
       echo $variable1;
       echo "<br>";
       echo "<br>";
       

    //  Logical Oprators
        //  and (&&)
        echo "<p>and logic</p>";
        $myVar = (true) and (true);
        echo var_dump($myVar);
        echo " <br> ";
        $myVar1 = (false && true);
        echo var_dump($myVar1);
        echo " <br> ";
        //  or (||)
        echo "<p>or logic</p>";
        $myVar2 = (true) || (true);
        echo var_dump($myVar2);
        echo " <br> ";
        $myVar3 = (false or true);
        echo var_dump($myVar3);
        echo " <br> ";
        //  xor 
        echo "<p>xor logic</p>";
        $myVar4 = (true xor true);
        echo var_dump($myVar4);
        echo " <br> ";
        $myVar5 = (false xor true);
        echo var_dump($myVar5);
        echo " <br> ";
        echo " <br> ";
        echo " <br> ";
        //  not (!)
        

    ?>

    <?php
    // Data Types in PHP

    // 1. String
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";
    // 2. Integer
    $var = 24;
    echo var_dump($var);
    echo "<br>";
    $var = 2.4;
    echo var_dump($var);
    echo "<br>";
    // 3. Boolean
    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo "<br>";
    // 5. Array
    // 6. <Object></Object>
    ?>
    <?php
    echo PI;
    ?>

    

</body>
</html>