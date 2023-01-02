<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Team;
use App\Models\ContactUs;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$total_users = User::count();
        $total_products = Product::count();
        $total_teams  = Team::count();
        $total_contacts  = ContactUs::count();

		$data = [
			'total_users' => $total_users,
            'total_products' => $total_products,
            'total_teams'  => $total_teams , 
            'total_contacts'  => $total_contacts ,     
		];
		return view('home', $data);
    }
}
