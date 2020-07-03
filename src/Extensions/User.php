<?php

namespace BotMan\Drivers\Slack\Extensions;

use BotMan\Drivers\Slack\SlackClient\User as SlackUser;
use BotMan\BotMan\Interfaces\UserInterface;

class User extends SlackUser implements UserInterface
{
    /**
     * @return array
     */
    public function getInfo()
    {
        return $this->getRawUser();
    }
}
