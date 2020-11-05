@extends('app')

@section('content')
    @foreach ($records as $record)
    <br>
    <div class="card">
        <div class="card-body">
            <a href='/event/{{ $record['event_id'] }}'>
            <h3 class="card-title">{{ $record['title'] }}</h3>
            </a>
            Project: {{ $record['project'] ?? 'None' }}<br>
            Opens: {{ $record['date_start'] }}<br>
            Closes: {{ $record['date_end'] }}<br>
            Organizer: {{ $record['user'] ?? 'Undisclosed'}}<br>
            Website: {{ $record['url']}}
        </div>
    </div>
    @endforeach
@endsection