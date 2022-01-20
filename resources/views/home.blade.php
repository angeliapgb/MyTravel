@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('Hotel') }}</div>
    <div class="card-deck">
        <div class="col-md-auto d-flex justify-content-evenly flex-wrap">
            @foreach($hotel as $h)
            <div class="card mt-5">
                <img src="{{ Storage::url($h->image) }}" class="card-img-top" alt="{{ $h->name }}" style="height: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $h->name }}</h5>
                    <p class="card-text">{{ $h->description }}</p>
                    <a href="{{ route('detailplace', $h->name) }}" class="btn btn-primary">Details</a>
                    @if (auth()->user()->role_name == 'admin')
                    <a href="{{ route('updateplace', $h->name) }}" class="btn btn-primary">Update</a>
                    <form method="POST" action="{{ route('deleteplace') }}">
                        @csrf
                        <input type="hidden" name="place_name" value="{{ $h->name }}">
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>

    

    <div class="card-header" style="margin-top: 2rem">{{ __('Flight Ticket') }}</div>
    <div class="card-deck">
        <div class="col-md-auto d-flex justify-content-evenly flex-wrap">
            @foreach($airline as $a)
            <div class="card mt-5">
                <img src="{{ Storage::url($a->image) }}" class="card-img-top" alt="{{ $a->name }}" style="height: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $a->name }}</h5>
                    <p class="card-text">{{ $a->description }}</p>
                    <a href="{{ route('detailplace', $a->name) }}" class="btn btn-primary">Details</a>
                    @if (auth()->user()->role_name == 'admin')
                    <a href="{{ route('updateplace', $a->name) }}" class="btn btn-primary">Update</a>
                    <form method="POST" action="{{ route('deleteplace') }}">
                        @csrf
                        <input type="hidden" name="place_name" value="{{ $a->name }}">
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
