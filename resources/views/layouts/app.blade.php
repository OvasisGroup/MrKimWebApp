@include('layouts.header')

<main>
@if (session('success'))
    <div class="py-2 text-center text-white bg-green-500">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="py-2 text-center text-white bg-red-500">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @yield('content')
</main>

@include('layouts.footer')