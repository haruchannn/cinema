<?php


namespace App\Http\Controllers;

use App\Models\Practice;

class PracticeController extends Controller
{
    public function sample()
    {
        return view('practice');
    }

    public function sample2()
    {
        $test = 'practice2';
        return view('practice2', ['testParam' => $test]);
    }

    public function sample3()
    {
        $testPram = 'test';
        return view('practice2', ['testParam' => $testPram]);
    }
    public function getPractice()
    {
        $practices = Practice::all();
        return view('getPractice', ['practices' => $practices]);
    }
}
