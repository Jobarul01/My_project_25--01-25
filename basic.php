<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for project</title>
</head>
<body>
    <div class ="container">
     This for php..
    </div>
    <?php
    define ('pi', 3.14156);
    echo "Hello World this for php";
    echo "<br>";
    $vari1 = 5;
    $vari2 = 55;
    echo $vari1;
    echo $vari2;
    echo $vari1 + $vari2;

    // Php Oparetor
    // Arithmetic Oparetor
    echo "<br>";
    echo "The value of var1 + vae2 is ";
    echo "<br>";
    echo $vari1 + $vari2;
    echo "<br>";
    echo "<br>";
    echo "The value of var1 - vae2 is ";
    echo "<br>";
    echo $vari1 - $vari2;
    echo "<br>";
    echo "<br>";
    echo "The value of var1 * vae2 is ";
    echo "<br>";
    echo $vari1 * $vari2;
    echo "<br>";
    echo "<br>";
    echo "The value of var1 / vae2 is ";
    echo "<br>";
    echo $vari1 / $vari2;
    echo "<br>";
    // Assignment Oparetor
    $newVar = $vari1;
    $newVar -= 5;
    echo "This is the value of Newver ";
    Echo $newVar;
    Echo "<br>";

    // Comparison Oparetor
    //echo "<h1>Comparison Oparetor</h1>";
    echo "This value of 1>=4 is ";
    echo var_dump(1>=4);
    echo"<br>";
    echo "This value of 1==4 is ";
    echo var_dump(1==4);
    echo"<br>";
    echo "This value of 1<=4 is ";
    echo var_dump(1<=4);
    echo"<br>";
    // Increment/ Decrement Oparetor
    // echo $vari1++;
    // echo "<br>";
    // Echo $vari1;
    // echo "<br>";
    // Echo $vari2--;
    // echo"<br>";
    // echo $vari2;
    echo ++$vari1;
    echo "<br>";
    echo --$vari2;
    // Logical Oparetor
    // and(&&)
    echo "<br>";
    $myvar = (true and true);
    echo "<br>";
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false and true);
    echo "<br>";
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false and false);
    echo "<br>";
    echo var_dump($myvar);
    echo "<br>";
    // or(||)
    echo "<br>";
    echo "or(||)";
    $myvar = (true || true);
    echo "<br>";
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false || true);
    echo "<br>";
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false || false);
    echo "<br>";
    echo var_dump($myvar);
    // xor
    echo "<br>";
    echo "Xor";
    $myvar = (true xor true);
    echo "<br>";
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false xor true);
    echo "<br>";
    echo var_dump($myvar);
    echo "<br>";
    $myvar = (false xor false);
    echo "<br>";
    echo var_dump($myvar);
    // not(!)
    

    echo "<br>";
    echo "<h3>Data type of php <h3>";
    //data type
    // 1. String
    // 2. Integer
    // 3. Float
    // 4. Boolean
    // 5. Array
    // 6. Object
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";
    $var = 23;
    echo var_dump($var);
    echo "<br>";
    $var = 23.4;
    echo var_dump($var);
    echo "<br>";
    $var = true;
    echo var_dump($var);
    echo "<br>";
    echo pi;

    ?>
</body>
</html>