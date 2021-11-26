<html>
<head>
    <tittle>download</tittle></head>
    <body bgcolor="black">
    <center><div class="din">
        <h1>Download File</h1>
        <form method="post" action="FileDownload.php">
        <input type="file" name="examp" class="ch">
            <br><br><input type="submit" name="submit" value="View" class="v"><br><br>
        </form></div>
        </center>
        <center>
    <div style="color:white;background-color:black;margin-left:200px;margin-right:200px;border:10px dotted white;margin-top:100px;">
<?php
echo "<h1>Downloaded File Details</h1><br>";
    $a=$_REQUEST['examp'];
    echo "<b>".$a."</b>";
    echo "<br><br><u>Content from the down loaded file</u><br><br> ";
    $handle=fopen($a,"r");
    while(!feof($handle))
    {
        $text=fgets($handle);
        echo $text,"<br><br><br>";
    }
?></div></center>
        <style>
            h1{
                color: chartreuse;background-color: brown;
            }
            .din{
                background-image: url(abstract-dot-line-molecular-structures-technology-background-science-style_41981-79.jpg);color:black;
                border: 2px solid brown;
                margin-left: 250px;margin-right: 250px;margin-top: 100px;
            }
            .ch{
                color: white;background-color: brown;
            }
            .v{
                color: white;background-color: brown;
            }
            .v:hover{
                color: brown;background-color: white;
                
            }
        </style>
    </body>
</html>
