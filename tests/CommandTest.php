<?php

namespace AlexanderZabornyi\CommandTest\Tests;

use AlexanderZabornyi\CommandTest\Bulb;
use AlexanderZabornyi\CommandTest\RemoteControl;
use AlexanderZabornyi\CommandTest\TurnOff;
use AlexanderZabornyi\CommandTest\TurnOn;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand()
    {
        $bulb = new Bulb();

        $turnOn = new TurnOn($bulb);
        $turnOff = new TurnOff($bulb);

        $remoteControl = new RemoteControl();

        $this->assertEquals('Лампочка зажглась!', $remoteControl->submit($turnOn));
        $this->assertEquals('Темнота!', $remoteControl->submit($turnOff));
    }
}