<?php

namespace App\Http\Controllers;

use App\Computer;
use App\TypeComputer;
use App\Lease;
use App\Staff;
use App\Tariff;
use App\User;
use Illuminate\Http\Request;

class TypeComputerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $lease = Lease::all();
        $staff = Staff::all();
        $tariff = Tariff::all();
        $typeComputer = TypeComputer::orderBy('id')->get();;
        return view('typeComputer.index', compact(['computer','lease','staff','tariff', 'typeComputer']));
    }

    public function store()
    {
        TypeComputer::insert([
            'type_computer' => request('type_computer'),
        ]);
        return back();
    }

    public function update(TypeComputer $typeComputer)
    {
        TypeComputer::where('id', $typeComputer->id)->update([
            'type_computer' => request('type_computer'),
        ]);
        return back();
    }

    public function delete(TypeComputer $typeComputer){
        if($typeComputer)
        {
            $typeComputer->delete();
        }
        return back();
    }
}
