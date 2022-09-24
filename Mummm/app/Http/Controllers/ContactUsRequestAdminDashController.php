<?php

namespace App\Http\Controllers;

use App\Models\ContactUsRequest;
use Illuminate\Support\Facades\DB;

class ContactUsRequestAdminDashController extends Controller
{
    public function contactUsRequestIndex()
    {
        try {
            $contact_us_requests = ContactUsRequest::all();
            // return $contact_us_requests;
            return view('admin.contactUsRequest', compact('contact_us_requests'));
        } catch (\Exception$e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    // ================================================================
    // =================== destroy Request Function ===================
    // ================================================================
    public function destroyRequest($id)
    {
        try {
            $request = ContactUsRequest::find($id);
            if ($request) {
                DB::transaction(function () use ($request) {
                    $request->delete();
                });
                return redirect()->route('contactUsRequestIndex')->with('success', 'Deleted Successfully');
            } else {
                return redirect()->route('contactUsRequestIndex')->with('danger', 'This record does not exist in the records');
            }
        }catch (\Exception$e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
