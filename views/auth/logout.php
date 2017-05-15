<?php
session_start();
unset($_SESSION['wip_user']);
unset($_SESSION['wip_name']);
header('Location:/wip');
?>