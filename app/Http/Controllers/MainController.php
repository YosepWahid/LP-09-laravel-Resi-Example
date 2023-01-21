<?php

namespace App\Http\Controllers;

use App\Models\Resi;
use Illuminate\Http\Request;

class MainController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Dashboard()
    {
        $data = Resi::get()->count();
        return view('dashboard.index', ['jumlah' => $data]);
    }

    public function Resi()
    {
        $data = Resi::orderby('tanggal_resi', 'DESC')->paginate(5);
        return view('resi.index', ['resis' => $data]);
    }
}
