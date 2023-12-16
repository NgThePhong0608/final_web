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
}
