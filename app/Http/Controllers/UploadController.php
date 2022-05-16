<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function uploadSingle(Request $request)
    {
        if($request->hasFile('file')) {
            $file = $request->file('file');

            if($file->isValid()) {
                $filePath = $file->store('public/uploads');
                $fileName = basename($filePath);

                return redirect()->back()->with('message','File uploaded.');
            }
        }
        return redirect()->back();
    }

    public function uploadMultiple(Request $request)
    {
        if($request->hasFile('files')) {
            $files = $request->file('files');

            foreach ($files as $key => $file) {
                if($file->isValid()) {
                    $filePath = $file->store('public/uploads');
                    $fileName = basename($filePath);
                }
            }
            return redirect()->back()->with('message','File uploaded.');
        }
        return redirect()->back();
    }

    public function uploadSingleCustom(Request $request)
    {
        if($request->hasFile('file')) {
            $file = $request->file('file');

            if($file->isValid()) {
                $destinationPath = public_path('uploads');
                $extension = $file->getClientOriginalExtension();
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $originalName . '-' . uniqid() . '.' . $extension;
                $file->move($destinationPath, $fileName);

                return redirect()->back()->with('message','File uploaded.');
            }
        }
        return redirect()->back();
    }

    public function uploadMultipleCustom(Request $request)
    {
        if($request->hasFile('files')) {
            $files = $request->file('files');

            foreach ($files as $key => $file) {
                if($file->isValid()) {
                    $destinationPath = public_path('uploads');
                    $extension = $file->getClientOriginalExtension();
                    $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $fileName = $originalName . '-' . uniqid() . '.' . $extension;
                    $file->move($destinationPath, $fileName);
                }
            }
            return redirect()->back()->with('message','File uploaded.');
        }
        return redirect()->back();
    }
}
