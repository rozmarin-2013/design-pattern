<?php

namespace App\EventChannel;

interface PublisherInterface
{
    public function publish(string $data): void;
}