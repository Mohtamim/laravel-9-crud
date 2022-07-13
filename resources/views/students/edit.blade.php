@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Student</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('students/' .$students->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$students->id}}" />
                            <label class="control-label">Name</label><br>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $students->name }}"><br>
                            <label class="control-label">Email</label><br>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $students->email }}"><br>
                            <label class="control-label">Phone</label><br>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ $students->phone }}"><br>
                            <label class="control-label">Address</label><br>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $students->address }}"> <br>
                            <input type="submit" value="update" class="btn btn-success">

                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection