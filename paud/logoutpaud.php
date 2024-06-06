<?php

session_start();
session_destroy();
header("location:loginpaud.php?pesan=logout");

?> 