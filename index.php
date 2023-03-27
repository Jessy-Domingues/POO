<?php
require 'form.php';
require 'text.php';
require 'Personnage.php';

$merlin = new Personnage('Merlin');
$merlin-> regenerer();

var_dump($merlin);

 $form = new Form($_POST);
var_dump(Text::withZero(4));

?>

<form action="#" method="post">

    <?php
     echo $form->input('username');
     echo $form->input('password');
     echo $form->submit();
     ?> 
     
</form>

