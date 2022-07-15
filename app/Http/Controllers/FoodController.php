<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefoodRequest;
use App\Http\Requests\UpdatefoodRequest;
use App\Models\CategoreyFood;
use App\Models\CategoreyRestaurant;
use App\Models\Food;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('foods.index', ['foods' => $foods]);
        }
        $user = User::with('tofood')->find(auth()->user()->id);
        $foods = $user->tofood;
        return view('foods.index', compact('foods'));


        //sohrabi user auth
        // return User::with('categoreyRestaurants.categoreyFood')->find(auth()->user()->id);
        //sohrabi for food
        // return $foods = Food::with('categorey.categoreyRestaurant.user')->get();
        // foreach($foods as $food){dd($food->categorey->categoreyRestaurant->user->name); }
        //gheydari by composer(belongs to through)
        // return CategoreyFood::with('toUser')->get() ;
        //saeedy :
        // return Food::with(['categorey'=>fn($categoreyFood)=>$categoreyFood->with(['categoreyRestaurant'=>fn($categoreyRestaurant)=>$categoreyRestaurant->where('user_id',auth()->id())])])->get();}



    }



    //gate for front @can
    // return Food::with('categorey')->get();
    //  $cat=auth()->user()->categoreyRestaurants() ;
    //   $pat=$cat->cat()->get();
    //   return $pat;

    // return Food::with('categoreyFood.categoreyRestaurant.user')->where('user_id',auth()->id())->get();
    // return  $foods = CategoreyRestaurant::where('user_id', auth()->id())->with('categoreyFoods.foods')->get();


    //   return  $foods = CategoreyRestaurant::where('user_id',auth()->id())->with([

    // 'categoreyFoods'=>fn($categoreyFood)=>$categoreyFood->with('foods')
    //   ])->get() ;
    // return view('posts.index', ['foods' => $foods]);
    // return CategoreyFood::with('toUser')->get();



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoreyFoods = CategoreyFood::all();
        return view('foods.create', compact('categoreyFoods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefoodRequest $request)
    {
        // $request->dd();
        $credential = $request->validated();
        Food::create([$request]);
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
            $credential = $request->validated();
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
