<?php
    function ecrypt_pwd($password)  {
        return crypt($password, '$5$rounds=5000$usesomesillystringforsalt$');
    }
?>