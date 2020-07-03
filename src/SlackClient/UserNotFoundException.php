<?php
namespace BotMan\Drivers\Slack\SlackClient;

use RuntimeException;

class UserNotFoundException extends RuntimeException implements Exception
{
}
