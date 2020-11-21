# Easy OpenAI GPT-3 API Wrapper for PHP
A simple and easy to use PHP wrapper for the OpenAI GPT-3 API.

Example usage:

```php
<?php

require_once '../includes/Openai.php';

$openai = New Openai();

//Engine, prompt and max tokens
$openai->request("ada", "This is a test", 5);

?>
```
