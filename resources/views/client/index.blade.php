@extends('layouts.app')

@section('content')
    <div class="container">

    </div>
    <table class="table">
        <tr>
            <th class="text-center">#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th class="text-right">Actions</th>
        </tr>
        @foreach($insurances as $row)
            <tr>
                <td>{{ $row['id']}}</td>
                <td>{{$row['name']}}</td>
                <td>{{$row['surname']}}</td>
                <td>{{$row['email']}}</td>
                <td>{{$row['phone']}}</td>
                <td>{{$row['address']}}</td>
                <td>
                    <a href="{{ route('client.edit', $row['id']) }}" class="btn btn-info">Redaguoti</a>
                    <form method="post" action="{{ route('client.destroy', $row['id']) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('ar tikrai norinte istrinti?')">Delete</button>
                    </form>
                </td>
                @endforeach

            </tr>
    </table>

@endsection
