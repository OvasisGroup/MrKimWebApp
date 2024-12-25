@extends('layouts.app')

@section('title', 'Home')

@section('content')


    <section class="section-contacts"></section>
    <div className="topgreen"></div>
    <div class='contactspage'>
        <div class='pichacontacts'></div>
        <div class='daform'>

            @foreach ($users as $user)
                <a href="{{ route('messages.show', $user->id) }}">{{ $user->name }}</a>
            @endforeach

            </form>
        </div>
    </div>


@endsection
