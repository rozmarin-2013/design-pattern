<?php

namespace App\EventChannel;

use App\EventChannel\PublisherInterface;

class Publisher implements PublisherInterface
{

    public function __construct(
        private string $channel,
        private EventChannelInterface $eventChannel
    ) {

    }

    public function publish(string $data): void
    {
        $this->eventChannel->publish($this->channel, $data);
    }
}