<?php

//set cookie
setcookie('key', 'value', time() + 86400);

//show value if cookie is set
if(isset($_COOKIE['key'])) {
  echo $_COOKIE['key'];
}


//remove cookie
setcookie('key', '', time() - 86400);