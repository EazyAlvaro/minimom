<?php

namespace App\Interfaces;

interface HMACInterface
{

    /**
     * create a HMAC signature in the format of <timestamp>.<pubkey>.<digest>
     * 
     * @return string eg: 1506341953.WqK7RFdpcPsHFYNQCtWKh4qp.641c5c0c37e892e19c8c971568ce38cf1e06f76d32af9ae2d648f4e6732ae487
     */
    public function createSignature(): string;
}