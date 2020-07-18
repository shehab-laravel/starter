@extends('layouts.master')
@section('content')
  <h1>
      hellow about


  </h1>

    @if ($name == 'shehap')
    <b> yes iam shehap</b>
    @else
        <b>
            No
        </b>
    @endif
    <b> Wellcome all</b>
@stop

