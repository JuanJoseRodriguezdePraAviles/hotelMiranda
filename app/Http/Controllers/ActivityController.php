<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::with('user')->get();
        return view('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validated = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'userId' => 'required|exists:users,id',
            'datetime' => 'required|date',
            'paid' => 'boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10'
        ]);
        $validated['userId'] = 1;
        $validated['paid'] = $request->has('paid');
        Activity::create($validated);
        return redirect()->route('activities.index')->with('success', 'Created activity');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::findOrFail($id);
        return response()->json($activity);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::findOeFail($id);

        $validated = $request->validate([
            'type' => 'sometimes|required|in:surf,windsurf,kayak,atv,hot air ballon',
            'userId' => 'sometimes|required|exists:users,id',
            'datetime' => 'sometimes|required|date',
            'paid' => 'sometimes|boolean',
            'notes' => 'sometimes|required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10'
        ]);

        $activity->update($validated);
        return response()->json($activity);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return response()->json(['message' => 'Activity deleted']);
    }
}
