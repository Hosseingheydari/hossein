<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefoodRequest;
use App\Http\Requests\UpdatefoodRequest;
use App\Models\Food;
use Illuminate\Support\Facades\Gate;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (auth()->user()->role == 'admin') {

            $foods = Food::paginate();

            // return $posts;

            return view('foods.index', ['foods' => $foods]);
        }
        //gate for front @can
        if (Gate::allows('posts.index')) {
            $foods = auth()->user()->food()->paginate();
            return view('posts.index', ['posts' => $foods]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefoodRequest $request)
    {
        $credential = $request->validated();
        auth()->user()->food()->create($credential);
        return redirect()->route('foods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(food $food)
    {
        return view('foods.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(food $food)
    {
        if (auth()->user()->id == $food->user_id || auth()->user()->role = 'admin')
            return view('foods.edit', compact('food'));
        return  abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefoodRequest  $request
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefoodRequest $request, food $food)
    {
        if (auth()->user()->id == $food->user_id || auth()->user()->role == 'admin')
        $credential=$request->validated();
        $food->update($credential);
            return redirect()->route('foods.index');
        return abort('404');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(food $food)
    {
        $food->delete();
        return redirect()->route('foods.index');
    }
}
