<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <form action = "#" method="POST">
            <label>Ingrese un numero: &nbsp;</label>
            <input type="number" name="n1"><br>
            <input type="submit" name="b1" value="Factorial">
        </form> 
    </body>
</html>



<?php

if(isset($_POST['b1'])){
    $n1 = $_POST['n1'];
    $factorial = 1;
    for ($i = 1; $i <= $n1; $i++)
    {
        $factorial *= $i;
    }
    echo "<br>El factorial de $n1 es: $factorial";
}

?>

