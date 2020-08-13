<h1>Location</h1>
<button>Add Location</button>
<table>
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    
    @foreach($data_location as $location)
    <tr>
        <td>{{$location->code}}</td>
        <td>{{$location->name}}</td>
        <td>{{'Edit | Delete'}}</td>
    </tr>
    @endforeach

</table>