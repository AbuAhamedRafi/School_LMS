@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Fee Structure</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <div class="card-header">
                                <h3 class="card-title">Fee Structure</h3>
                            </div>


                            <form action="{{ route('fee_structure.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Select Class</label> <select name="class_id"
                                                class="form-control" id="">
                                                <option value="">Select Class</option>
                                                @foreach ($classes as $class)
                                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="Input">April Fee</label>
                                                        <input type="text" name="april" class="form-control"
                                                            id="Input" placeholder="Enter April Fee">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="Input">May Fee</label>
                                                        <input type="text" name="may" class="form-control"
                                                            id="Input" placeholder="Enter may Fee">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="Input">June Fee</label>
                                                        <input type="text" name="june" class="form-control"
                                                            id="Input" placeholder="Enter June Fee">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="Input">July Fee</label>
                                                            <input type="text" name="July" class="form-control"
                                                                id="Input" placeholder="Enter July Fee">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="Input">August Fee</label>
                                                            <input type="text" name="august" class="form-control"
                                                                id="Input" placeholder="Enter August Fee">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="Input">Spetember Fee</label>
                                                            <input type="text" name="september" class="form-control"
                                                                id="Input" placeholder="Enter September Fee">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="Input">October Fee</label>
                                                                <input type="text" name="October" class="form-control"
                                                                    id="Input" placeholder="Enter October Fee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="Input">November Fee</label>
                                                                <input type="text" name="november"
                                                                    class="form-control" id="Input"
                                                                    placeholder="Enter November Fee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="Input">December Fee</label>
                                                                <input type="text" name="december"
                                                                    class="form-control" id="Input"
                                                                    placeholder="Enter December Fee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container text-center">
                                                <div class="row">

                                                    <div class="col">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="Input">January Fee</label>
                                                                <input type="text" name="january" class="form-control"
                                                                    id="Input" placeholder="Enter January Fee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="Input">February Fee</label>
                                                                <input type="text" name="february"
                                                                    class="form-control" id="Input"
                                                                    placeholder="Enter February Fee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="Input">March Fee</label>
                                                                <input type="text" name="march" class="form-control"
                                                                    id="Input" placeholder="Enter March Fee">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('customJS')
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
