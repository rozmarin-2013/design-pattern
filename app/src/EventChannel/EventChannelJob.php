<?php

namespace App\EventChannel;

class EventChannelJob
{
    public function __invoke(): void
    {
        $eventChannel = new EventChannel();

        $publisherNewApple = new Publisher('apple', $eventChannel);

        $subscriber = new Subscriber('Apple man');

        $eventChannel->subscribe('apple', $subscriber);

        $publisherNewApple->publish('fresh apple');
    }
}