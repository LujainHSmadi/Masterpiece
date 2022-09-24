<?php

namespace App\Http\Controllers;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class SubscriberController extends Controller
{
    public function subscribe(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers',
        ]);

        if ($validator->fails()) {
            return new JsonResponse([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }
        $email = $request->all()['email'];
        $subscriber = Subscriber::create([
            'email' => $mail,
        ]);

        if($subscriber){
            Mail::to($email)->send(new Subscribe($email));
            return new JsonResponse([
                'success' => true,
                'message' => 'You have successfully subscribed to our Kitchen',
            ], 200);
        }
    }
}
