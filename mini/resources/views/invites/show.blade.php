@extends('app')

@section('content')

<br>
<div class="card">
    <div class="card-body">
        <form action="/api/event/{{ $eventId }}/invite/{{  $invite['invite_id'] }}/edit" method="POST">
            <div class="form-group">
                <label for="firstname" class="col-sm-1 col-form-label">First name:</label>
                <input type="text" id="firstname" name="firstname" value="{{ $invite['firstname'] }}" class="form-control>
            </div>
            <br><br>
            <div class="form-group">
                <label for="lastname" class="col-sm-1 col-form-label">Last name:</label>
                <input type="text" id="lastname" name="lastname" value="{{ $invite['lastname'] }}" class="form-control>
            </div>
            <br>
            <div class="form-group">
                <label for="email" class="col-sm-1 col-form-label">Email:</label>
                <input type="text" id="email" name="email" value="{{ $invite['email'] }}" class="form-control>
            </div>
            <br>
            <input type="hidden" name="event_id" value="{{ $eventId }}">
            <input type="hidden" name="invite_id" value="{{  $invite['invite_id'] }}">

            <input type="submit" value="Submit" class="btn btn-primary mb-1">
        </form>
    </div>
</div>

@endsection