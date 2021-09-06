<?php
require '../vendor/autoload.php';
use Slim\Factory\AppFactory;
//
//$dbConfig = [
//    'host' => 'mysql',
//    'name' => 'main',
//    'user' => 'root',
//    'pass' => 'root',
//    'port' => '3306',
//];
//
//$dsn = sprintf(
//    'mysql:host=%s;dbname=%s;port=%s;charset=utf8',
//    $dbConfig['host'],
//    $dbConfig['name'],
//    $dbConfig['port']
//);
//
//$pdo = new PDO($dsn, $dbConfig['user'], $dbConfig['pass']);
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//
//$query = "SELECT * from `places`";
//$st = $pdo->prepare($query);
//$st->execute();
//$res = $st->fetchAll();
//echo "<pre>";
//print_r($res);
//echo "</pre>";

$url = getenv('JAWSDB_MARIA_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

$settings = require __DIR__ . '/../src/App/Settings.php';
$hostname = $settings['db']['host'];
$username = $settings['db']['user'];
$password = $settings['db']['pass'];
$database = $settings['db']['name'];

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //echo "Connected successfully";
}  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

//$query = "SELECT * from `places`";
//$st = $conn->prepare($query);
//$st->execute();
//while ($res = $st->fetch()) {
//    echo "<pre>";
//    print_r($res);
//    echo "</pre>";
//}


$bot_api_key  = '1974042160:AAFmXM6KllULFtB7nkEnbQSeatvmD4uj1bg';
$bot_username = 'goto_story_bot';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // Handle telegram webhook request
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // Silence is golden!
    // log telegram errors
    //echo $e->getMessage();
}


$app = AppFactory::create();
$app->get('/hello', function ($request, $response, array $args) {
    echo "hello";
});



try {
    $app->run();
} catch (Exception $e) {

}

