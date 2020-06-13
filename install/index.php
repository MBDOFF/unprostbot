<?php

if(file_exists('../config.php')){
    
include_once('../config.php');
if(isset($_GET['key']) && !($_GET['key']==="")){
if($resetkey === $_GET['key']){
unlink('../config.php');
header("location: ../index.php");
}else{
    header("location: ../error.php?e=7");
}
}else{
headeri();
?>


<div class="card text-center">
    <div class="card-header">
        unProstBot
    </div>
    <div class="card-body">
        <h5 class="card-title">unProstBot ReInstaller</h5>
        <p class="card-text">If you want to reinstall unProstBot, you must enter the reset key below.</p>
        <div class="form-group">
            <label for="passreset">Reset Password</label>
            <input type="password" class="form-control" style="text-align:center" id="passreset">
        </div>
        <a href="#" onclick="reinstall()" class="btn btn-danger">Reinstall</a>
        <a href="../index.php" class="btn btn-success">Back</a>
    </div>
    <div class="card-footer text-muted">
        © MBD 2020
    </div>
</div>


<?php
footeri();
}   
    
}else{
     
    
headeri();
?>


<div class="card">
    <div class="card-body">
        <h5 class="card-title">unProst Bot</h5>
        <h6 class="card-subtitle mb-2 text-muted">Installer</h6>
        <p class="card-text">With this script you can easily install the unProstBot site.</p>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Config Maker</h5>
                <p class="card-text">To use a unProstBot, you need to generate a config.php</p>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Webhooks</h5>
                        <p class="card-text">The webhooks from the discord server must be configured here.</p>
                        <?php
  for($i=1;$i<11;$i++){
      ?>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm<?php echo $i;?>"><?php echo $i; ?></span>
                            </div>
                            <input type="text" id="wh<?php echo $i; ?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm<?php echo $i;?>">
                        </div>
                        <?php
  }
?>
                    </div>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-smk">ReInstall Key</span>
                    </div>
                    <input type="password" id="reinstallkey" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-smk">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-smky">Send Password</span>
                    </div>
                    <input type="password" id="sendpassword" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-smky">
                </div>
                <button type="button" class="btn btn-success" onclick="saveconfig()">save config</button>
            </div>
        </div>

    </div>
</div>





<?php
footeri();
  
      
}







function headeri(){
?>
<!DOCTYPE html>
<html>

<head>
    <title>unProstBot installer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <?php
}

function footeri(){
?>

</body>

<script>
    function reinstall() {
        var reinstallkey = document.getElementById('passreset').value;
        window.location.replace("./index.php?key=" + reinstallkey);
    }

    function saveconfig() {
        var wh1 = document.getElementById('wh1').value;
        var wh2 = document.getElementById('wh2').value;
        var wh3 = document.getElementById('wh3').value;
        var wh4 = document.getElementById('wh4').value;
        var wh5 = document.getElementById('wh5').value;
        var wh6 = document.getElementById('wh6').value;
        var wh7 = document.getElementById('wh7').value;
        var wh8 = document.getElementById('wh8').value;
        var wh9 = document.getElementById('wh9').value;
        var wh10 = document.getElementById('wh10').value;
        var reinstallkey = document.getElementById('reinstallkey').value;
        var sendpassword = document.getElementById('sendpassword').value;
        var today = new Date();
        var ixiu = 0;
        var dd = parseInt(String(today.getDate()).padStart(2, '0'));
        var mm = parseInt(String(today.getMonth() + 1).padStart(2, '0'));
        var yyyy = parseInt(today.getFullYear());
        for (var i = 0; i < 821724; i++) {
            ixiu += (mm + dd + yyyy);
        }

        window.location.replace("./doinstall.php?vk=" + ixiu + "&wh1=" + wh1 + "&wh2=" + wh2 + "&wh3=" + wh3 + "&wh4=" + wh4 + "&wh5=" + wh5 + "&wh6=" + wh6 + "&wh7=" + wh7 + "&wh8=" + wh8 + "&wh9=" + wh9 + "&wh10=" + wh10 + "&rik=" + reinstallkey + "&sp=" + sendpassword);
    }

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
<?php
}


?>
