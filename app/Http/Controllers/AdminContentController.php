<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminPanelContent;

class AdminContentController extends Controller
{
    public function index()
    {
        $content = AdminPanelContent::first();
        return view('admin.index', compact('content'));
    }

    public function update(Request $request)
    {
        // Retrieve the first or create a new instance if not found
        $content = AdminPanelContent::firstOrNew(); 
        // Update the fields
        $content->fill([
            'homepage_text' => $request->input('homepage_text'),
            'telephone_number' => $request->input('telephone_number'), 
            // Add other fields as needed
        ]);
    
        // Save the changes
        $content->save();
        $this->handleImageUpload($request, $content);
        return redirect()->route('admin.index')->with('success', 'Content updated successfully.');
    }
    
    private function handleImageUpload(Request $request, AdminPanelContent $content)
    {
        // Handle image 1 upload
        if ($request->hasFile('image_1')) {
            $imagePath = $request->file('image_1')->store('images', 'public');
            $content->image_path_1 = $imagePath;
        }
    
        // Handle image 2 upload
        if ($request->hasFile('image_2')) {
            $imagePath = $request->file('image_2')->store('images', 'public');
            $content->image_path_2 = $imagePath;
        }
    
        // Handle image 3 upload
        if ($request->hasFile('image_3')) {
            $imagePath = $request->file('image_3')->store('images', 'public');
            $content->image_path_3 = $imagePath;
        }
    
        // Save the model after handling image uploads
        $content->save();
    }
}
