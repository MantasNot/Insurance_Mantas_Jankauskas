@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('client.update', $insurances['id']) }}">
@csrf
@method('PUT')
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $insurances['name'] }}">
</div>
<div class="form-group">
    <label for="surname">Surname:</label>
    <input type="text" class="form-control" id="surname" name="surname" value="{{ $insurances['surname'] }}">
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $insurances['email'] }}">
</div>
<div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ $insurances['phone'] }}">
</div>
<div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ $insurances['address'] }}">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection
