<?php

namespace App\Http\Controllers;

use App\Computer;
use App\TypeComputer;
use App\Lease;
use App\Staff;
use App\Tariff;
use App\User;
use Illuminate\Http\Response;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LeaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $computer = Computer::all();
        $lease = Lease::with('user', 'tariff','computer')->orderBy('id')->get();
        $user = User::all();
        $staff = Staff::all();
        $tariff = Tariff::all();
        $typeComputer = TypeComputer::all();
        return view('lease.index', compact(['computer','lease','staff','tariff', 'user', 'typeComputer']));
    }


    public function store()
    {
        Lease::insert([
            'id_user' => request('user'),
            'id_tariff' => request('tariff'),
            'id_computer' => request('computer'),
            'hours' => request('hours'),
        ]);
        return back();
    }

    public function update(Lease $lease)
    {
        Lease::where('id', $lease->id)->update([
            'id_user' => request('user'),
            'id_tariff' => request('tariff'),
            'id_computer' => request('computer'),
            'hours' => request('hours'),
        ]);
        return  back();
    }

    public function delete(Lease $lease){
        if($lease)
        {
            $lease->delete();
        }
        return back();
    }
}
