<?php
  $name = htmlspecialchars($_POST['name']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
//   $website = htmlspecialchars($_POST['address']);
 $message = htmlspecialchars($_POST['address']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "maildemoacc@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>";
      $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $website\n \n\nRegard,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
        header("Location: thankyou.html");
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }
?>