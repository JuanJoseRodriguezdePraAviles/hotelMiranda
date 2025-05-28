
<h1>Crear Actividad</h1>
<form action="{{ route('activity.store') }}" method="POST">
    @csrf
     <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="surf">Surf</option>
            <option value="windsurf">Windsurf</option>
            <option value="kayak">Kayak</option>
            <option value="atv">ATV</option>
            <option value="hot air ballon">Hot Air Balloon</option>
        </select>

        <label for="datetime">Date:</label>
        <input type="datetime-local" name="datetime" id="datetime" required>

        <label for="paid">Paid:</label>
        <input type="checkbox" name="paid" id="paid" value="1">

        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes" required></textarea>

        <label for="satisfaction">Satisfaction (0-10):</label>
        <input type="number" name="satisfaction" id="satisfaction" min="0" max="10">
    <button type="submit">Save</button>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
