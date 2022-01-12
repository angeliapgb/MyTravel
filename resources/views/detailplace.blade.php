@extends('layouts.app')

@section('content')
    <h3 style="padding: 0 0 1rem 1rem;">Tour Summary</h3>
    <div class="card-deck">
        <div class="col-md-auto d-flex justify-content-evenly flex-wrap">
            @foreach ($details as $detail)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $detail->place}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $detail->day}}</h6>
                    <p class="card-text">{{ $detail->detail}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="book-form">
        <form action="{{ route('book', $name->name) }}" method="POST">
            @csrf
            <div class="row mb-0">
                {{-- @foreach ($bookings as $booking) --}}
                {{-- <input type="text" value="{{ $bookings->users->id }}" name="user_id"> --}}
                {{-- <input type="text" value="{{ $bookings->place->id }}" name="place_id"> --}}
                {{-- <input type="text" value="{{ $bookings->book->id }}" name="book_id"> --}}
                {{-- @endforeach --}}
                <input type="text" value="{{ $detail->id }}" name="place_id">
                <button type="submit" class="btn btn-primary">
                    {{ __('Book') }}
                </button>
            </div>
        </form>
    </div>
@endsection