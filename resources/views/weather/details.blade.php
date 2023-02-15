@extends('layouts.app')
@section('content')
  <weather-detail 
    :_city="'{{$city}}'"
  ></weather-detail>
@endsection