<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Carbon\Carbon;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $rooms = Room::all();
        if ($request->has('rooms')) {
            $arrival = $request->query('arrival');
            $return = $request->query('return');

            if ($arrival && $return) {
                $arrivalDate = Carbon::parse($arrival);
                $returnDate = Carbon::parse($return);

                $rooms = Room::whereDoesntHave('bookings', function ($query) use ($arrivalDate, $returnDate) {
                    $query->where(function ($q) use ($arrivalDate, $returnDate) {
                        $q->whereBetween('checkInDate', [$arrivalDate, $returnDate])
                        ->orWhereBetween('checkOutDate', [$arrivalDate, $returnDate])
                        ->orWhere(function ($q2) use ($arrivalDate, $returnDate) {
                            $q2->where('checkInDate', '<', $arrivalDate)
                                ->where('checkOutDate', '>', $returnDate);
                        });
                    });
                })->get();
            }

            return view('rooms.list', compact('rooms'));
        } else if ($request->has('offers')) {
            return view('rooms.offers', compact('rooms'));
        }
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'roomName' => 'required|string',
                'roomType' => 'required|in:Single Bed, Double Bed, Double Superior, Suite',
                'roomFloor' => 'required|string',
                'status' => 'required|in:Booked, Available',
                'description' => 'string',
                'photos' => 'string',
                'offer' => 'boolean',
                'price' => 'decimal|min:0|max:100000',
                'discount' => 'decimal|min:0|max:100',
                'cancellationPolicy' => 'string',
                'roomAmenities' => 'in:3 Bed Space, 24 Hours Guard, Free Wifi, 2 Bathroom, Air Conditioner, Television'
            ]);

            $validated['offer'] = $request->has('offer');
            \Log::info('Validated: ', $validated);

            Room::create($validated);
            return redirect()->route('rooms.index')->with('success', 'Created activity');
        } catch(\Throwable $err) {
            report($err);
            return back()->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $room = Room::findOrFail($id);

            $relatedRooms = Room::where('id', '!=', $room->id)->inRandomOrder()->take(3)->get();
            return view('rooms.detail', compact('room', 'relatedRooms'));
        } catch(ModelNotFoundException $ex) {
            return redirect()->route('rooms.index');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.edit', compact('room')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = Room::findOrFail($id);

        $validated = $request->validate([
                'id' => 'required|string',
                'roomName' => 'required|string',
                'roomType' => 'required|in:Single Bed, Double Bed, Double Superior, Suite',
                'roomFloor' => 'required|string',
                'status' => 'required|in:Booked, Available',
                'description' => 'string',
                'photos' => 'string',
                'offer' => 'boolean',
                'price' => 'decimal|min:0|max:100000',
                'discount' => 'decimal|min:0|max:100',
                'cancellationPolicy' => 'string',
                'roomAmenities' => 'in:3 Bed Space, 24 Hours Guard, Free Wifi, 2 Bathroom, Air Conditioner, Television'
        ]);
        $validated['offer'] = $request-has('offer');
        
        \Log::info('Validated: ', $validated);
        $room->update($validated);

        return redirect()->route('rooms.index')->with('success', 'Room updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Activity deleted succesfully');
    }
}
