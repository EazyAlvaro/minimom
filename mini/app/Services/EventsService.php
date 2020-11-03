<?php

namespace App\Services;

use App\Interfaces\EventInterface;
use Illuminate\Support\Facades\Http;
use App\Services\HMACService;

final class EventService extends MomiceApiService implements EventInterface
{
    public function getAllEvents(): array
    {
        return $this->makeHmacGetRequest('events');
    }

    public function getEvent(int $id): array
    {
        return $this->makeHmacGetRequest('events/' . $id);
    }
}