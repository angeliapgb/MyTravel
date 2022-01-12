<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book as BookModel;
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
        $bookings = BookDetailModel::join('users', 'users.id', 'user_id')
                                    ->join('place', 'place.id', 'place_id')
                                    ->join('book', 'book.id', 'book_id')
                                    ->get();

        return view('booking', compact('bookings'));
    }

    public function history() {
        return view('history');
    }

    public function detailplace($name) {
        $details = PlaceDetailModel::join('place', 'place.id', 'place_id')
                                    ->where('place.name', $name)
                                    ->get(['place_detail.place', 'place_detail.day', 'place_detail.detail', 'place.id', 'place.name']);
        
        $name = PlaceDetailModel::join('place', 'place.id', 'place_id')
                                    ->where('place.name', $name)
                                    ->get('place.name')
                                    ->first();

        return view('detailplace', compact('details', 'name'));
    }

    public function book(Request $request, $name) {
        $book_id = BookModel::latest('created_at')
                            ->get('book.id')
                            ->first();
                            dd($book_id);
        // BookModel::create([]);

        BookDetailModel::create([
            'user_id' => auth()->user()->id,
            'place_id' => $request->place_id,
            'book_id' => $book_id,
        ]);

        return redirect('booking');
    }

}
