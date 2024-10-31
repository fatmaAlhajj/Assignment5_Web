<?php

namespace App\Http\Controllers;
use App\Http\Requests\RuleRequest;
use Illuminate\Http\Request;

class NameFaile extends Controller
{ 
    
    public function create()
    {
        return view('Create');
    }

    public function store(RuleRequest $request)
    {
        // تم التحقق من المدخلات بواسطة Form Request

        // معالجة البيانات هنا
       $filePath = $request->file('file')->store('uploads', 'public');

       return back()->with('success', 'File uploaded successfully: ' . $filePath);
    }

}
