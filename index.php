<?php 
use \Tutoriel\HTML\BootstrapForm;
use \Tutoriel\Autoloader;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Start with Bootstrap</title>
</head>
<body>

<?php
require 'class/Autoloader.php';
Autoloader::register();
$form = new BootstrapForm($_POST);
?>

<form action="#" method="post">

    <?php
     echo $form->input('username');
     echo $form->input('password');
     echo $form->submit();
     ?> 
     
</form>


</body>
</html>


