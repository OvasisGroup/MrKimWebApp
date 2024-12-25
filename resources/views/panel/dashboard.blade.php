


@extends('panel/layouts.app')

@section('title', 'Home')

@section('content')

        <!-- Body main section starts -->
        <main>
          <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>

        <h2 class="text-xl font-semibold leading-tight text-gray-800">
          {{ __('Profile') }}
      </h2>
         <section class="profile">
            <div class="py-12">
              <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                  <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                      <div class="p-6 text-gray-900">
                          {{ __("You're logged in!") }}
                          {{$user->name}}
                      </div>
                  </div>
              </div>
          </div>
         </section>
        </main>
      </div>
    </div>
    <!-- Body main section ends -->


    @endsection