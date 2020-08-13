@extends('layouts.master')

@section('content')
    <h1>Location</h1>   
    <div class="row">
        <div class="col-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Add Location
            </button>
        </div>
        <!-- Alert Data -->
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <table class='table table-hover'>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            
            @foreach($data_location as $location)
            <tr>
                <td>{{$location->code}}</td>
                <td>{{$location->name}}</td>
                <td><a href='/location/{{$location->id}}/edit' class='btn btn-warning btn-sm'>Edit </a>{{' | Delete'}}</td>
            </tr>
            @endforeach
        </table>
    </div>

        
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action='/location/create' method='POST'>
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="inputCode">Code</label>
                            <input type="text" class="form-control" id="inputCode" name='code' placeholder="Enter Code">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" name='name' placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
