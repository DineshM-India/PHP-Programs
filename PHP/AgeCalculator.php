<html>
<head><title>agecalc</title></head>
    <body bgcolor="pink">
    <form method="post" action="AgeCalculator.php">
        <br><br>
        <center>
             <div style="color:white;background-color:black;border:2px solid white"><img src="dtrix.png" height="100" width="100" align="center"><h2>Dinesh M Indian Software Developer.</h2></div><br>
        <h1>MM/DD/YYYY</h1>
            <input type="text" name="dob">
            <input type="submit" name="submit" value="Click">
        </center>
        </form><div style="background-color:yellow;color:red;border:2px solid red;">
        <h2 >
        <?php
        if(!isset($_POST['submit']))
        {
            
        }
        else
        {
            $dateArr=explode('/',$_POST['dob']);
            $dateTs=strtotime($_POST['dob']);
            $now=strtotime('today');
            if(sizeof($dateArr)!=3)
            {
                die('ERROR: Please Enter Valid date of birth');
            }
            if(!checkdate($dateArr[0],$dateArr[1],$dateArr[2]))
            {
                die('ERROR: Please Enter Valid date of birth');
            }
            if($dateTs >= $now)
            {
                die('ERROR: Please Enter Valid date of birth');
            }
            $ageDays=floor(($now-$dateTs)/86400);
            $ageYears=floor($ageDays/365);
            $ageMonths=floor(($ageDays -($ageYears * 365))/30);
            echo "<center>You are $ageYears Years $ageMonths Months Old.</center>";
        }
        ?>
        </h2></div>
    </body>
</html>