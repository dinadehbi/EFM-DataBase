<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    // Show the edit form for a specific suggestion
    public function edit($id)
    {
        $suggestion = Suggestion::findOrFail($id); // Find the suggestion by ID
        return view('suggestions.edit', compact('suggestion')); // Return the view to edit suggestion
    }

    // Update the suggestion in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'content' => 'required|string|max:255', // Validate content field
        ]);

        // Find and update the suggestion
        $suggestion = Suggestion::findOrFail($id);
        $suggestion->content = $request->input('content'); // Update the content
        $suggestion->save(); // Save the changes

        return redirect()->route('suggestions.index')->with('success', 'Suggestion updated successfully.');
    }
}
