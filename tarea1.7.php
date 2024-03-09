<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea1.7.1</title>
</head>
    <body>
        <h1>Escaleras de asteriscos</h1>
        <p>
            Este programa es bastante sencillo, al insertar un numero creara una escalera que el ultimo escalon
            es el numero ingresado.
        </p>
        <form action="Tarea1.7.php" method="post">
        Numero n:
        <input type="text" name="n"><br>
        <input type="submit" value="Enviar"><br>
        <?php
        if($_POST)
        {
            $n=$_POST['n'];
            for($i=1; $i<=$n; $i++)
            {
                for($j=0; $j<$i; $j++)
                {
                    echo"#";   
                }
                echo"<br>";
            }
        }
        ?>
    </body>
</html>