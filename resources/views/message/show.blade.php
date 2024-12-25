@extends('layouts.app')

@section('title', 'Home')

@section('content')


    <section class="section-contacts"></section>
    <div className="topgreen"></div>
    <div class='contactspage'>
        <div class='pichacontacts'></div>
        <div class='daform'>
            <h1>Chat with {{ $user->name }}</h1>

            <div id="chat-box">
                @foreach ($messages as $message)
                    <p>
                        <strong>{{ $message->sender_id === auth()->id() ? 'You' : $user->name }}:</strong>
                        {{ $message->message }}
                    </p>
                @endforeach
            </div>

            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <input type="hidden" name="receiver_id" value="{{ $user->id }}">
                <textarea name="message" required></textarea>
                <button type="submit">Send</button>
            </form>
            </form>
        </div>
    </div>


@endsection
