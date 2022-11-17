<?php
namespace Shubham123Rai\Inic\Controllers;

use Illuminate\Http\Request;
// use Shubham123Rai\Inic\Inspire;
use App\Http\Controllers\Controller;

class InspirationController extends Controller
{
    public function add($a, $b) 
    {
        $result = $a+$b;
        return view('inic::calculator', compact('result'));
    }

    public function sub($a, $b) 
    {
        $result = $a-$b;
        return view('inic::calculator', compact('result'));
    }
}