<html>
<head><title>Multiplication table</title></head>
    <body>
    <center>
         <div style="color:white;background-color:black;border:2px solid white"><img src="dtrix.png" height="100" width="100" align="center"><h2>Dinesh M Indian Software Developer.</h2></div>
        <h1>MULTIPLICATION TABLE GENERATOR</h1>
        <form method="post" action="MultiplicationTable.php">
        <div class="a"><br><br><b>Enter Your Wanted Multiplication Table</b>&nbsp;&nbsp;&nbsp;<input name="mul" value="" type="number"></div><br>
            <input name="submit" value="Click" type="submit">
        </form>
        </center>
        <style>
            h1{color:yellow;background-color: green;}
            body{background-color:yellow;}
             input:hover{transform: scale(1.1);}
            .a{color:darkgreen;}
        </style>
        <div id="php" style="font-size:20;color:darkred;font-family:sanserif">
        <?php
        if($_POST)
        {
            $table_no=$_POST["mul"];
            $upto=16;
              if($table_no==0)
            {
                  echo "Please Enter a Value !";
            }
            else
            {
            echo"-------------------------------------------<br>";
              echo"<b>The $table_no 's Multiplication Table</b><br>";
            echo"-------------------------------------------<br>";
            for($i=1;$i<=$upto;++$i)
            {
                echo "$i X $table_no =". $table_no*$i."<br>";
            }
            }
        }
            
            
        ?>
        </div>
    </body>
</html>