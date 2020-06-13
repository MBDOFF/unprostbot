<?php

if(file_exists('config.php')){
}else{
    header("location: ./install/index.php");
}

include('./config.php');



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
global $wh1;
global $wh2;
global $wh3;
global $wh4;
global $wh5;
global $wh6;
global $wh7;
global $wh8;
global $wh9;
global $wh10;
global $sendpassword;
?>

</body>

<script>
    function reinstall() {
        window.location.replace("./install/index.php");
    }

    function sendMessage(mode) {

        var scan = true;

        <?php if(!($sendpassword == "")){
        ?>

        var sendp = document.getElementById('sendpassword').value;
        var sendp2 = "<?php echo $sendpassword; ?>";

        if (sendp === sendp2) {
            scan = false;
        } else {
            window.location.replace("./error.php?e=10");
        }

        <?php
        }else{
        ?>
        scan = false;
        <?php
        } ?>

        if (scan === false) {
            var arrayBots = [
                "<?php echo $wh1; ?>",
                "<?php echo $wh2; ?>",
                "<?php echo $wh3; ?>",
                "<?php echo $wh4; ?>",
                "<?php echo $wh5; ?>",
                "<?php echo $wh6; ?>",
                "<?php echo $wh7; ?>",
                "<?php echo $wh8; ?>",
                "<?php echo $wh9; ?>",
                "<?php echo $wh10; ?>"
            ]
            var request = new XMLHttpRequest();
            request.open("POST", arrayBots[Math.floor(Math.random() * arrayBots.length)]);
            request.setRequestHeader('Content-type', 'application/json');

            var params = {
                username: document.getElementById('numebot' + mode).value,
                avatar_url: document.getElementById('avatartext' + mode).value,
                content: document.getElementById('mesajtext' + mode).value
            }


            request.send(JSON.stringify(params));
        }


    }

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
<?php
}

headeri();
?>

<div class="card">
    <div class="card-header">
        unProstBot
    </div>
    <div class="card-body">
        <h5 class="card-title">Discord Sender</h5>
        <p class="card-text">For the program to work, write below the password created by the site developer</p>
        <p class="card-text">The field will be blocked if the developer has chosen not to enter a password.</p>
        <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-smky">Send Password</span>
            </div>
            <input type="password" id="sendpassword" class="form-control" <?php if($sendpassword == ""){echo "readonly";} ?> aria-label="Small" aria-describedby="inputGroup-sizing-smky">
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">unProstBot</h5>
                <h6 class="card-subtitle mb-2 text-muted">unProstBot Discord</h6>
                <p class="card-text">Send your own message using unProstBot to the discord server selected by the site developer</p>

                <!--
Mode 1
-->

                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">Config=unProstBot</h5>
                        <p class="card-text">The name and Avatar are set for the unProstBot config</p>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nume Bot</span>
                            </div>
                            <input type="text" id="numebot1" class="form-control" aria-label="Small" value="unprost" readonly aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Avatar</span>
                            </div>
                            <input type="text" id="avatartext1" class="form-control" aria-label="Small" readonly value="https://cdn.pixabay.com/photo/2014/04/03/00/35/zebra-308769__340.png" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mesaj</span>
                            </div>
                            <input type="text" id="mesajtext1" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <button type="button" class="btn btn-success" onclick="sendMessage(1)">unProstBot Send (Config=unProstBot)</button>
                    </div>
                </div>
                <br />

                <div class="card m-3">
                    <div class="card-body">
                        <h5 class="card-title">Config=Custom</h5>
                        <p class="card-text">You have the right to set your own bot or avatar name</p>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Nume Bot</span>
                            </div>
                            <input type="text" id="numebot3" class="form-control" aria-label="Small" value="cineva" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Avatar</span>
                            </div>
                            <input type="text" id="avatartext3" class="form-control" aria-label="Small" value="https://cdn.vox-cdn.com/thumbor/lwffO18WrM9ujCXVqrFBg9JH200=/1400x1400/filters:format(png)/cdn.vox-cdn.com/uploads/chorus_asset/file/13354209/avatar.png" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Mesaj</span>
                            </div>
                            <input type="text" id="mesajtext3" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <button type="button" class="btn btn-info" onclick="sendMessage(3)">unProstBot Send (Config=Custom)</button>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-danger" onclick="reinstall()">reinstall unProstBot</button>
        </div>
    </div>
</div>


<?php
footeri();

?>
