@extends('layouts.app')

@section('content')
<div class="container">
<!-- <img src="{{ Storage::disk('local')->get('avatars/71312.jpeg')}}"> -->
<img src="<?php echo asset("storage/avatars/71312.jpeg")?>"></img>
<a href="{{ route('backend.avatars.create')}}" class="btn btn-primary">Create</a>

</div>
@endsection
