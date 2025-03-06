<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repository\User\UserContract;
use App\Repository\Product\ProductContract;

class RouteController extends Controller
{
    protected UserContract $userContract;
    protected ProductContract $productContract;

    public function __construct(UserContract $_userContract, ProductContract $_productContract)
    {
        $this->userContract = $_userContract;
        $this->productContract = $_productContract;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $cart = session('cart', []);
        // $totalItems = 0;
        // $subtotal = 0;

        // // Calculer le nombre total d'articles et le sous-total
        // foreach ($cart as $item) {
        //     $totalItems += $item['quantity'];
        //     $subtotal += $item['price'] * $item['quantity'];
        // }

        // $products = $this->productContract->toGetAll();
        // $latestProducts = $this->productContract->toGetAll(5);
        // $categories = Category::all();

        return view('public.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        return view('public.about');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function real()
    {
        return view('public.real');
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
