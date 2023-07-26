<center>

@if(sizeof($users)==0)
<font color='red'><h1>No Data Found</h1></font>
@else
<center><h1>Users List</h1></center>
<table border='1' cellspacing='5' cellpadding='5'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Image</td>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['first_name']}}</td>
            <td>{{$user['email']}}</td>
            <td><img src="{{$user['avatar']}}" alt=""></td>
        </tr>
    @endforeach
</table>
@endif
</center>