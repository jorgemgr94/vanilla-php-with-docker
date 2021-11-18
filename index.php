<?php
require $_SERVER['DOCUMENT_ROOT'] . "/app/lib/functions.php";

validate_session();

header("Location: /app/modules/home");
die();