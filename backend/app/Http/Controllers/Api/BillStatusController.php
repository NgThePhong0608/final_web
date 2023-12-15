<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BillStatus;
use Illuminate\Http\Request;

class BillStatusController extends Controller
{
    public function getNewestId()
    {
        $latestBill = BillStatus::orderBy('id', 'desc')->first();
        return response()->json($latestBill);
    }

    public function insertBillStatus(Request $request)
    {
        $data = $request->all();
        $newBillStatus = BillStatus::create($data);
        return response()->json($newBillStatus);
    }

    public function getBillsByUser($id)
    {
        $billsByUser = BillStatus::where('user_id', $id)->get();
        return response()->json($billsByUser);
    }

    public function getBillsByBill($id)
    {
        $billsByBill = BillStatus::where('id', $id)->get();
        return response()->json($billsByBill);
    }

    public function getAll()
    {
        $allBills = BillStatus::all();
        return response()->json($allBills);
    }

    public function updateStatus($id)
    {
        $updatedStatus = BillStatus::where('id', $id)->increment('bill_status');
        return response()->json($updatedStatus);
    }

    public function updatePaid($id)
    {
        $updatedPaid = BillStatus::where('id', $id)->update(['bill_paid' => true]);
        return response()->json($updatedPaid);
    }

    public function cancelStatus($id)
    {
        $canceledStatus = BillStatus::where('id', $id)->update(['bill_status' => 0]);
        $canceledPaid = BillStatus::where('id', $id)->update(['bill_paid' => false]);

        return response()->json(['status' => $canceledStatus, 'paid' => $canceledPaid]);
    }
}
