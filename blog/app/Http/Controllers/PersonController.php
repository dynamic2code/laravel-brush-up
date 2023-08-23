<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'profession' => 'required|string',
        ]);

        // Create a new Person instance and fill it with the validated data
        $person = new Person($validatedData);

        // Save the person to the database
        $person->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Person has been added successfully.');
    }

    public function get()
    {
        $people = Person::all(); // Retrieve all records from the Person model

        return view('people.index', compact('people')); // Send the records to the view
    }

}
