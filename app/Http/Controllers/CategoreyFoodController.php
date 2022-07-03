<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoreyFoodRequest;
use App\Http\Requests\UpdateCategoreyFoodRequest;
use App\Models\CategoreyFood;

class CategoreyFoodController extends Controller
{
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoreyFoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoreyFoodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoreyFood  $categoreyFood
     * @return \Illuminate\Http\Response
     */
    public function show(CategoreyFood $categoreyFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoreyFood  $categoreyFood
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoreyFood $categoreyFood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoreyFoodRequest  $request
     * @param  \App\Models\CategoreyFood  $categoreyFood
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoreyFoodRequest $request, CategoreyFood $categoreyFood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoreyFood  $categoreyFood
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoreyFood $categoreyFood)
    {
        //
    }
}
