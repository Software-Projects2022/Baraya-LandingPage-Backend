<?php

namespace App\Http\Controllers;

use App\Models\GeneralBooking;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'comment' => 'nullable',
            'city' => 'nullable',
        ]);

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
        return redirect()->back()->with('success', 'Booking created successfully');
    }

}
