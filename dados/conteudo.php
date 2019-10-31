<?php
switch ($_GET['pagina']){
case 'contrato';
include "contrato.php";
break;

case 'avaliacao';
include "avaliacao.php";
break;

case 'new_user';
include "new_user.php";
break;

case 'list_user';
include "list_user.php";
break;

default:
include "home.php";


}
?>
