<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $registration = new Registration();

        $registration->name = $request->input('name');
        $registration->email = $request->input('email');
        $registration->post = $request->input('post');

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extensions = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extensions;
            $file->move('uploads/registration/', $filename);
            $registration->image = $filename;
        }
        else
        {
            return $request;
            $registration->image = '';
        }

        $registration->save();

        return view('registration')->with('message', 'The post has been added!');
        // return back()->with('message', 'The post has been added!');
    }
}
