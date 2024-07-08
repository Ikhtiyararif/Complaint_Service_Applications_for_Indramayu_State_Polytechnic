@extends('layouts.default')
@section('page-title', 'Profil')
@include('includes.nav')
<link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
@section('content')
<div class="px-8 pb-4 pt-32 md:px-28 md:pb-16">
    <div class="px-8 md:px-28">
        <br>
        <div class="mb-2"><a href="{{ url()->previous() }}" class="text-decoration-none text-black"><i class="fa-solid fa-angle-left"></i> Back</a></div>
        
        <form class="form shadow-lg p-3 bg-body-tertiary rounded" action="">
            <fieldset disabled>
                {{-- @foreach ($users as $user)     --}}
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label"></label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ auth()->user()->name }}">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label"></label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ auth()->user()->email }}">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label"></label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ auth()->user()->tlp }}">
              </div>
              {{-- @endforeach --}}
        </form>
    </div>
</div>
@include('includes.footer')

@endsection