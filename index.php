<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD - Day2</title>
</head>
<body>
    <h1>Exercise 1 : Calculate Factorial Of A Number</h1>
    <?php 
        $number = 5;
        $factorial = 1;
        for($i = 1; $i <= $number; $i++)
        {
            $factorial = $factorial * $i; 
        }
        echo $factorial;
    ?>

    <h1>Exercise 2 : Pattern Using For Loops</h1>
    <?php 
        for($row = 1; $row < 10; $row++)
        {
            for($star = 1; $star <= $row; $star++)
            {
                echo "*";
            }
            echo "<br>";
        }
    ?>

    <h1>Exercise 3 : Get The Century</h1>
    <form action="#" method="post">
        <label for="annee">année : </label><input type="text" name="annee" id="annee"><br><br>
        <input type="submit" value="Connaitre le Siècle" name="siecle">
    </form>
    <?php 
        
        if(isset($_POST['siecle'])){
            
            $annee = $_POST['annee'];

            if($annee > 1000 && $annee <= 2010){
                $message = "Century($annee) -> " . floor($annee/100)+1 ."th century";
            }
            else{
                $message = "Veuillez entrer une année entre 1000 et 2010";
            }
            echo $message;
        }
    ?>

</html>