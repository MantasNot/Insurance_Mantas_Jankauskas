@extends('layouts.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
        </div>
    @endif
    <form method="post" action="{{url('client')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="name"/>
            </div>
        <div class="form-group">
            <input type="text" name="surname" class="form-control" value="{{old('surname')}}" placeholder="surname"/>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="email"/>
        </div>
        <div class="form-group">
            <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="phone"/>
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control" value="{{old('address')}}" placeholder="address"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" />
        </div>
    </form>

@endsection
