<!DOCTYPE html>
<html>
    <head>
        <title>Edit Activity</title>
    </head>
    <body>
        <h1>Edit Activity</h1>

        <form action="{{ route('activities.update', $activity->id) }}" method="POST">
            @csrf
            @method('PUT')

            <labe>Type:</label>
            <input type="text" name="type" value="{{ old('type', $activity->type) }}" required><br>

            
        </form>
    </body>
</html>