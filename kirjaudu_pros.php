<?php
include "tietokanta.php";


  
  //if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    //die('only post');
  //}
  global $wrongPwdErr, $accountNotExistErr, $namePwdErr, $verificationRequiredErr, $name_empty_err, $pass_empty_err;
 
  if(isset($_POST['login'])) {
    $kay_nimi = $yhteys->real_escape_string(stripslashes(strip_tags($_POST["kay_nimi"])));
    $kay_salasana = $yhteys->real_escape_string($_POST["kay_salasana"]);

    if(!empty($kay_nimi) && !empty($kay_salasana)){
      $pas = "SELECT * FROM kayttajat WHERE kayttaja_nimi= '$kay_nimi'";
      $tulokset = $yhteys->query($pas);

      if ($tulokset->num_rows > 0) {
        $rivi = $tulokset->fetch_assoc();
        $salasana = $rivi['kayttaja_salasana'];
        $is_active=$rivi['is_active'];
        $kay_nimi=$rivi['kayttaja_nimi'];
        $kay_posti=$rivi['kayttaja_sposti'];
        $token=$rivi['token'];
        $admin=$rivi['admin'];

        if($is_active == '1'){
          
          if (password_verify($kay_salasana, $salasana)) {
            $_SESSION["loggedIn"] = TRUE;             
            $_SESSION['kayttaja_nimi'] = $kay_nimi;
            $_SESSION['kayttaja_sposti'] = $kay_posti;
            $_SESSION['token'] = $token;
            $_SESSION['admin'] = $admin;
            header('Location: y_tili.php');
            die();
          } else{
              $namePwdErr = '<div class="alert alert-danger">
                              Either name or password is incorrect.
                              </div>';
          } 

      } else{ 
        $verificationRequiredErr = '<div class="alert alert-danger">
                                     Account verification is required for login.
                                    </div>';
          }

    } else{
      $accountNotExistErr='<div class="alert alert-danger">
      User account does not exist.
      </div>';
       }

    }else {
    if(empty($kay_nimi)){
        $name_empty_err = "<div class='alert alert-danger email_alert'>
                    Name not provided.
            </div>";
    }
    
    if(empty($kay_salasana)){
        $pass_empty_err = "<div class='alert alert-danger email_alert'>
                    Password not provided.
                </div>";
    }            
    }
  }  
    
  $yhteys->close();
  
  
 

