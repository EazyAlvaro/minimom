<?php

namespace App\Services;

use App\Interfaces\HMACInterface;

class HMACService implements HMACInterface
{

    private function getTimestamp(): int
    {
        return (new \DateTime)->getTimestamp();
    }

    private function createPayload(): string
    {
        return $this->getTimestamp() . '.' . config('app.momicepublic');
    }

    private function createDigest(string $payload): string
    {
        return hash_hmac('sha256', $payload, config('app.momicesecret'));
    }

    public function getSignature(): string
    {
        $payload = $this->createPayload();
        return $payload . '.' . $this->createDigest($payload);
    }
}
