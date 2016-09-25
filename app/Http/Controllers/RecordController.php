<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

use App\Http\Requests;

class RecordController extends Controller
{
    //
    public function index(){
        $records = Record::all();
        return view('records', ['records' => $records]);
    }

    public function showRecord($id){
        $record = Record::where('id', $id)->first();
        return view('record', ['record' => $record]);
    }

}
