@extends('layouts.app')

@section('content')
<div class="container">

  <form action="{{ route('backend.avatars.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="avatar" class="form-controll">
    <input type="submit" value="upload" class="btn btn-primary">
  </form>

</div>
@endsection
