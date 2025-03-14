<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBarangTerjual = OrderDetail::query()->sum('qty');
        $totalPenjualan = Order::query()->sum('total');
        $totalOrderan = Order::query()->count();
        $orderTerbaru = Order::query()->orderBy('created_at', 'desc')->limit(10)->get();

        return view('dashboard', ['totalBarangTerjual' => $totalBarangTerjual, 'totalPenjualan' => $totalPenjualan, 'totalOrder' => $totalOrderan, 'orderTerbaru' => $orderTerbaru]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
