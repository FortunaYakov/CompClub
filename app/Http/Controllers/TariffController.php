<?php

namespace App\Http\Controllers;

use App\Computer;
use App\TypeComputer;
use App\Lease;
use App\Staff;
use App\Tariff;
use App\User;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TariffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $computer = Computer::all();
        $lease = Lease::all();
        $staff = Staff::all();
        $tariff = Tariff::orderBy('id')->get();
        $typeComputer = TypeComputer::all();
        return view('tariff.index', compact(['computer','lease','staff','tariff', '$typeComputer']));
    }

    public function store()
    {
        Tariff::insert([
            'name' => request('name'),
            'price' => request('price'),
            'start_period' => request('start_period'),
            'end_period' => request('end_period'),
        ]);
        return back();
    }

    public function update(Tariff $tariff)
    {
        Tariff::where('id',$tariff->id)->update([
            'name' => request('name'),
            'price' => request('price'),
            'start_period' => request('start_period'),
            'end_period' => request('end_period'),
        ]);
        return back();
    }
    public function delete(Tariff $tariff){
        if($tariff)
        {
            $tariff->delete();
        }
        return back();
    }
}
