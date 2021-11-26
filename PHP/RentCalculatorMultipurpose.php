<html>
<head><title>Time Calculation System</title></head>
    <body>
    <center>
        <div style="color:white;background-color:black;border:2px solid white"><img src="dtrix.png" height="100" width="100" align="center"><h2>Dinesh M Indian Software Developer.</h2></div>
        <h1>Rent Calculation System</h1>
        <form method="post" action="RentCalculatorMultipurpose.php">
        <h3>Enter One Hour Rent Cost</h3><input name="a" id="a" type="number">
            <h3>Enter Costomer Name</h3><input name="name" id="name" type="text">
            <h3>Enter Costomer Address</h3><input name="add" id="add" type="text">
            <h3>Enter Used Hour</h3><input name="c" id="c" type="number">
            <h3>Enter Used Minute</h3><input name="d" id="d" type="number"><br><br>
            <input type="submit" name="submit" value="CALCULATE" style="border-radius:4px;border-color:darkred;">
        </form>
        </center>
        <style>
            h1{color:goldenrod;background-color:darkred;}
            body{background-color:goldenrod;}
             input:hover{transform: scale(1.1);}
            .a{color:darkgreen;}
        </style>
        <div style="background-color:black;color:goldenrod;font-size: 18;">
        <center>
            <?php
       $a=$_POST['a'];
        $b=$a/60;
        $name=$_POST['name'];
        $add=$_POST['add'];
        $c=$_POST['c'];
        $d=$_POST['d'];
        $e=$a*$c;
        $f=$b*$d;
        $g=$e+$f;
        echo"<br><b>Customer Details</b><br><br>";
        echo"<b>Customer Name</b>:",$name,"<br>";
         echo"<b>Customer Address</b>:",$add,"<br>";
         echo"<b>Used Time:</b>",$c,"<b>h </b>",$d,"<b>m.</b><br>";
         echo $name,"<b>Payable</b>:",$g,"  INR. Only<br>";
        echo"<br>Note:One Hour Rent Cost",$a,"<br><br>";
        ?>
            </center>
        </div>
        Type:WebApplication,<br>Usefull:Rent Calculations for All Type of Machinaries,<br>
        &#9400;All Rights Reserved By D Tech Solutions ,MD: Dinesh M,2020.
    </body>
</html>