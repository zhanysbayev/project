<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::all();

        return view('order.index')->with(['orders' => $orders] );
        
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

         // ensure the request has a file before we attempt anything else.
         if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('photo', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $order = new Order([
                "name" => $request->get('name'),
                "id_of_product" => $request->get('id_of_product'),
                "size" => $request->get('size'),
                "profile_photo" => $request->file->hashName()
            ]);
            $order->save(); // Finally, save the record.
        }

        return view('order.create');
    }
}
