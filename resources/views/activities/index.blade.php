<!DOCTYPE html>
<html>
<head>
    <title>Activity List</title>
</head>
<body>
    <h1>ACTIVITIES</h1>

    <p>Esto es una prueba de la vista.</p>

    @if(count($activities) > 0)
        <ul>
            @foreach($activities as $activity)
                <li>{{ $activity->type }} - {{ $activity->datetime }}</li>
            @endforeach
        </ul>
    @else
        <p>No activities</p>
    @endif
</body>
</html>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif