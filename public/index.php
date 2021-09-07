<?php
require '../vendor/autoload.php';
use App\Bot;

$bot = new Bot\GoToBot('goto_story_bot', '1974042160:AAEo9-pbxuHbn8lHIf5E2Arhc0JZ7DZNryo');
$bot->run();