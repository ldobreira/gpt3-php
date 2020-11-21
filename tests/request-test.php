<?php

require_once '../includes/Openai.php';

$openai = New Openai();

$openai->request("ada", "This is a test", 5);

?>
