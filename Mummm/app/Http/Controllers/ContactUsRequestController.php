<?php

namespace App\Http\Controllers;

use App\Models\ContactUsRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreContactUsFormRequest;

class ContactUsRequestController extends Controller
{

    public function create()
    {
        try {

        } catch (\Throwable$th) {
            //throw $th;
        }
    }

    public function store(StoreContactUsFormRequest $request)
    {
        
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ];
            DB::transaction(function () use ($data) {
                ContactUsRequest::create($data);
            });
            return redirect()->back()->with('success', 'Contact Us Request Created Successfully');
        } catch (\Exception$e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
