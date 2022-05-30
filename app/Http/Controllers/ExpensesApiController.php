<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpensesApiController extends Controller
{
    public function index(){
        return Expense::all();
    }

    public function store(){
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'descp' => 'required'
        ]);
        return Expense::create([
            'name' => request('name'),
            'price' => request('price'),
            'descp' => request('descp')
        ]);
    }

    public function update(Expense $expense){
        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'descp' => 'required'
        ]);
        $success = $expense->update([
            'name' => request('name'),
            'price' => request('price'),
            'descp' => request('descp')
        ]);

        return [
            'success' => $success
        ];
    }

    public function delete(Expense $expense){
        $success = $expense->delete();

        return [
            'success' => $success
        ];
    }
}
