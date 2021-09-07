<?php
require '../vendor/autoload.php';

use App\GoToBot;

$bot = new GoToBot('goto_story_bot', '1974042160:AAEo9-pbxuHbn8lHIf5E2Arhc0JZ7DZNryo');
$bot->run();