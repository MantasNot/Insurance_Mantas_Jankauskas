@extends('layouts.app')

@section("content")
    <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Redaguojamas  automobilis
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('cars.update', ['car' => $cars->id]) }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Registracijos numeris:</label>
                                <input type="text" class="form-control" name="reg_number" value="{{$cars->reg_number}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Marke:</label>
                                <input type="text" class="form-control" name="brand" value="{{$cars->brand}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Modelis:</label>
                                <input type="text" class="form-control" name="model" value="{{$cars->model}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nuotrauka:</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                            <button class="btn btn-success">Atnaujinti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
