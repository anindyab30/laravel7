@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
    @forelse($notifications as $notification)
    <li>
         @if($notification->type =='App\Notifications\PaymentReceived')
            We have receieved a payment of {{ $notification->data['amount']}} from you
         @endif
    </li>
    @empty
    <li>You have no notificatios at this time</li>
    @endforelse
    </ul>
   
</div>    
@endsection