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

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $computer = Computer::all();
        $lease = Lease::all();
        $staff = Staff::orderBy('id')->get();
        $tariff = Tariff::all();
        $typeComapter = TypeComputer::all();
        return view('staff.index', compact(['computer','lease','staff','tariff', 'typeComapter']));
    }

    public function store()
    {
        Staff::insert([
            'name' => request('name'),
            'created_at' =>request('created_at'),
        ]);
        return back();
    }

    public function update(Staff $staff)
    {
        Staff::where('id', $staff->id)->update([
            'name' => request('name'),
            'created_at' =>request('created_at'),
        ]);
        return back();
    }

    public function delete(Staff $staff){
        if($staff)
        {
            $staff->delete();
        }
        return back();
    }
}
