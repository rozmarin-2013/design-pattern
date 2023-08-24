<?php

namespace App\EventChannel;

interface EventChannelInterface
{
    public function subscribe(string $channel, SubscriberInterface $subscriber);

    public function publish(string $channel, string $data);
}