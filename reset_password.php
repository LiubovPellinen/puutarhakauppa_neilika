<?php
$resetErr = [
    "emailErr" => "", "emailSent" => "", "emailSentErr" => "",
    "error" => ""
];
include("navigointi.php");
include("reset_password_handler.php"); 

?>
<div class="page-header">
</div>
<div class="App">
    <div class="vertical-center">
        <div id="inner_login" class="inner-block">
            <form action="" method="post">
                <h3>Salasanan resetointi</h3>
                <?php echo $resetErr['emailSent']; ?>
                <?php echo $resetErr['emailErr']; ?>
                <?php echo $resetErr['emailSentErr']; ?>
                <?php echo $resetErr['error']; ?>
                 <div class="form-group">
                <label>Sähköposti</label>
                    <input type="email" class="form-control" name="kay_posti" id="kay_posti" />

                </div>
            
                <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Resetointi
                </button>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php");

?>