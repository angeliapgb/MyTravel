<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookDetail as BookDetailModel;
use App\Models\Category as CategoryModel;
use App\Models\Place as PlaceModel;
use App\Models\PlaceDetail as PlaceDetailModel;
use App\Models\User as UserModel;


class PageController extends Controller
{
    public function profile() {
        return view('profile');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('image',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        return redirect()->back();
    }

    public function contact() {
        return view('contact');
    }

    public function booking(Request $request) {
        $bookings = BookDetailModel::where('user_id', auth()->user()->id)
                                    ->where('name', '!=', NULL)
                                    ->get();

        return view('booking', compact('bookings'));
    }

    public function bookingdata() {

        return view('bookingdata');
    }

    public function bookingform(Request $request) {
        BookDetailModel::create([
            'user_id' => auth()->user()->id,
            'place_id' => $request->place_id,
        ]);

        return redirect('bookingdata');
    }

    public function bookingconfirmation(Request $request) {
    $book_id = BookDetailModel::latest('id')
                                ->first();
    
    BookDetailModel::where('id', $book_id->id)
                        ->update([
                            'name' => $request->name,
                            'departure' => $request->departure,
                            'arrival' => $request->arrival,
                            'amount' => $request->amount,
                            'type' => $request->type,
                        ]);

        return redirect('booking');
    }

    public function history() {
        return view('history');
    }

    public function detailplace($name) {
        $details = PlaceModel::where('name', $name)
                                    ->get();
        
        $name = PlaceModel::where('name', $name)
                                    ->get('name')
                                    ->first();

        return view('detailplace', compact('details', 'name'));
    }

}
