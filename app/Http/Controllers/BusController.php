<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Support\Facades\Request;

use Inertia\Inertia;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $buses = Bus::all();
        return Inertia::render('Buses/List',[
            'buses' => $buses,
            'message' => session('message')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Buses/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
{
    Request::validate([
        'type' => 'required',
        'capacity' => 'required',
    ]);

    $code = '';

    switch (Request::get('type')) {
        case 'deluxe':
            $code = 'DEL' . str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
            break;
        case 'firstclass':
            $code = 'FCL' . str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
            break;
        case 'luxury':
            $code = 'LUX' . str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
            break;
        case 'superdeluxe':
            $code = 'SDL' . str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
            break;
        default:
            // Handle default case if needed
            break;
    }

    $bus = Bus::create([
        'code' => $code,
        'type' => Request::get('type'),
        'capacity' => Request::get('capacity'),
    ]);

    return redirect()->route('buses')->with('message', 'success:New Bus
    Created.');
}



    /**
     * Display the specified resource.
     */
    public function show(Bus $buses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        $id=Request::get("id");
        $bus= Bus::find($id);
        return Inertia::render('Buses/Edit',['bus'=>$bus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Bus $bus)
    {
        Request::validate([
            'code' =>'required',
            'type' =>'required',
            'capacity' =>'required',
        ]);


        Bus::where('id',$bus->id)
        ->update([
            'code' =>Request::get('code'),
            'type' =>Request::get('type'),
            'capacity' =>Request::get('capacity'),
        ]);
        return to_route('buses')->with('message', 'success:location
        Updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        Bus::destroy($bus->id);
        to_route('busroutes');
    }
}
