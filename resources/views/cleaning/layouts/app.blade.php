@include('cleaning/layouts.header')

<main>


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

@include('cleaning/layouts.footer')