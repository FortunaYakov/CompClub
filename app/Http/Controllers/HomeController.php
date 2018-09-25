<?php

namespace App\Http\Controllers;
use App\Computer;
use App\TypeComputer;
use App\Lease;
use App\Staff;
use App\Tariff;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenue = Computer::count();
        $storages = Tariff::count();
        $customers = Staff::count();
        $products = TypeComputer::count();
        return view('homepage.index', compact(['revenue', 'storages','products', 'customers']));
    }
}
