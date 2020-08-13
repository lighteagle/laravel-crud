@extends('layouts.master')

@section('content')
    <h1>Edit Data Location</h1>  


    <div class="row">
        <div class="col-lg-12">
            <form action='/location/{{$location->id}}/update' method='POST'>
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputCode">Code</label>
                    <input type="text" value={{$location->code}} class="form-control" id="inputCode" name='code' placeholder="Enter Code">
                </div>
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" value={{$location->name}} class="form-control" id="inputName" name='name' placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection

