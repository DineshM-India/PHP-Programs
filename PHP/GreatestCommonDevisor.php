<html>
    <head><title>GCD</title></head>
<body>
    <center>
        <div style="color:white;background-color:black;border:2px solid white"><img src="dtrix.png" height="100" width="100" align="center"><h2>Dinesh M Indian Software Developer.</h2></div>
        <h1>Greatest Common Deviser of Two Values</h1>
    <form method="post"  action="GreatestCommonDevisor.php">
       <b>Value 1</b><input type="text" name="a" ><br><br>
        <b>Value 2</b><input type="text" name="b" ><br><br>
        <input type="submit" value="GCD" name="submit"><br>
        </form></center>
    <?php
    if(isset($_REQUEST['a']) and isset($_REQUEST['b']))
    {
        $a_first = $_POST['a'];
        $b_second = $_POST['b'];
        function gcd($x,$y)
        {
            if($x==$y)
            {
                return $x;
            }
            elseif($x==0 ||$y==0)
            {
                return 1;
            }
            else
            {
                if($y > $x)
                {
                    $temp=$x;
                    $x=$y;
                    $y=$temp;
                    
                }
                $rx=$x;
                $rkp1=$y;
                $rkp2=$rx%$rkp1;
                if($rkp2 == 0)
                    return $rkp1;
                else
                {
                    while($rkp2 <> 0)
                    {
                        $rk=$rkp1;
                        $rkp1=$rkp2;
                        $rkp2=$rk%$rkp1;
                    }
                    return $rkp1;
                }
            }
    }
        $result=gcd($a_first,$b_second);
        echo"The GCD of $a_first and $b_second is ==>$result";

}
    ?>
     <style>
                 body{background-color:crimson;}
                h1{color:darkblue;background-color:chocolate;}
                 input:hover{transform: scale(1.1);}
            </style>
    </body>
</html>