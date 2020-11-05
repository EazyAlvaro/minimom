<?php

namespace App\Services;

use App\Interfaces\InviteInterface;


final class InviteService extends MomiceApiService implements InviteInterface
{
    public function getInvites(int $eventId): array
    {
        return $this->makeHmacGetRequest('events/' . $eventId . '/-/invites');
    }

    /**
     * There is no endpoint to get a single invite, so we emulate the effect with a collection filter
     */
    public function getInvite(int $eventId, int $inviteId): array
    {
        $invites = $this->makeHmacGetRequest('events/' . $eventId . '/-/invites');

        return collect($invites)->filter(
            function ($invite) use ($inviteId) {
                return $invite['invite_id'] === $inviteId;
            }
        )->first();
    }

    public function putInvites(int $eventId, array $data): array
    {
        return $this->makeHmacPutRequest('events/' . $eventId . '/-/invites', $data);
    }
}
