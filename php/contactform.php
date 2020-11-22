<?php

if(isset($_POST['btn-send']))
{
  $Nombre = $_POST['Nombre'];
  $Email = $_POST['Email'];
  $Asunto = $_POST['Asunto'];
  $Mensaje = $_POST['Mensaje'];

  if(empty($Name) || empty($Email) || empty($Asunto) || empty($Mensaje))
  {
    header('location:index.php?error');
  }
  else{
    $to = "contacto@fisioterapiahawaii.com";
    if(mail($to,$Asunto,$Mensaje,$Email))
    {
      header('location:index.php?success');
    }
  }

}
else
{
  header('location:index.php');
}

?>