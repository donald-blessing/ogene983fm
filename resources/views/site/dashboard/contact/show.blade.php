@extends('layouts.dashboard.index')
@section('title')
Contact Message
@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-envelope-o"></i> Contact Message</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">{{ $contact->subject }}</h3>
                <div class="tile-body">
                    <p><strong>From:</strong> {{ $contact->name }} ({{ $contact->email }})</p>
                    <p><strong>Date:</strong> {{ $contact->created_at }}</p>
                    <hr>
                    <div class="message-content">
                        {!! nl2br(e($contact->message)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
