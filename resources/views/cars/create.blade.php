@extends('layouts.app')

@section("content")
    <div class="container">
        <div  class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Pridėti nauja masina
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('cars.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Registracijos numeris:</label>
                                <input type="text" class="form-control" name="reg_number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Marke:</label>
                                <input type="text" class="form-control" name="brand">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Modelis:</label>
                                <input type="text" class="form-control" name="model">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Draudejas:</label>
                                <select name="owner_id" class="form-select">
                                    @foreach($Insurance as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }} {{ $row->surname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-success">Pridėti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
