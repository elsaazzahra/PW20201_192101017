<html>
    <head>
        <title>Variable Static</title>
    </head>
    <body>
        <h1>Variable Static</h1>
        <?php
            function Test()
            {
                Static $a=0; //dengan static
                echo "Nilai a : ";
                echo $a;
                echo "<br>";
                $a++;

            }
            Test();
            Test();
            Test();
            Test();
            Test();
        ?>
    </body>
</html>
