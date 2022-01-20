@extends('layouts.app')

@section('content')
    @foreach ($details as $detail)
        <h3 style="padding: 0 0 1rem 1rem;">{{ $detail->name}}</h3>
        <div class="detail card-deck">
            <div class="image-place">
                <img src="{{ Storage::url($detail->image) }}" alt="{{ $detail->name }}">
            </div>
            <div class="card-body">
                <h4 class="card-subtitle mb-2 text-muted">Price</h4>
                <h5 class="card-subtitle mb-2 text-muted">Rp {{ $detail->price}},- / Night</h5>
                <h4 class="card-subtitle mb-2 text-muted">Address</h4>
                <h5 class="card-subtitle mb-2 text-muted">{{ $detail->address}}</h5>
                <h4 class="card-subtitle mb-2 text-muted">Phone</h4>
                <h5 class="card-subtitle mb-2 text-muted">{{ $detail->phone}}</h5>
                <p class="card-text">{{ $detail->detail}}</p>

                <div class="book-form">
                    <form action="{{ route('bookingform', $detail->name) }}" method="POST">
                        @csrf
                            <input type="hidden" name="place_id" value="{{ $detail->id }}">
                            <input type="hidden" name="place_name" value="{{ $detail->name }}">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Book Now') }}
                            </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection