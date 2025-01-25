<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<body>
    <div class ="contaier">
        <p>Your party satats:</p>
        <?php
        $age = 11;
        if($age>18){
            Echo "You can go to the party";
        }
        else if($age==10) {
            echo "you are just a kid !";

        }
        else {
            echo "You can not go to party";
        }

        //arrays
        echo "<br>";
        Echo "Arrray implementation";
        echo "<br>";
        $lng = array("paython","C++","PHP","NodeJs");
        Echo count ($lng);

        //Loops php
        echo "<br>";
        $a =0;
        while($a<=10){
            echo "<br>the vaue of a is :";
            echo $a;
            $a++;
        }

        // Iterating array n the php while Loops php
        echo "<br>";
        $a =0;
        while($a < count($lng)){
            echo "<br>the vaue of language is :";
            echo $lng[$a];
            $a++;
        }

        //do while loops
        $b=20;
        do{
            echo "<br>the vaue of a is :";
            echo $b;
            $b++;
        }
        while($b <=10);

        //For loops 
        for( $c=0;$c<10;$c++)
        {
            echo "<br> value of a form the for loop is : ";
            echo $c;
        }

        //foreach
        foreach($lng as $value){
            Echo "<br> The value is ";
            echo $value;

        }
    // fanction
    function name(){
        echo"<br>";
        echo "Jobarul";
    }
    name();
    name();
    name();
    name();

    function num($num){
        Echo "<br>Your number is ";
        echo $num;
    }
    num(43);
        
        ?>
    </div>
</body>
</html>