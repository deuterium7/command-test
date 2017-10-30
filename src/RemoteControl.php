<?php

namespace AlexanderZabornyi\CommandTest;

class RemoteControl
{
    /**
     * Отправить команду
     *
     * @param CommandInterface $command
     *
     * @return mixed
     */
    public function submit(CommandInterface $command)
    {
        return $command->execute();
    }
}