<form action="/api/event/{{ $eventId }}/invite/{{  $invite['invite_id'] }}/edit" method="POST">
    <label for="firstname">First name:</label><br>
    <input type="text" id="firstname" name="firstname" value="{{ $invite['firstname'] }}"><br>

    <label for="lastname">Last name:</label><br>
    <input type="text" id="lastname" name="lastname" value="{{ $invite['lastname'] }}"><br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="{{ $invite['email'] }}"><br><br>

    <input type="hidden" name="event_id" value="{{ $eventId }}">
    <input type="hidden" name="invite_id" value="{{  $invite['invite_id'] }}">

    <input type="submit" value="Submit">
</form>


