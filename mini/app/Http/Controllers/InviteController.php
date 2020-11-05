<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class InviteController extends MomiceController
{
    public function show(int $eventId, int $inviteId): View
    {
        $invite = $this->inviteService->getInvite($eventId, $inviteId);
        return view("invites.show", [
            'invite' => $invite,
            'eventId' => $eventId
        ]);
    }

    public function put(Request $request, int $eventId, int $inviteId): View
    {
        $requestData = $request->all();
        $invites = $this->inviteService->getInvites($eventId);

        // we take this approach because the invites array has 'standard' array keys
        // meaning the standard collection merge/replace functions do nothing for us
        $invitesUpdated = collect($invites)->transform(function (array $invite) use ($requestData) {
            try {
                if ((int)$invite['invite_id'] === (int)$requestData['invite_id']) {
                    $invite['firstname'] = $requestData['firstname'];
                    $invite['lastname'] = $requestData['lastname'];
                    $invite['email'] = $requestData['email'];
                }
            } catch (\Exception $ex) {
                \Log::error($ex->getMessage());
                // Let's just pretend i did some pretty error handling here
            }
            return $invite;
        })->toArray();

        $this->inviteService->putInvites($eventId, $invitesUpdated);

        // fetch/show the record again to confirm persistence
        $invite = $this->inviteService->getInvite($eventId, $inviteId);
        return view("invites.show", [
            'invite' => $invite,
            'eventId' => $eventId
        ]);
    }
}
