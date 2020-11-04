<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Services\HMACService;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Client\PendingRequest;


abstract class MomiceApiService
{
    protected $basePath = 'https://api-dev.momice.com/v1/';


    /** @var HMACService $hmacService */
    private $hmacService;

    public function __construct()
    {
        $this->hmacService = app(HMACService::class);
    }


    protected function path(): string
    {
        return $this->basePath;
    }

    protected function makeHmacRequest(): PendingRequest
    {
        return Http::withHeaders([
            'X-Signature' => $this->hmacService->getSignature()
        ]);
    }

    protected function makeHmacGetRequest(string $endpoint): array
    {
        $response = $this->makeHmacRequest()->get($this->path() . $endpoint);
        //TODO catch exceptions and return suitable JSON for it
        return $response->json();
    }

    protected function makeHmacPutRequest(string $endpoint, array $data): array
    {
        $response = $this->makeHmacRequest()->put($this->path() . $endpoint, $data);
        return $response->json();
    }
}