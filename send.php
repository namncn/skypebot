<?php
/**
 * This example sends message to skype test call. On my Linux, Skype v4.X does
 * not allow to send messages to echo123 contact.
 */
require_once __DIR__ . '/Chat.php';
use Skypebot\Chat;

$chat = new Chat;
$id = $chat->create(array('echo123'));
$chat->sendMessage($id, 'test');
