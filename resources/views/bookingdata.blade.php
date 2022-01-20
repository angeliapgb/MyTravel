@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booking Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('bookingconfirmation') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contacts Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="departure" class="col-md-4 col-form-label text-md-right">{{ __('Check-In') }}</label>

                            <div class="col-md-6">
                                <input id="departure" type="date" class="form-control @error('departure') is-invalid @enderror" name="departure" value="{{ old('departure') }}" required autocomplete="departure" autofocus>

                                @error('departure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="arrival" class="col-md-4 col-form-label text-md-right">{{ __('Check-Out') }}</label>

                            <div class="col-md-6">
                                <input id="arrival" type="date" class="form-control @error('arrival') is-invalid @enderror" name="arrival" value="{{ old('arrival') }}" required autocomplete="arrival" autofocus>

                                @error('arrival')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" min="1" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                @error('amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label text-md-right" style="margin-top: 1%">Type</label>

                            <div class="col-md-6">
                                <select class="form-control" name="type">
                                <option value="standard">Standard Room</option>
                                <option value="superior">Superior Room</option>
                                <option value="deluxe">Deluxe Room</option>
                                <option value="junior">Junior Suite Room</option>
                                <option value="president">President Suite Room</option>
                                </select>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Total Price') }}</label>

                            <div class="col-md-6">
                                <p>{{ $price->price }}</p>
                                {{-- *request()->input('amount') --}}
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection