<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function checkWord(Request $request){
        $word = $request->word;
        $arry = array('cat'=>'meo', 'dog'=>'cho', 'elephant'=>'voi');
        $select  = $request->select;
        switch ($select){
            case 'vie':
                foreach ($arry as $key => $value)
                {
                    if ($word == $key){
                        $result = $value;
                        break;
                    } else {
                        $result = " Khong ton tai tu nay";
                    }
                }
                return view('check', compact('result', 'word'));
            case 'eng':
                foreach ($arry as $key => $value)
                {
                    if ($word == $value){
                        $result = $key;
                        break;
                    } else {
                        $result = "Khong ton tai tu nay";
                    }
                }
                return view('check', compact('result','word'));
        }
    }
}
