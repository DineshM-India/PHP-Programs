<?php
        $c=ImageCreate(500,500);
       Imagesetthickness($c,6);
        $bc=ImageColorAllocate($c,200,150,200);
        $fc=ImageColorAllocate($c,250,100,150);
        $lc=ImageColorAllocate($c,30,150,30);
        $ec=ImageColorAllocate($c,100,50,150);
        ImageFilledEllipse($c,250,250,400,400,$fc);
        ImageFilledEllipse($c,170,170,50,50,$ec);
        ImageFilledEllipse($c,370,130,50,50,$ec);
        ImageLine ($c,250,200,280,275,$lc);
        ImageLine ($c,250,275,280,275,$lc);
        ImageArc($c,250,300,250,150,0,180,$lc);
        header('Content-Type:image/jpeg');
        ImageJPEG($c);
        ImageDestroy($c);
?>