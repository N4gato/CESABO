<?php

//if "email" variable is filled out, send email
  if (isset($_REQUEST['mail']))  {
  
  //Email information
  $admin_email = "postmaster@cesabo2014.com";
  $email = $_REQUEST['mail'];
  $subject = $_REQUEST['name']; 
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
    header("Location: http://cesabo2014.com/index.html");
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
<html>
<header>
  <link rel="stylesheet" href="stylesheets/timeline/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="stylesheets/timeline/style.css"> <!-- Resource style -->
  
  <link rel="stylesheet" href="stylesheets/skeleton/base.css">
  <link rel="stylesheet" href="stylesheets/bootstrap.css">
  <link rel="stylesheet" href="stylesheets/skeleton/skeleton.css">
  <link rel="stylesheet" href="stylesheets/skeleton/layout.css">
  <link rel="stylesheet" href="stylesheets/style.css">
  <link rel="stylesheet/less" type="text/css" href="stylesheets/menu/_menu.less" /> 
</header>
<div class="sixteen columns clearfix contact offset-by-two" id="CONTACT">
                                      <div class="six columns alpha">
                                        
                                        <h4 class="span">CONTACT</h4><br>
                                        <h6>Contact pour envisager une intervention de M.Sabonnadière.</h6>
                                        <h6>Paris,Franc</h6>
                                        <h6>Sabonnadiere.emmanuel@wanadoo.fr</h6>
                                        <h6>(+33) 6 87 69 48 33</h6>
                                      </div>
                                      
                                      <div class="six columns alpha offset-by-one">
                                        <form action="php/mail.php" method="post">
                                          <div class="form">
                                            <input type="text" name="name" value="Name*">
                                            <input type="text" id="email" name="mail" value="Email*">
                                            <textarea name="comment" rows="6" cols="100">Inscrivez votre message...
                                            </textarea>
                                          </div>
                                          <br>
                                          <input type="submit" value="ENVOYER">
                                        </form>
                                      </div>
                                    </div>
  
</html>
  
<?php
  }
?>