<?php
function open_session(){
    if (session_status()== PHP_SESSION_NONE) {
        session_start();
    }
}
function destroy(){
    session_destroy();
}
?>