<?php

namespace App\Services;

use App\Interfaces\EventInterface;

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

    /**
     * @deprecated no longer needed here, but i left it in to show i worked on it ;)
     */
    public function putEvent(int $id, array $data): array
    {
       return $this->makeHmacPutRequest('events/' . $id , $data);
    }
}