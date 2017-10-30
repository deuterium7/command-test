<?php

namespace AlexanderZabornyi\CommandTest;

class TurnOff implements CommandInterface
{
    protected $bulb;

    /**
     * TurnOff constructor.
     *
     * @param Bulb $bulb
     */
    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    /**
     * Выполнить
     *
     * @return string
     */
    public function execute(): string
    {
        return $this->bulb->turnOff();
    }

    /**
     * Перезагрузить
     *
     * @return string
     */
    public function redo(): string
    {
        return $this->execute();
    }

    /**
     * Отменить действие
     *
     * @return string
     */
    public function undo(): string
    {
        return $this->bulb->turnOn();
    }
}