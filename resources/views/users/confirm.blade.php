@extends('layouts.default')
@section('title', '激活')
@section('content')
<form method="POST" action="{{ route('confirm_email',$token) }}">
    {{csrf_field()}}
    <input type="hidden" name="token" value="{{$token}}"">
    <button type="submit" class="btn btn-lg btn-success">激活</button>
</form>
@stop
