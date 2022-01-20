<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $price = BookDetailModel::join('place', 'place.id', 'book_detail.place_id')
                                ->latest('book_detail.id')
                                ->first();

        return view('bookingdata', compact('price'));
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

    public function detailplace($name) {
        $details = PlaceModel::where('name', $name)
                                    ->get();
        
        $name = PlaceModel::where('name', $name)
                                    ->get('name')
                                    ->first();

        return view('detailplace', compact('details', 'name'));
    }

    public function updateplace($name) {
        $place = PlaceModel::where('name', $name)
                            ->first();

        $category = CategoryModel::all();

        return view('updateplace', compact('place', 'category'));
    }

    public function updateconfirmation(Request $request, $name) {
        $place_id = PlaceModel::where('name', $name)
                                ->first();
                                
        $image =  $request->file('image');
        $nameimage = time() . '.' . $image->getClientOriginalExtension();;
        $location = 'image/' . $nameimage;
        Storage::putFileAs('public/image', $image, $nameimage);

        PlaceModel::where('id', $place_id->id)
                    ->update([
                        'category_id' => $request->category,
                        'name' => $request->name,
                        'price' => $request->price,
                        'image' => $location,
                        'description' => $request->description,
                        'address' => $request->address,
                        'phone' => $request->phone,
                    ]);

        return redirect('home');
    }

    public function deleteplace(Request $request) {
        $place_id = PlaceModel::where('name', $request->place_name)
                                ->first();

        PlaceModel::where('id', $place_id->id)
                    ->delete();

        return redirect('home');
    }

    public function addplace() {
        $category = CategoryModel::all();

        return view('addplace', compact('category'));
    }

    public function addplaceinfo(Request $request) {
        $image =  $request->file('image');
        $nameimage = time() . '.' . $image->getClientOriginalExtension();;
        $location = 'image/' . $nameimage;
        Storage::putFileAs('public/image', $image, $nameimage);

        PlaceModel::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'price' => $request->price,
            'image' => $location,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect('home');
    }

}
