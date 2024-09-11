<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     function sumString($str){
        $ctr_aa=0;
        /* if($i<(strlen($str)-1)){ */
             for($i = 0; $i<(strlen($str)-1);$i++){
                if(substr($str,$i,2)=="aa"){
                    $ctr_aa++;
                }
             }
       /*  }else{ */
            return $ctr_aa;
         /* }  */
     }
     $test = sumString("bbaaccaag");
     echo "value is $test"."\n";
     echo sumString("jjkiaaasew")."\n";
     echo sumString("JSaaakoiaa")."\n";
     ?>
</body>
</html>