<?php

namespace App\EventChannel;

use App\EventChannel\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    public function notify(string $data): void
    {
        echo $data;
    }
}