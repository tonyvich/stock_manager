<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Delivery;

class DeliveryController extends Controller
{
    /**
     * Construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($item)
    {  
        // Getting the id of the related item 
        $item = Item::find($item);
        return view('deliveries.create',['item' => $item]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($item)
    {
        // Validating
        $this->validate(request(),[
            'date'      =>      'required',
            'deliver'   =>      'required',
            'size'      =>      'required|integer'
        ]);

        // Storing Delivery and redirecting
        Delivery::create([
            'date'       =>    request('date'),
            'deliver'    =>    request('deliver'),
            'size'       =>    request('size'),
            'item_id'    =>    $item        
        ]);

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
