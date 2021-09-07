<?php
require '../vendor/autoload.php';

$bot_api_key  = getenv('TG_API_KEY');;
$bot_username = 'goto_story_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    $telegram->addCommandClass(StartCommand::class);
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    //echo $e->getMessage();
}