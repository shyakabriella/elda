<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ubudehe;

class PageController extends Controller
{
    public function index()
    {      
        return view('pages.index', [                
        ]);    
    }

    public function how()
    {      
        return view('pages.how', [                
        ]);    
    }

    public function faq()
    {      
        return view('pages.faq', [                
        ]);    
    }

    public function contact()
    {      
        return view('pages.contact', [                
        ]);    
    }

    public function req()
    {      
        $ubudehe = Ubudehe::all();
        return view('pages.req', [  
            'ubudehe'=>$ubudehe
                          
        ]);    
    }

    public function welcome()
    {      
        return view('pages.welcome', [                
        ]);    
    }
}
