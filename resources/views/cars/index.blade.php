@extends('layouts.app')

@section('content')
    <div class="container">

    </div>
    <table class="table">
        <tr>
            <th class="text-center">#</th>
            <th>reg number</th>
            <th>brand</th>
            <th>model</th>
            <th>owner</th>
            <th class="text-right">Actions</th>
        </tr>
        @foreach($cars as $row)
            <tr>
                <td>{{ $row['id']}}</td>
                <td>{{$row['reg_number']}}</td>
                <td>{{$row['brand']}}</td>
                <td>{{$row['model']}}</td>
                <td>
                @foreach($Insurance as $insurance)
                    @if($row['owner_id']==$insurance['id'])
                        {{$insurance['name']}} {{$insurance['surname']}}<br>
                    @endif
                @endforeach
                </td>
                <td>
                    <a href="{{ route('cars.edit', $row['id']) }}" class="btn btn-info">Redaguoti</a>
                    <form method="post" action="{{ route('cars.destroy', $row['id']) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('ar tikrai norinte istrinti?')">Delete</button>
                    </form>
                </td>
        @endforeach

            </tr>
    </table>

@endsection
