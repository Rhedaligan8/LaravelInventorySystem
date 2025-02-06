<?php

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use Illuminate\Http\Request;

class RequestController extends Controller  {

    public function index(){ // Action GET (example the path is /images, the route name is images.index)
     //   return view("");
    }



    public function show($id){ //Action GET (example the path is /images/{images}, the route name is images.show)
    
        $Item = ItemModel::find($id); 
      return view("ui_inventory",[""=>$Item]);
    }



    public function store(Request $request){ // Action POST (example the path is /images, the route name is images.store)
       // $request->validate(
    }



    public function create() { //Action GET (example the path is /images/create, the route name is images.create)

    }

    public function edit() { //Action GET (example the path is /images/{images}/edit, the route name is images.edit)


    }

    public function update(Request $request){ // Action PUT/PATCH (example the path is /images/{images}, the route name is images.images.update)
        // $request->validate(
    }

    public function destroy($id) { //Action DELETE (example the path is /images/{images}, the route name is images.destroy)


    } 




}