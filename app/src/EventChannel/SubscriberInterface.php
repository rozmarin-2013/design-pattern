<?php

namespace App\EventChannel;

interface SubscriberInterface
{
    public function notify(string $data): void;
}