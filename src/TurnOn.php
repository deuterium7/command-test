<?php

namespace AlexanderZabornyi\CommandTest;

class TurnOn implements CommandInterface
{
    protected $bulb;

    /**
     * TurnOn constructor.
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
        return $this->bulb->turnOn();
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
        return $this->bulb->turnOff();
    }
}