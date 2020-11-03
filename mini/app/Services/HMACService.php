<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\interfaces\HMACInterface;

class HMACService implements HMACInterface
{

    private function getTimestamp(): int
    {
        return DateTime::getTimestamp();
    }

    private function createPayload(): string
    {
        return sprintf(
            $this->getTimestamp(),
            config('app.pubkey'),
            '%s.%s'
        );
    }

    private function createDigest(string $payload): string
    {
        // hex encoded ?
        return  Str::lower(hash_hmac('sha256', $payload, config('app.secretkey'), true));
    }

    public function getSignature(): string
    {
        $payload = $this->createPayload();
        $digest = $this->createDigest($payload);

        return sprintf($payload, $digest, '%s.%s');
    }


}