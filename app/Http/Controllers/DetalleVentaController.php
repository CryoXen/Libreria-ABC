<?php

namespace App\Http\Controllers;

use App\Models\DetalleVenta;
use App\Http\Requests\StoreDetalleVentaRequest;
use App\Http\Requests\UpdateDetalleVentaRequest;

class DetalleVentaController extends Controller
{
    
    public function index()
    {
        $detalle=detalle_ventas::all();
        return $this->showAll($detalle);
    }

   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetalleVentaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalleVentaRequest $request)
    {
        $detalle = new detalle_vetas;
        $detalle->save();
        return $this->ShowMessage('Detalle agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleVenta $detalleVenta)
    {
        $detalle = detalleVenta::find($detalle);
        return $this->ShowOne($detalle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetalleVentaRequest  $request
     * @param  \App\Models\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetalleVentaRequest $request, DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleVenta $detalleVenta)
    {
        //
    }
}
