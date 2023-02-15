@extends('layouts.app')

@section('content')
<home-page
    :_user="{{user()}}"
></home-page>
@endsection
