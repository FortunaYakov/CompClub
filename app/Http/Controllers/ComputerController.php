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

class ComputerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $computer = Computer::with('typecomputer', 'staff')->orderBy('id')->get();
        $lease = Lease::all();
        $staff = Staff::all();
        $tariff = Tariff::all();
        $typeComputer = TypeComputer::all();
        return view('computer.index', compact(['computer','lease','staff','tariff', 'typeComputer']));
    }

    public function store()
    {
        Computer::insert([
            'id_staff' => request('staff'),
            'id_type' => request('type'),
            'status' => request('status'),
            'created_at' => request('created_at'),
        ]);
        return back();
    }

    public function update(Computer $computer)
    {
        Computer::where('id', $computer->id)->update([
            'id_staff' => request('staff'),
            'id_type' => request('type'),
            'status' => request('status'),
            'created_at' =>request('created_at'),
        ]);
        return back();
    }

    public function delete(Computer $computer){
        if($computer)
        {
            $computer->delete();
        }
        return back();
    }
}
