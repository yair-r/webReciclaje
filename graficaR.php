<html>

<head>
    <title>Grafica Pet R</title>
</head>

<body>
    <div id=”r-output” id=”width: 100%; padding: 25px;”>
        <?php

use function PHPSTORM_META\type;

            exec('"C:\Program Files\R\R-4.2.1\bin\Rscript.exe"  C:\Users\Sthj\DesktoP\Rconex\GraficaR.R',$out,$res);
            echo $res;
            
        ?>
        <img src="./imagenes/test.png" alt=”R_Graph” />
    </div>
</body>

</html>