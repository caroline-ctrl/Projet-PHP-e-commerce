<?php
include('inc/header.php');

$msg = '';
$msgClass = '';

//check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
  // Get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  //Check required fields
  if (!empty($email) && !empty($name) && !empty($message)) {
    //passed
    //check email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      //failed
      $msg = 'The email is not valid';
      $msgClass = 'alert-danger';
    } else {
      //passed
      $toEmail = 'ajoanaverde@gmail.com';
      $subject = 'Contact request from' . $name;
      $body = '<h2>Contact request</h2>
      <h4>Name</h4><p>' . $name . '</p>
      <h4>Email</h4><p>' . $email . '</p>
      <h4>Message</h4><p>' . $message . '</p>
      ';
      //Email headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
      // Additional headers
      $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
      if (mail($toEmail, $subject, $body, $headers)) {
        // email sent
        $msg = 'Your email has been sent';
        $msgClass = 'alert-success';
      } else {
        //failed
        $msg = 'Your email has NOT been sent';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    // failed
    $msg = 'Please fill in all the fields';
    $msgClass = 'alert-danger';
  }
}

?>

<!-- row et col-3 dans le header -->
<div class="col-9">
  <?php if ($msg != '') : ?>
    <br>
    <div class="alert <?php echo $msgClass; ?>">
      <?php echo $msg; ?>
    </div>
  <?php endif; ?>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin-top:20px;">
    <fieldset class="form-group">
      <legend style="text-align: center;">Contactez nous</legend>
      <label for="name">Nom Prénom</label>
      <input value="<?php echo isset($_POST['name']) ? $name : ''; ?>" type="text" class="form-control" name="name" placeholder="Nom Prénom">
      <br>
      <label for="email">Email address</label>
      <input value="<?php echo isset($_POST['email']) ? $email : ''; ?>" type="email" class="form-control" name="email" placeholder="Email">
      <small class="form-text text-muted">"We'll never share your email with anyone else." <br> (Je sais pas traduire ça )</small>
      <br>
      <label for="message">Votre message</label>
      <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Composez votre message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      <br>
      <div style="text-align: center;">
        <button name="submit" type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </fieldset>
  </form>
</div>







<!-- ceci ferme la row du corps de la page -->
</div>
<!--  -->



<?php include('inc/footer.php') ?>