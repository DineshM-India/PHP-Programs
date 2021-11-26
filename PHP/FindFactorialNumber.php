<html>
<head><title>Factorial Program using loop in PHP</title></head>
    <body>
        <center>
             <div style="color:white;background-color:black;border:2px solid white"><img src="dtrix.png" height="100" width="100" align="center"><h2>Dinesh M Indian Software Developer.</h2></div>
            <h1>FACTORIAL VALUE</h1>
<form method="post" action="FindFactorialNumber">
            <br><br><br><br><br>
    Enter the Number
    <input type="number" name="number" id="number"><br><br><br>
    <input type="submit" name="submit" value="Click" class="d">
            </form>
            <?php
        if($_POST)
        {
            $fact = 1;
            $number = $_POST['number'];
            echo "<font color='blue'>\n The Factorial Value of $number is =></font> ";
            for($i=1;$i <= $number;$i++)
            {
                $fact = $fact * $i;
            }
            echo $fact."<br>";
        }
            ?>
            <style>
                 body{background-color:mediumspringgreen;}
                h1{color: yellow;background-color:green;}
                .d:hover{background-color: blue;color: white;}
                 input:hover{transform: scale(1.1);}
            </style>
        </center>
    </body>
</html>