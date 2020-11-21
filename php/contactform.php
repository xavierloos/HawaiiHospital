<?php

// if(isset($_POST['btn-send']))
// {
//   $Nombre = $_POST['Nombre'];
//   $Email = $_POST['Email'];
//   $Asunto = $_POST['Asunto'];
//   $Mensaje = $_POST['Mensaje'];

//   if(empty($Name) || empty($Email) || empty($Asunto) || empty($Mensaje))
//   {
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



// $errors = '';
// $myemail = 'xavier.loos04@gmail.com'; //<-----Put Your email address here.
// if (
//   empty($_POST['Nombre'])  ||
//   empty($_POST['Email']) ||
//   empty($_POST['Asunto'])
// ) {
//   $errors .= "\n Error: all fields are required";
// }

// $name = $_POST['Nombre'];
// $email_address = $_POST['Email'];
// $message = $_POST['Asunto'];

// if (!preg_match(
//   "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
//   $email_address
// )) {
//   $errors .= "\n Error: Invalid email address";
// }

// if (empty($errors)) {

//   $to = $myemail;

//   $email_subject = "Contact form submission: $name";

//   $email_body = "You have received a new message. " .

//     " Here are the details:\n Name: $name \n " .

//     "Email: $email_address\n Message \n $message";

//   $headers = "From: $myemail\n";

//   $headers .= "Reply-To: $email_address";

//   mail($to, $email_subject, $email_body, $headers);

//   //redirect to the 'thank you' page

//   header('Location: ../index.html');
// }




if (isset($_POST['submit'])) {
  $name = $_POST['Nombre']; // Get Name value from HTML Form
  $email_id = $_POST['Email']; // Get Email Value
  $msg = $_POST['Asunto']; // Get Message Value

  $to = "xavier.loos04@gmail.com"; // You can change here your Email
  $subject = "'$name' has been sent a mail"; // This is your subject

  // HTML Message Starts here
  $message = "
      <html>
          <body>
              <table style='width:600px;'>
                  <tbody>
                      <tr>
                          <td style='width:150px'><strong>Name: </strong></td>
                          <td style='width:400px'>$name</td>
                      </tr>
                      <tr>
                          <td style='width:150px'><strong>Email ID: </strong></td>
                          <td style='width:400px'>$email_id</td>
                      </tr>
                      <tr>
                          <td style='width:150px'><strong>Message: </strong></td>
                          <td style='width:400px'>$msg</td>
                      </tr>
                  </tbody>
              </table>
          </body>
      </html>
      ";
  // HTML Message Ends here

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: Admin <admin@websapex.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
  $headers .= 'Cc: info@websapex.com' . "\r\n"; // If you want add cc
  $headers .= 'Bcc: boss@websapex.com' . "\r\n"; // If you want add Bcc

  if (mail($to, $subject, $message, $headers)) {
    // Message if mail has been sent
    echo "<script>
                  alert('Mail has been sent Successfully.');
              </script>";
  } else {
    // Message if mail has been not sent
    echo "<script>
                  alert('EMAIL FAILED');
              </script>";
  }
}
header("Location: ../index.html");