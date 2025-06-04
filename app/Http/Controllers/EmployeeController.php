<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::get();
        return view('reviews.index', compact('employees'));
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
                'name' => 'required|string',
                'email' => 'required|sttring',
                'password' => 'required|string',
                'jobFunctions' => 'required|string',
                'registrationDate' => 'required|date',
                'phone' => 'string',
                'schelude' => 'string',
                'status' => 'required|boolean'
            ]);

            $validated['status'] = $request->has('status');
            \Log::info('Validated: ', $validated);

            Review::create($validated);
            return redirect()->route('employees.index')->with('success', 'Created employee');
        } catch(\Thwrowable $err) {
            report($err);
            return back()->withErrors(['error' => $err->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);
        $validated = $request->validate([
                'dni' => 'required|string',
                'name' => 'required|string',
                'email' => 'required|sttring',
                'password' => 'required|string',
                'jobFunctions' => 'required|string',
                'registrationDate' => 'required|date',
                'phone' => 'string',
                'schelude' => 'string',
                'status' => 'required|boolean'
        ]);
        $validated['status'] = $request->has('status');
        
        \Log::info('Validated: ', $validated);
        Review::update($validated);

        return redirect()->route('rooms.index')->with('success', 'Review updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted succewsfully');
    }
}
