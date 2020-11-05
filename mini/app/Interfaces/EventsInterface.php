<?php

namespace App\Interfaces;

interface EventInterface
{

    public function getAllEvents(): array;

    public function getEvent(int $id): array;

    /**
     * @deprecated no longer needed here, but i left it in to show i worked on it ;)
     */
    public function putEvent(int $id, array $data): array;
}
