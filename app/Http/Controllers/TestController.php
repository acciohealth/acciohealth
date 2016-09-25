<?php

namespace App\Http\Controllers;

use App\Option;
use App\Record;
use App\Test;
use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function index(){
        $tests = Test::all();
        return view('tests', ['tests' => $tests]);
    }

    public function showtest($id){
        $test = Test::where('id', $id)->first();
        return view('test-form', ['test' => $test]);
    }
    
    public function dass21(Request $request){

        $test = Test::where('name', 'Dass 21')->first();
        //validation ok

        //Create new record
        $record = new Record;
        $record->test()->associate($test);
        $record->save();

        $inputs = $request->except('_token');

        foreach ($inputs as $key => $value){
            $option = Option::where('id', $value)->first();
            $record->options()->attach($option);
        }

        //calculate score
        $score = null;

        foreach ( $record->options as $option){
            $score = $score + $option->score;
        }

        $record->score = $score;
        $record->save();
        
        //display record
        return redirect('records/'.$record->id);
    }
}
