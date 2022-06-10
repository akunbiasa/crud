@extends('components.layouts')
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{  session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{  session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif