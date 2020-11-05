<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\EventService;
use App\Services\InviteService;
use App\Interfaces\EventInterface;
use App\Interfaces\InviteInterface;

abstract class MomiceController extends Controller
{
    /** @var EventService $eventService */
    protected $eventService;

    /** @var InviteService $inviteService */
    protected $inviteService;

    public function __construct(
        EventInterface $eventService,
        InviteInterface $inviteService
    ) {
        $this->eventService = $eventService;
        $this->inviteService = $inviteService;
    }
}
