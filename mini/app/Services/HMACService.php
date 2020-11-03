<?php

namespace App\Services;

use Illuminate\Support\Str;
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
        \Log::debug('----');
        $payload = $this->createPayload();
        \Log::debug($payload, ['payload']);

        $digest = $this->createDigest($payload);


        \Log::debug($digest, ['digest']);

        $signature = $payload . '.' . $digest;

        \Log::debug($signature, ['signature']);

        return $signature;
    }


}