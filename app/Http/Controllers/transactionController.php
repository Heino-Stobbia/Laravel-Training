<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

class transactionController extends Controller {
    //CRUD (Create, Read, Update, Delete)

    public function index() {
        return response()->json(transaction::all());
    }

    public function store(Request $request) {

        transaction::create([
            'transaction_number' => $request->transaction_number,
            'amount' => $request->amount,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction '. $request->transaction_number . ' saved successfully!'
        ]);
    
    }

    public function getSingleRecord($id) {

        $record = transaction::find($id);

        return response()->json($record);
        
    }

    // public function updateRecord_example(Request $request, $id) {

    //     transaction::where('id', $id)->update([
    //         'transaction_number' => $request->transaction_number,
    //         'amount' => $request->amount,
    //     ]);

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Transaction updated successfully!'
    //     ]);
    // }

    public function updateRecord(Request $request, transaction $transaction) {

        $transaction->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Transaction updated successfully!'
        ]);
    }

    public function deleteRecord(transaction $transaction) {

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaction deleted successfully!'
        ]);
    }

    // public function deleteRecord($id) {

    //     transaction::where('id', $id)->delete();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Transaction deleted successfully!'
    //     ]);
    // }

}
