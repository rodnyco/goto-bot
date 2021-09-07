<?php
declare(strict_types=1);

namespace App\Command;

class StartCommand extends \Longman\TelegramBot\Commands\SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'start';

    /**
     * @var string
     */
    protected $description = 'Start command';

    /**
     * @var string
     */
    protected $usage = '/start';

    /**
     * @var string
     */
    protected $version = '0.0.1';

    /**
     * @var bool
     */
    protected $private_only = true;

    /**
     * Main command execution
     *
     * @return \Longman\TelegramBot\Entities\ServerResponse
     * @throws TelegramException
     */
    public function execute(): \Longman\TelegramBot\Entities\ServerResponse
    {
        // If you use deep-linking, get the parameter like this:
        // $deep_linking_parameter = $this->getMessage()->getText(true);

        return $this->replyToChat(
            'Привет! Этот бот поможет тебя сохранять места, в которые обязательно нужно сходить' . PHP_EOL .
            'Type /help to see all commands!'
        );
    }
}