<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::get();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            $validated = $request->validate([
                'email' => 'required|string',
                'date' => 'required|date',
                'customerName' => 'required|string',
                'phone' => 'required|string',
                'subject' => 'required|string',
                'comment' => 'required|string',
                'archived' => 'nullable|boolean'
            ]);
            
            $validated['archived'] = $request->has('archived');
            

            Review::create($validated);
            return redirect()->route('contact')->with('success', 'Created review');
        } catch(\Throwable $err) {
            report($err);
            return back()->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        $review = Review::findOrFail($id);
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        $review = Review::findOrFail($id);
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);

        $validated = $request->validate([
                'id' => 'required|string',
                'email' => 'required|string',
                'date' => 'required|date',
                'customerName' => 'required|string',
                'phone' => 'required|string',
                'subject' => 'required|string',
                'comment' => 'required|string',
                'archived' => 'required|boolean'
        ]);

        $validated['archived'] = $request->has('archived');

        \Log::info('Validated: ', $validated);
        $review->update($validated);

        return redirect()->route('reviews.index')->with('success', 'Review updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review = Room::findOrFail($id);
        $review->delte();

        return redirect()->route('reviews.index')->with('success', 'Review deleted succesfully');
    }
}
