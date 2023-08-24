<?php

namespace App\EventChannel;

class EventChannel implements EventChannelInterface
{
    /**
     * @var SubscriberInterface[]
     */
    private array $subscribers = [];

    public function subscribe(string $channel, SubscriberInterface $subscriber): void
    {
        $this->subscribers[$channel][] = $subscriber;
    }

    public function publish(string $channel, string $data): void
    {
        /* @var SubscriberInterface $subscriber*/
        foreach ($this->subscribers[$channel] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}