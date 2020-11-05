<?php

namespace App\Interfaces;

interface InviteInterface
{
    public function getInvites(int $eventId): array;

    public function getInvite(int $eventId, int $inviteId): array;

    public function putInvites(int $eventId, array $data): array;
}
