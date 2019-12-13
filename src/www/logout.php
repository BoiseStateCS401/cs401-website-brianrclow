<?php

    session_start();
    // unset all session variables before it is destoryed.
    session_unset();
    // clear the sesion id cookie from the client
    setcookie(session_name(), '',-1);
    // remove old session id and generate a new session id
    session_regenerate_id(true);
    // destroy the session and all variables in it
    session_destroy();
    // redirect to support page
    header("Location: support.php");
?>