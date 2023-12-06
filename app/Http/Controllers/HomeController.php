<?php

namespace App\Http\Controllers;
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

     * @return \Illuminate\Contracts\Support\Renderable

     */
    public function index()

    {
        return view('home');
    } 
    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

public function getChartData()
{
    $data = [
        'labels' => ['January', 'February', 'March', 'April', 'May'],
        'datasets' => [
            [
                'label' => 'Monthly Sales',
                'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                'borderColor' => 'rgba(75, 192, 192, 1)',
                'borderWidth' => 1,
                'data' => [65, 59, 80, 81, 56],
            ],
        ],
    ];

    return response()->json($data);
}

    public function adminHome()

    {
        return view('adminHome');
    }

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome()

    {
        return view('managerHome');
    }

}