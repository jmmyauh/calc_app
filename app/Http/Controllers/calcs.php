<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcs extends Controller
{

    public function result($fnumber, $calculation, $snumber)
    {
        $answer = 0;
        // view('message.result', ['fnumber' => $fnumber, 'calculation' => $calculation, 'snumber' => $snumber]);
        switch ($calculation) {

            case 'addition':
                $answer = $fnumber + $snumber;
                break;
            case 'subtraction':
                $answer = $fnumber - $snumber;
                break;
            case 'multiplication':
                $answer = $fnumber * $snumber;
                break;
            default:
                $answer = $fnumber / $snumber;
                break;

        }
        // return $answer;
        return view('message.result', ['answer' => $answer]);
    }
}
