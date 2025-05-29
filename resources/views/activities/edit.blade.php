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
            <select name="type" required>
                <option value="surf" {{ $activity->type === 'surf' ? 'selected' : '' }}>Surf</option>
                <option value="windsurf" {{ $activity->type === 'windsurf' ? 'selected' : '' }}>Windurf</option>
                <option value="kayak" {{ $activity->type === 'kayak' ? 'selected' : '' }}>Kayak</option>
                <option value="atv" {{ $activity->type === 'atv' ? 'selected' : '' }}>ATV</option>
                <option value="hot air balloon" {{ $activity->type === 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
            </select>

            <label>DateTime</label>
            <input type="datetime-local" name="datetime" value="{{ old('datetime', \Carbon\Carbon::parse($activity->datetime)->format('Y-m-d\TH:i')) }}" required><br>

            <label>Paid:</label>
            <input type="checkbox" name="paid" {{ $activity->paid ? 'checked' : ''}}><br>

            <label>Notes:</label>
            <textarea name="notes" required>{{ old('notes', $activity->notes) }}</textarea><br>

            <label>Satisfaction:</label>
            <input type="number" name="satisfaction" min="0" max="10" value="{{ old('satisfaction', $activity->satisfaction) }}"><br>

            <button type="submit">Update</button>
        </form>
        <a href="{{ route('activities.index') }}">Back to list</a>
        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </body>
</html>
