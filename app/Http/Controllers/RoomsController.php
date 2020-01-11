<?php

namespace App\Http\Controllers;
use App\Room;
use App\User;
use App\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\BookingBilling;
class RoomsController extends Controller
{
    //
    public function index(){
        // dd('test');
        $rooms = Room::get();
        // dd($rooms);
        return view('rooms.index')->with(compact('rooms'));
    }

    public function booked($id){

        // dd($room);
            $room = Room::where('id',$id)->first();
            $tenant = User::where('type_id', 1)->get();
            // dd($room);
        return view('rooms.book')->with(\compact('room','tenant'));

    }

    public function store(Request $request){
        // dd($request->all());
        $new = new Booking;
        $new->room_id = $request->room_id;
        $new->tenant_id = $request->user;
        $new->price = $request->price;
        $new->save();

        //update room status
        $update = Room::where('id',$new->room_id)->first();
        $update->status = 'occupied';
        $update->save();

        //generate booking_billing
        $billing = new BookingBilling();
        $billing->booking_id = $new->id;
        $billing->month = Carbon::now();
        $billing->status = 'unpaid';
        $billing->price = $request->price;
        $billing->save();


        // dd($new);
        return redirect('/booked-rooms');
    }

    public function booked_rooms(){

        $booked = Booking::with('user','room')->get();
        // dd($booked);
        return view('rooms.booked_rooms')->with(compact('booked'));
    }

    public function test(){
        $get_booked = Room::where('status','=','occupied')->get();
        $date = Carbon::now();

        dd($date->month);
       
    }


}
