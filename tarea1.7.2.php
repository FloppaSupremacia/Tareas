<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea1.7.2</title>
</head>
<body>
    <h1>Calculos condicionales</h1>
    <p>Este programa realiza una serie de pasos los cuales son:</p>
    <p>Si el numero ingresado "n" es par se divide entre 2, si no le sumara 1.</p>
    <p>Ahora si el numero "n" tiene 3 sifras se divide entre 100, si el numero tiene dos sifras se divide entre 10</p>
    <p>Y por ultimo si el numero "n" es par de 3 se le restara 1, al igual el programa te calcula cuantas veses fue modficado el numero "n".</p>
  
        <form action="Tarea1.7.2.php" method="post">
        Numero n:
        <input type="text" name="n"><br>
        <input type="submit" value="Enviar"><br>
        <?php
            if($_POST)
            {
                $n=$_POST['n'];
                $cont=0;
                if($n%2==0)
                {
                    $n=$n/2;
                    $cont++;
                }
                else
                {
                    $n=$n+1;
                    $cont++;
                }
                if($n>100)
                {
                    $n=$n/100;
                    $cont++;
                }
                else if($n<100 and $n>10)
                {
                    $n=$n/10;
                    $cont++;
                }
                if($n%3==0)
                {
                    $n=$n-1;
                    $cont++;
                }
                echo "Resultado final: ",$n; echo"<br>";
                echo"Modificaciones totales: ",$cont;
        }    
        ?>
</body>
</html>