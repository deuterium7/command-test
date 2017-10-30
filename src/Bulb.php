<?php

namespace AlexanderZabornyi\CommandTest;

class Bulb
{
    /**
     * Включить лампочку
     *
     * @return string
     */
    public function turnOn(): string
    {
        return 'Лампочка зажглась!';
    }

    /**
     * Выключить лампочку
     *
     * @return string
     */
    public function turnOff(): string
    {
        return 'Темнота!';
    }
}