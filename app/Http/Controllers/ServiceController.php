<?php

namespace App\Http\Controllers;

use App\Models\GeneralBooking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    //
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'comment' => 'nullable',
            'city' => 'nullable',
        ],[
            'name.required' => 'برجاء ادخال الاسم',
            'phone.required' => 'برجاء ادخال رقم الجوال',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->service_id == 0) {
            GeneralBooking::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'comment' => $request->comment,
                'city' => $request->city,
            ]);
        }else{
            $service = Service::find($request->service_id);
            $service->bookings()->create([
                'name' => $request->name,
                'phone' => $request->phone,
                'comment' => $request->comment,
                'city' => $request->city,
            ]);
        }
        return redirect()->route('booking.success')->with('success', 'Booking created successfully');
    }
    public function success()
    {
        return view('booking-success');
    }
}
