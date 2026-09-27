<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'guest_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'room_type' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
        ]);

        Booking::create($validated);

        return response()->json([
            'message' => 'Aapki booking successfully confirm ho gayi hai! ✨'
        ], 200);
    }
}