<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BillDetails;
use Illuminate\Http\Request;

class BillDetailsController extends Controller
{
    public function insertBillDetails(Request $request)
    {
        $data = $request->all();
        $newBillDetail = BillDetails::create($data);
        return response()->json($newBillDetail);
    }

    public function getBillDetails($id)
    {
        $billDetails = BillDetails::where('bill_id', $id)->get();
        return response()->json($billDetails);
    }
}
