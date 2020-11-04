<?php

namespace App\Services;
use App\Interfaces\InviteInterface;


final class InviteService extends MomiceApiService implements InviteInterface
{
    public function getInvites(int $eventId): array
    {
        return $this->makeHmacGetRequest('events/' . $eventId . '/-/invites');
    }

    public function putInvites(int $eventId, array $data): array
    {
        return $this->makeHmacPutRequest('events/' . $eventId . '/-/invites', $data);
    }
}