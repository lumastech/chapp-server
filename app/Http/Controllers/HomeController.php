<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Property;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Utility;



class HomeController extends Controller
{

    // render landing page
    public function home(Request $request) {
        $utility = new Utility();
        $utility->countVisitors($request);
        $plans = Plan::with('images')->orderBy('id', 'desc')->paginate(12);
        $new_plans = Plan::with('images')->orderBy('id', 'desc')->limit(4)->get();

        // properties
        $properties = Property::with('images')->orderBy('id', "desc")->paginate(12);
        $plans_count = Plan::count();


        return Inertia::render('Home',
            [
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
                'plans' => $plans,
                'new_plans' => $new_plans,
                'properties' => $properties,
            ]);
    }

    // plan show
    public function planshow($id) {
        $plan = Plan::where("id", $id)->with('images')->first();
        // popular algo plan
        $plans = Plan::with('images')->orderBy('id', 'desc')->paginate(8);
        return Inertia::render('Plan',['plan' => $plan, 'plans' => $plans]);
    }


    // dedicated page for listing all plnas with pagination
    public function plans(Request $request) {
        $utility = new Utility();
        $utility->countVisitors($request);
        $plans = Plan::with('images')->orderBy('id', 'desc')->paginate(20);
        $new_plans = Plan::with('images')->orderBy('id', 'desc')->limit(4)->get();
        return Inertia::render('Plans', [
            'plans' => $plans,
            'new_plans' => $new_plans,
        ]);
    }

    // properties show
    public function propertyshow($id) {
        $item = Property::where("id", $id)->with('images')->first();
        // popular algo item
        $items = Property::with('images')->orderBy('id', 'desc')->paginate(8);
        return Inertia::render('Property',['item' => $item, 'items' => $items]);
    }

    // dedicated page for listing all properties with pagination
    public function properties(Request $request) {
        $utility = new Utility();
        $utility->countVisitors($request);
        $items = Property::with('images')->orderBy('id', 'desc')->paginate(20);
        $new_items = Property::with('images')->orderBy('id', 'desc')->limit(4)->get();
        return Inertia::render('Properties', [
            'items' => $items,
            'new_items' => $new_items,
        ]);
    }

    // search plans
    public function searchplans(Request $request){
        $search = $request->search;

        $plans = Plan::where('price', $search)
                        ->orWhere('name', 'LIKE', '%'.$search.'%')
                        ->orWhere('style', 'LIKE', '%'.$search.'%')
                        ->orWhere('roof_finish', 'LIKE', '%'.$search.'%')
                        ->orWhere('bedrooms', 'LIKE', '%'.$search.'%')
                        ->orWhere('bathrooms', 'LIKE', '%'.$search.'%')
                        ->orWhere('levels', 'LIKE', '%'.$search.'%')
                        ->orWhere('area', 'LIKE', '%'.$search.'%')
                        ->orWhere('description', 'LIKE', '%'.$search.'%')->get();

        $properties = Property::where('price', $search)
                        ->orWhere('title', 'LIKE', '%'.$search.'%')
                        ->orWhere('address', 'LIKE', '%'.$search.'%')
                        ->orWhere('city', 'LIKE', '%'.$search.'%')
                        ->orWhere('bedrooms', 'LIKE', '%'.$search.'%')
                        ->orWhere('bathrooms', 'LIKE', '%'.$search.'%')
                        ->orWhere('state', 'LIKE', '%'.$search.'%')
                        ->orWhere('lot_size', 'LIKE', '%'.$search.'%')
                        ->orWhere('description', 'LIKE', '%'.$search.'%')->get();

        $new_plans = Plan::with('images')->orderBy('id', 'desc')->limit(4)->get();
        $new_properties = Property::with('images')->orderBy('id', 'desc')->limit(4)->get();

        return Inertia::render('Plans', [
            'plans' => $plans,
            'new_plans' => $new_plans,
            'properties' => $properties,
            'new_properties' => $new_properties,
        ]);
    }


}
