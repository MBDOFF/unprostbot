<?php
$verid = 0;
for($i = 0;$i<821724;$i++){
    $verid += (int)date("m")+(int)date("d")+(int)date("yy");
}
//echo $verid;
if(isset($_GET['vk']) && !($_GET['vk'] === "")){
    $ixiu = $_GET['vk'];
    if($ixiu==$verid){

        $wh = array();
        
        for($z = 1;$z<11;$z++){
            $namewh = "wh".$z;
            if(isset($_GET[$namewh]) && !($_GET[$namewh]) == ""){     
                array_push($wh,$_GET[$namewh]);
            }else{

                header("location: ../error.php?e=9");
            }
        }
            if(isset($_GET['rik']) && !($_GET['rik']) == ""){      
            }else{

                header("location: ../error.php?e=9");
            }     
            $sp = "";
            if(isset($_GET['sp']) && !($_GET['sp']) == ""){    
                $sp = $_GET['sp'];
            }
        
        var_dump($wh);

$myfile = fopen("../config.php", "w") or header("location: ../error.php?e=1");
$zi = 1;
fwrite($myfile,"<?php ");
foreach($wh as $item) {
fwrite($myfile, '$wh'.$zi.'="'.$item.'"; ');
$zi += 1;
}
fwrite($myfile,'$resetkey="'.$_GET['rik'].'"; ');
fwrite($myfile,'$sendpassword="'.$sp.'"; ');
fwrite($myfile,"?>");
fclose($myfile);

header("location: ../index.php");

}else{
header("location: ../error.php?e=8");
}
}else{
header("location: ../error.php?e=8");
}

?>
