<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class FormSubmission extends Controller
{
    public function imageUploadPost(Request $request)
    {
        // Uploaded files must have extensions .png/.jpg/.jpeg and a maximum size of 2 MB.
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('images', $imageName);
        // $request->image->move(public_path('images'), $imageName);

        $image = new Image();
        $image->image_name = $imageName;
        $image->save();

        /* Store $imageName name in DATABASE from HERE */

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
