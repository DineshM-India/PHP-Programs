<html>
<head>
<title>Examples of Control Functions</title>    
    </head><center>
    <div style="color:white;background-color:black;border:2px solid white"><img src="dtrix.png" height="100" width="100" align="center"><h2>Dinesh M Indian Software Developer.</h2></div></center>
    <body><center><h1>CONTROL FUNCTIONS</h1>
        Enter the Temprature Value<br><br><br>
     <form method="post" action="ConditionalStatements.php">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="loop" type="text"><br><br><br>
            Enter the Single Digit[0 to 9]<br><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="digit" type="text"><br><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enter the Three Values
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="a" type="text">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="b" type="text">
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="c" type="text"><br><br>
            Enter the  +/- Values<br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="ter" type="text"><br><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit">CLICK</button>
        </form></center> 
        <style>
            h1{text-align: center;color:yellow;background-color:darkred;}
            u{color:darkred;text-decoration: none;}
            i{color:yellow;}
            body{background-color:coral;}
            input:hover{transform: scale(1.1);}
            button{border: 3px solid black;}
            button:hover{color: white;background-color: black;border: 3px solid blue;transform:scale(1.2);}
        </style>
        <?php
        if(isset($_REQUEST["loop"]))
        {
            $data=$_REQUEST["loop"];
            elseif_func($data);
        }
        if(isset($_REQUEST["digit"]))
        {
            $data=$_REQUEST["digit"];
            switch_func($data);
        }
        if(isset($_REQUEST["a"]) and isset($_REQUEST["b"]) and isset($_REQUEST["c"]))
        {
            $a=$_REQUEST["a"];
            $b=$_REQUEST["b"];
            $c=$_REQUEST["c"];
            ifelse_func($a,$b,$c);
        }
        if(isset($_REQUEST["ter"]))
        {
            $data=$_REQUEST["ter"];
            ter_func($data);
        }
        function elseif_func($val)
        {
            echo "<u><b>Output for Else if Statement</b></u><br>";
            $temp=$_REQUEST["loop"];
            if($temp<30)
                echo"Too Cold.";
            elseif($temp<60)
                    echo"Pretty Chilled.";
            elseif($temp<70)
                    echo"Pretty nice outside.";
            elseif($temp<80)
                    echo"Pretty warm out side.";
            else
                    echo"Too HOT.";
        }
        function switch_func($dig)
        {
            echo "<br><u><b>Output for Switch Statement</b></u><br>";
        switch($dig)
        {
            case 0:
                echo"ZERO";
                break;
            case 1:
                echo"ONE";
                break;
            case 2:
                echo"TWO";
                break;
            case 3:
                echo"THREE";
                break;
            case 4:
                echo"FOURE";
                break;
            case 5:
                echo"FIVE";
                break;
            case 6:
                echo"SIX";
                break;
            case 7:
                echo"SEVEN";
                break;
            case 8:
                echo"EIGHT";
                break;
            case 9:
                echo"NINE";
                break;
            default:
                echo" <font color='red'>:) Please Enter Single digits only</font>";
                break;
        }
        }
        function ifelse_func($a,$b,$c)
        {
            echo "<br><u><b>Output for if_else Statement</b></u><br>";
            echo"First Value",$a,"<br>";
            echo"Second Value",$b,"<br>";
            echo"Third Value",$c,"<br>";
            if($a>$b)
            {
                if($a>$c)
                    $big=$a;
                else
                    $big=$c;
            }
            else
                {
                if($b>$c)
                    $big=$b;
                else
                    $big=$c;
            }
            echo"Biggest Number is :",$big,"<br>";
        }
        function ter_func($data)
        {
            echo "<br><u><b>Output for Ternary Function Statement</b></u><br>";
            $result;
            $result=$data<0?"<font color='brown'><b>Negetive</b>":"<b>Possitive</b></font>";
            echo"The Number",$data,"&nbsp is =>",$result,"<br>";
        }
        ?>
    </body>
</html>