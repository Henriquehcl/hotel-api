<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;

class HotelController extends Controller
{
    public function listAll(){

        return Hotel::all();
    }

    public function getHotel(Hotel $hotel){

        return $hotel;
    }

    public function createHotel(Request $request){

        $hotel = Hotel::Create([
            'hotel_name'=>$request->input('hotel_name'),
            'site'=>$request->input('site'),
            'fone'=>$request->input('fone'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address'),
            'stars'=>$request->input('stars')
        ]);

        return $hotel;

    }

    public function updateHotel(Request $request, $id){

        if(Hotel::where('id', $id)->exists()){
            $hotel = Hotel::find($id);
            $hotel -> hotel_name = $request->input('hotel_name');
            $hotel -> site = $request->input('site');
            $hotel -> fone = $request->input('fone');
            $hotel -> email = $request->input('email');
            $hotel -> address = $request->input('address');
            $hotel -> stars = $request->input('stars');

            $hotel->save();

            //return $hotel;
            return response()->json([
                "message" => "records updated successfully",
                $hotel
            ], 200);
        }else {
            return response()->json([
                "message" => "Hotel not found"
            ], 404);
        }
    }

    public function deleteHotel($id){

        if(Hotel::where('id', $id)->exists()){
            $hotel = Hotel::find($id);
            $hotel->delete();
            return response()->json([
                "message"=>"Hotel Deleted"
            ],202);
        }else{
            return response()->json([
                "message"=>"Hotel not found"
            ],404);
        }

    }
}
