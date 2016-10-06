<?php

namespace App\Http\Controllers;

use App\Option;
use App\Record;
use App\Test;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

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

        //validation ok

        $inputs = $request->except('_token');
        //dd($inputs);

        if(count($inputs) == 21){

            //Associate the test
            $test = Test::where('acronym', 'dass21')->first();

            //Create new record
            $record = new Record;
            $record->test()->associate($test);
            $record->save();

            //Attach selected options
            foreach ($inputs as $key => $value){
                $option = Option::where('id', $value)->first();
                $record->options()->attach($option);
            }

            //calculate score
            $depression = 0;
            $anxiety = 0;
            $stress = 0;

            //dd($record->test->questions[0]->measures[0]->name);

            foreach ($record->test->questions as $key => $question){

                if($question->measures[0]->name == 'Depression'){
                    $anxiety = $anxiety + $record->options[$key]->score;
                    $stress = $stress + $record->options[$key]->score;
                }
                elseif($question->measures[0]->name == 'Anxiety'){
                    $depression = $depression + $record->options[$key]->score;
                    $stress = $stress + $record->options[$key]->score;
                }
                elseif($question->measures[0]->name == 'Stress'){
                    $depression = $depression + $record->options[$key]->score;
                    $anxiety = $anxiety + $record->options[$key]->score;
                }
            }

            $record->depression = $depression;
            $record->anxiety = $anxiety;
            $record->stress = $stress;
            $record->score = $depression + $anxiety + $stress;
            $record->save();


            //display record
            return redirect('records/'.$record->id);

        }
        else
            return redirect('test/1');
    }
    public function bai(Request $request){

        //validation ok

        $inputs = $request->except('_token');
        //dd($inputs);

        if(count($inputs) == 21){

            //Associate the test
            $test = Test::where('acronym', 'bai')->first();

            //Create new record
            $record = new Record;
            $record->test()->associate($test);
            $record->save();

            //Attach selected options
            foreach ($inputs as $key => $value){
                $option = Option::where('id', $value)->first();
                $record->options()->attach($option);
            }

            //calculate score
            $depression = 0;
            $anxiety = 0;
            $stress = 0;

            //dd($record->test->questions[0]->measures[0]->name);

            foreach ($record->test->questions as $key => $question){

                if($question->measures[0]->name == 'Depression'){
                    $anxiety = $anxiety + $record->options[$key]->score;
                    $stress = $stress + $record->options[$key]->score;
                }
                elseif($question->measures[0]->name == 'Anxiety'){
                    $depression = $depression + $record->options[$key]->score;
                    $stress = $stress + $record->options[$key]->score;
                }
                elseif($question->measures[0]->name == 'Stress'){
                    $depression = $depression + $record->options[$key]->score;
                    $anxiety = $anxiety + $record->options[$key]->score;
                }
            }

            $record->depression = $depression;
            $record->anxiety = $anxiety;
            $record->stress = $stress;
            $record->score = $depression;
            $record->save();


            //display record
            return redirect('records/'.$record->id);

        }
        else
            return redirect('test/1');
    }
    public function bdi(Request $request){

        //validation ok

        $inputs = $request->except('_token');
        //dd($inputs);

        if(count($inputs) == 21){

            //Associate the test
            $test = Test::where('acronym', 'bdi')->first();

            //Create new record
            $record = new Record;
            $record->test()->associate($test);
            $record->save();

            //Attach selected options
            foreach ($inputs as $key => $value){
                $option = Option::where('id', $value)->first();
                $record->options()->attach($option);
            }

            //calculate score
            $depression = 0;
            $anxiety = 0;
            $stress = 0;

            //dd($record->test->questions[0]->measures[0]->name);

            foreach ($record->test->questions as $key => $question){

                if($question->measures[0]->name == 'Depression'){
                    $anxiety = $anxiety + $record->options[$key]->score;
                    $stress = $stress + $record->options[$key]->score;
                }
                elseif($question->measures[0]->name == 'Anxiety'){
                    $depression = $depression + $record->options[$key]->score;
                    $stress = $stress + $record->options[$key]->score;
                }
                elseif($question->measures[0]->name == 'Stress'){
                    $depression = $depression + $record->options[$key]->score;
                    $anxiety = $anxiety + $record->options[$key]->score;
                }
            }

            $record->depression = $depression;
            $record->anxiety = $anxiety;
            $record->stress = $stress;
            $record->score = $depression;
            $record->save();


            //display record
            return redirect('records/'.$record->id);

        }
        else
            return redirect('test/1');
    }

}
