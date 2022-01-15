<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function index() {
    	$items = Item::paginate(5);


    	return view('home',['allItems'=>$items]);
    }

    public function itemSave(Request $request) {
    	$this->validate($request,[
    		'name' => 'required',
    		'type' => 'required',
    		'qty' => 'required'
    	]);

    	$item = new Item();
    	$item->name = $request->name;
    	$item->type = $request->type;
    	$item->qty = $request->qty;

    	$item->save();

    	return redirect('/home');
   	}
    public function edit($id) {
    	$item = Item::find($id);
    	return view('edit',['item' => $item]);
    }

    public function update(Request $request) {
    	$item = Item::find($request->id);

    	$item->name = $request->name;
    	$item->type = $request->type;
    	$item->qty = $request->qty;

    	$item->save();

    	return redirect('/home');

    }

    public function search(Request $request) {		

		$name = $request->name;
    	$items = Item::where('name','like','%'.$name.'%')->paginate(5);

    	return view('home',['allItems'=>$items]);

    }
    public function delete($id) {
    	$item = Item::find($id);
    	$item->delete();

    	return redirect('/home');

    }
}
