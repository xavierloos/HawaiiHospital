<?php

// if(isset($_POST['btn-send']))
// {
//   $Nombre = $_POST['Nombre'];
//   $Email = $_POST['Email'];
//   $Asunto = $_POST['Asunto'];
//   $Mensaje = $_POST['Mensaje'];

//   if(empty($Name) || empty($Email) || empty($Asunto) || empty($Mensaje))
//   {
//     echo "Favor de rellenar este campo"
//     header('location:index.php?error');
//   }
//   else{
//     $to = "contacto@fisioterapiahawaii.com";
//     if(mail($to,$Asunto,$Mensaje,$Email))
//     {
//       header('location:index.php?success');
//     }
//   }

// }
// else
// {
//   header('location:index.php');
// }




$errors = '';
$myemail = 'xavier.loos04@gmail.com'; //<-----Put Your email address here.
if (
  empty($_POST['Nombre'])  ||
  empty($_POST['Email']) ||
  empty($_POST['Asunto'])
) {
  $errors .= "\n Error: all fields are required";
}

$name = $_POST['Nombre'];
$email_address = $_POST['Email'];
$message = $_POST['Asunto'];

if (!preg_match(
  "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
  $email_address
)) {
  $errors .= "\n Error: Invalid email address";
}

if (empty($errors)) {

  $to = $myemail;

  $email_subject = "Contact form submission: $name";

  $email_body = "You have received a new message. " .

    " Here are the details:\n Name: $name \n " .

    "Email: $email_address\n Message \n $message";

  $headers = "From: $myemail\n";

  $headers .= "Reply-To: $email_address";

  mail($to, $email_subject, $email_body, $headers);

  //redirect to the 'thank you' page

  header('Location: contact.html');
}