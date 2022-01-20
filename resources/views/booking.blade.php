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
                                <td>Contact's Name</td>
                                <td>Check-In</td>
                                <td>Check-Out</td>
                                <td>Quantity</td>
                                <td>Type</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="">
                                
                                @forelse ($bookings as $booking)
                                    <tr>
                                        <td name="no">{{ $loop->iteration}}</td>
                                        <td name="contact_name">{{ $booking->name }}</td>
                                        <td name="check_in">{{ $booking->departure }}</td>
                                        <td name="check_out">{{ $booking->arrival }}</td>
                                        <td name="amount">{{ $booking->amount }}</td>
                                        <td name="type">{{ $booking->type }}</td>
                                        @empty
                                            <td colspan="6">You don't have any bookings yet</td>
                                    </tr>
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
@endsection