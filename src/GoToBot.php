<?php
declare(strict_types=1);
namespace App;

use App\Command\StartCommand;
use Longman\TelegramBot;

class GoToBot
{
    private string $name;
    private string $apiKey;

    public function __construct(string $name, string $apiKey)
    {
        $this->name   = $name;
        $this->apiKey = $apiKey;
    }

    public function run(): void
    {
        try {
            // Create Telegram API object
            $telegram = new TelegramBot\Telegram($this->apiKey, $this->name);

            $telegram->addCommandClass(StartCommand::class);
            $telegram->handle();

        } catch (TelegramBot\Exception\TelegramException $e) {
            //echo $e->getMessage();
        }
    }
}