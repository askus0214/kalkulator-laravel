<?php

namespace App\Http\Controllers;

use App\Warehouse;
use App\WarehouseType;
use Illuminate\Http\Request;
use App\Http\Requests\WarehouseFormRequest;
use App\Helpers\CustomeLocation;
// use App\Traits\Uploadable;

class WarehouseController extends Controller
{
    // use Uploadable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        
        if ($r->has('s')) {
            $w = Warehouse::where('Name', 'LIKE', "%" . $r->s . "%");
        } else {
            $w = Warehouse::orderBY('Name', 'DESC');
        }
        
        return view(
            'warehouse.index', ['warehouses' => $w->paginate(20)]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['warehouse_type'] = WarehouseType::get();

        return view('warehouse.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WarehouseFormRequest $r)
    {
        // dd($r);
        try {
            Warehouse::create($r->except('photo'));


        } catch ( Exception $exception) {
            alert()->error('Error Message', 'Data Gagal Ditambahkan')
                ->persistent( __('app.ok') );
        }
        return redirect(route('warehouses.index'));

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
    public function edit(Warehouse $warehouse)
    {
        $data['warehouse'] = $warehouse;
        $data['warehouse_type'] = warehouseType::get();

        return view('warehouse.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WarehouseFormRequest $r, Warehouse $warehouses, $id)
    {
      

        try{
            
            if ($r->has('save')) {
                $r->request->remove('save');
                $route = route('warehouses.edit', $id);
            } else {
                $route = route('warehouses.index');         
            }
            $warehouses = Warehouse::find($id);
            $warehouses->fill( $r->except('photo') )->save();
            
        }
        catch(Exception $e){
            alert()->error('Error Message', 'Data Gagal Diubah')
                ->persistent( __('OK') );

        }
        return redirect($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouses, $id)
    {
        try {

            $warehouses = Warehouse::find($id); 
            $warehouses->delete();
            return redirect(route('warehouses.index'));

        } catch (\Exception $e) {

            return redirect(route('warehouses.index', compact('warehouses')));

        }
    }
}
