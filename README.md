# Easy OpenAI GPT-3 API Library for PHP
[![License](https://img.shields.io/github/license/mashape/apistatus.svg)](https://opensource.org/licenses/MIT)

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

# Requirements
All the examples require your OpenAI api token
```php
$secret_key = 'Bearer ******YOUR-KEY-HERE********';
```
