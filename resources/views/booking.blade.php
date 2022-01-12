@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booking') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Package</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Sub Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="">
                                @forelse ($bookings as $booking)
                                    <td><input type="text" value="{{ $booking->place->name }}" name="place_name"></td>
                                    <td><input type="text" value="{{ $booking->place->id }}" name="place_id"></td>
                                    <td><input type="text" value="{{ $booking->place->id }}" name="user_id"></td>
                                    <td><input type="text" value="{{ $booking->book->id }}" name="book_id"></td>
                                    @empty
                                        <td colspan="6">You don't have any bookings yet</td>
                                @endforelse
                            </form>
                        </tbody>
                    </table>
                </div>
                {{-- <button type="submit" class="btn btn-primary">
                    {{ __('Confirm') }}
                </button> --}}
            </div>
        </div>
    </div>
</div>

{{-- <div class="cart">
    <h2>Cart</h2>
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Item Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Sub Total</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table> --}}
    {{-- <p style="margin-left: 85%;">Grand Total {{ $sum }},-</p>
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
                @foreach ($products as $product)
                    <input type="hidden" value="{{ $product->id }}" name="id">
                @endforeach --}}
                
        {{-- </form> --}}

{{-- </div> --}}
@endsection