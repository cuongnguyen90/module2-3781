<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function add()
    {
        return view('add');
    }
    public function show()
    {
        return view('show');
    }
    public function store(Request $request)
    {
        $tasks = new \stdClass();
        $tasks->title = $request->inputTitle;
        $tasks->content = $request->inputContent;
        $tasks->due_date = $request->inputDueDate;

        $file = $request->inputFile;

        if (!$request->hasFile('inputFile')){
            $tasks->image = $file;
        }else{
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = time()."_".rand(0,999999).".".$fileExtension;
            $tasks->image = $newFileName;
            $request->file('inputFile')->storeAs(public_path('images'), $newFileName);

        }

        return redirect()->route('tasks.index');
    }
}
