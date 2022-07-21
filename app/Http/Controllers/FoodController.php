<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefoodRequest;
use App\Http\Requests\UpdatefoodRequest;
use App\Models\CategoreyFood;
use App\Models\CategoreyRestaurant;
use App\Models\Food;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

return (auth()->user()->role);
        if (auth()->user()->role == 'admin') {
            $foods = Food::query()->with('offer')->latest()->paginate(5);
            return view('foods.index', ['foods' => $foods]);
        }
        // using paginate in relation
        // $foods = Food::with('offer')->get();
    $foods=auth()->user()->tofood()->latest()->paginate();

        return view('foods.index', compact('foods'));


        //sohrabi user auth
        // return User::with('categoreyRestaurants.categoreyFood')->find(auth()->user()->id);
        //sohrabi for food
        // return $foods = Food::with('categorey.categoreyRestaurant.user')->get();
        // foreach($foods as $food){dd($food->categorey->categoreyRestaurant->user->name); }
        //gheydari by composer(belongs to through)
        // return CategoreyFood::with('toUser')->get() ;
        // $user = User::with('tofood')->find(auth()->user()->id);
        // $foods = $user->tofood;
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
        $offers = Offer::all();
        return view('foods.create', compact('offers'));
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
        $pathimage = Storage::disk($credential['storage'])->put('store', $credential['image']);
        // dd($pathimage);
        // $food=auth()->user()->tofood()->create($credential);
        // $pathimage=$request->file('image')->store('store');
        $food = Food::create([
            'food_name' => $credential['food_name'],
            'price' => $credential['price'],
            // 'offer_price' => $credential['offer_price'],
            // 'offer_percentage' => $credential['offer_percentage'],
            'restaurant_id' => auth()->user()->restaurant->id,
            'offer_id' => $credential['offer_id'],
        ]);
        if ($credential['storage'] == 's3')
            $pathimage = "https://testhossein.s3.ir-thr-at1.arvanstorage.com/store/X2RdQ5qJ6BERAEnT8MylnORWB5v7hZEjujCe5YjK.png/$pathimage";

        $food->update([
            'primary_img' => $pathimage
        ]);

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
