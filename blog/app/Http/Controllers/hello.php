<?php 

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Hello extends Controller
{
	public function index($args)
	{
		 
		return view('hello')->withname($args);
	}

	public function sum($num1,$num2)
	{
		$sum = $num1+$num2;
		echo "sum is :- ".$sum;
	}
}

?>