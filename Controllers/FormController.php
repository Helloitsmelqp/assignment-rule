<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Name;
use App\Rules\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function sendform(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', new Name()],
            'file' => ['required', 'file', new Image(), 'max:1024'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // حفظ الملف في المجلد العام
        $path = $request->file('file')->store('images', 'public');

        return 'Form Sent successfully! File stored at: ' . $path;
    }
}
