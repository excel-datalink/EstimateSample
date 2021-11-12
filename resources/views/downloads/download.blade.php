@extends('layouts.app')

@section('title', __("Download"))

@section('content')
  <div class="container">
    <h1>{{ __("Download") }}</h1>
    <p>{{ __("Download the Excel DataLink file.") }}</p>

    <form action="{{ route('downloads.download2') }}" method="post">
      @csrf
      <input type="submit" name="download" value="{{ __('Download') }}">
      <input type="submit" name="cancel"   value="{{ __('Cancel') }}">
    </form>
  </div>

@endsection
