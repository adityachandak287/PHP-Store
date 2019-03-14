<?php
setcookie("username","",time()-86400,"/");
setcookie("name","",time()-86400,"/");
header('Location: '."index.html");
?>