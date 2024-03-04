@extends('layouts.app')

@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all as $error)
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
                <input type="text" name="name" class="form-control" placeholder="name"/>
            </div>
        <div class="form-group">
            <input type="text" name="surname" class="form-control" placeholder="surname"/>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="email"/>
        </div>
        <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="phone"/>
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="address"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" />
        </div>
    </form>

@endsection
