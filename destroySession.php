<?php

include './inc/header.php';

session_destroy();
header('Location: index.php');
exit;

include './inc/footer.php';