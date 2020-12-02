<?php

namespace App\Http\Controllers;

use App\Store;
use App\ItemList;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_store=Store::all();
        return view('store.browse',['stores'=>$all_store]);
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $new_store = new Store();
        $new_store->title = $request->title;
        $new_store->save();
        // return $new_store->title;
        return view('store.create',["data"=>$new_store]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(store $store)
    {
        //
    }

    public function sks($id,Request $request){
        return $id;
    }
    
    public function putData(Request $request){
        
        // return $new_store->title;
        //return view('store.create',["data"=>$new_store]);
        // return $new_store->title;
       // return view('store.create',["data"=>$new_store]);
    }
    
    public function formData(Request $request){
        $new_store1 = new Store();
        $new_store1->title = "Valorant";
        $new_store1->save();

        $new_store2 = new Store();
        $new_store2->title = "CSGO";
        $new_store2->save();

        $new_store3 = new Store();
        $new_store3->title = "PubG";
        $new_store3->save();
        
        $new_store4 = new Store();
        $new_store4->title = "PubG Mobile";
        $new_store4->save();

        $new_store5 = new Store();
        $new_store5->title = "GTA V";
        $new_store5->save();
      
        $list1 = new ItemList();
        $list1->store_id=$new_store2->id;
        $list1->service_title="Prime Gold Nova Master";
        $list1->price="3000";
        $list1->description="1900 Hours|600 Wins|2016(|v|2),2017,2018(|v|2),2020 Service Medals|Hydra Gold Coin|Ow Enabled|Faciet Available";
        $list1->type="0";
        $list1->save();

        $list2 = new ItemList();
        $list2->store_id=$new_store2->id;
        $list2->service_title="Master Guardian";
        $list2->price="3000";
        $list2->description="3300 Hours|1230 Wins|2018(|v|2),2019(|v|3),2020(|v|2)Service Medals|Shattered Web Diamond Coin|Ow not Enabled|Faciet Available";
        $list2->type="0";
        $list2->save();

        $list3 = new ItemList();
        $list3->store_id=$new_store2->id;
        $list3->service_title="Prime Gold Nova Master";
        $list3->price="3000";
        $list3->description="750 Hours|103 Wins|2019,2020 Service Medals|Shattered Web Diamond Coin|Ow not Enabled|Faciet Available";
        $list3->type="0";
        $list3->save();

        return $list3;
        // return view('store.form');
    }
    public function listData(Request $request){
        return view('store.list');
    }

}
