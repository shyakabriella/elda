<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ubudehe;
class UbudeheController extends Controller
{
       /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    //  function __construct()

    //  {
 
    //       $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
    //       $this->middleware('permission:product-create', ['only' => ['create','store']]);
    //       $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    //       $this->middleware('permission:product-delete', ['only' => ['destroy']]);
 
    //  }
 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
 
      */
 
     public function index()
 
     {
 
         $ubudehe = Ubudehe::latest()->paginate(5);
         return view('ubudehe.index',compact('ubudehe'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
 
     }
 
     
 
     /**
 
      * Show the form for creating a new resource.
 
      *
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function create()
 
     {
 
         return view('ubudehe.create');
 
     }
 
     
 
     /**
 
      * Store a newly created resource in storage.
 
      *
 
      * @param  \Illuminate\Http\Request  $request
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function store(Request $request)
 
     {
         request()->validate([
             'category' => 'required',
             'detail' => 'required',
 
         ]);
         Ubudehe::create($request->all());
         return redirect()->route('ubudehe.index')
                         ->with('success','Product created successfully.');
 
     }


    
     /**
      * Display the specified resource.
      *
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
      */
     public function show(Ubudehe $ubudehe)
 
     {
         return view('ubudehe.show',compact('ubudehe'));
     }
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
 
      */
     public function edit(Ubudehe $ubudehe)
 
     {
         return view('ubudehe.edit',compact('ubudehe'));
     }
 
     
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
 
      */
 
     public function update(Request $request, Ubudehe $ubudehe)
 
     {
          request()->validate([
             'category' => 'required',
             'detail' => 'required',
         ]);
         $product->update($request->all());
         return redirect()->route('ubudehe.index')
                         ->with('success','Ubudehe updated successfully');
 
     }
     /**
 
      * Remove the specified resource from storage.
      *
      * @param  \App\Product  $product
      * @return \Illuminate\Http\Response
 
      */
     public function destroy(Ubudehe $ubudehe)
 
     {
         $ubudehe->delete();
         return redirect()->route('ubudehe.index') 
                         ->with('success','Product deleted successfully');
     }
}
