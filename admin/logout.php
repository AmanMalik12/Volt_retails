<?php

session_destroy();
setcookie('loginStatus',"",time()-3600,'/');
setcookie('logindata',"",time()-3600,'/');
header('Location: admin.php');

?>