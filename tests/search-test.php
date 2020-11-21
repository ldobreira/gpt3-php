<?php

require_once '../includes/Openai.php';

$openai = New Openai();

$documents = ["White House", "hospital", "school"];
$query = "the president";

$openai->search("ada", $documents, $query);

?>
