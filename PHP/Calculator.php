<html>
<head><title>agecalc</title></head>
    <body bgcolor="pink">
    <form method="post" action="Calculator.php">
        <br><br>
        <center>
             <div style="color:white;background-color:black;border:2px solid white"><img src="dtrix.png" height="100" width="100" align="center"><h2>Dinesh M Indian Software Developer.</h2></div><br>
            <h1 style="color:red;background-color:yellow;">Basic Calculator</h1>
<div style="color:green;background-color:yellow;border:2px solid green;">
    <b><br><br>
          Value 1  <input type="number" name="num1"><br><br><br>
            Value 2 <input type="number" name="num2"><br><br>
            <input type="submit" name="submit" value="+">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit" value="-">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit" value="*">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit" value="/">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="submit" value="%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" value="AC"><br><br>
    </b>  
        </div>    
    </center>
        </form>
        <?php
        if(isset($_REQUEST['submit']))
        {
        $a=$_REQUEST['num1'];
        $b =$_REQUEST['num2'];
        $c=$_REQUEST['submit'];
           if($a == 0 and $b == 0)
           {
             echo "Please Enter Value";  
           }
            else
            {
                
             if($c == '+')
            {
                $res=$a+$b;
            }
            else if($c == '-')
            {
            $res = $a-$b;   
            }
             else if($c == '*')
            {
            $res = $a*$b;   
            }
             else if($c == '/')
            {
            $res = $a/$b;   
            }
             else if($c == '%')
            {
            $res = $a%$b;   
            }    
                
            echo "The answer is =>",$res;
            }
        }
        ?>
    </body>
</html>
        