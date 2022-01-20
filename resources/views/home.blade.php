@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('New This Week !') }}</div>
    <div class="card-deck">
        <div class="col-md-auto d-flex justify-content-evenly flex-wrap">
            @foreach($place as $p)
            <div class="card mt-5">
                <img src="{{ Storage::url($p->image) }}" class="card-img-top" alt="{{ $p->name }}" style="height: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $p->name }}</h5>
                    <p class="card-text">{{ $p->description }}</p>
                    <a href="{{ route('detailplace', $p->name) }}" class="btn btn-primary">Details</a>
                    @if (auth()->user()->role_name == 'admin')
                    <a href="{{ route('updateplace', $p->name) }}" class="btn btn-primary">Update</a>
                    <form method="POST" action="{{ route('deleteplace') }}">
                        @csrf
                        <input type="hidden" name="place_name" value="{{ $p->name }}">
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

    

    <div class="card-header">{{ __('Perfect Destination') }}</div>
    <div class="card-body"></div>
                
    <div class="card-header">{{ __('Popular Tours') }}</div>
    <div class="card-body"></div>
</div>
@endsection
