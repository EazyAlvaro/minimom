<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\EventService;
use App\Services\InviteService;
use App\Interfaces\EventInterface;
use App\Interfaces\InviteInterface;

class EventController extends Controller
{

    /** @var EventService $eventService */
    private $eventService;

    /** @var InviteService $inviteService */
    private $inviteService;

    public function __construct(
        EventInterface $eventService,
        InviteInterface $inviteService
    ) {
        $this->eventService = $eventService;
        $this->inviteService = $inviteService;
    }

    public function show($id)
    {
        $event = $this->eventService->getEvent($id);

        $invitees = $this->inviteService->getInvites($id);

        \Log::debug($invitees);

        $data = [
            'event' => $event,
            'invitees' => $invitees
        ];

        return view("events.show", $data);
    }

    public function list()
    {
        $results = $this->eventService->getAllEvents();
        return view("events.list", ['records' => $results]);
    }

}