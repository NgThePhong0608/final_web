<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BookTable;
use Illuminate\Http\Request;

class BookTableController extends Controller
{
    public function insertBooking(Request $request)
    {
        $data = $request->all();
        $bookTable = BookTable::create($data);
        return response()->json([
            'status' => true,
            'message' => 'Booking successfully!',
            'data' => $bookTable
        ]);
    }

    public function getAllBookings()
    {
        $bookTables = BookTable::all();
        return response()->json([
            'status' => true,
            'message' => 'Get all bookings successfully!',
            'data' => $bookTables
        ]);
    }
}
