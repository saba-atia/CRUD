<h1>Show All Students</h1>
<button><a href="{{ route('employees.create') }}">Add New</a></button><br /><br /><br/>

<table>
    <thead>
        <tr>
            <th>#</th>  
            <th>Name</th>  
            <th>Email</th>  
        </tr>
    </thead>
    <tbody>
        
        @foreach ($employees as $employee)
            <tr> 
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>
<a href="{{route('employees.edit',$employee->id)}}">Edit</a>

<form action ="{{route('employees.destroy' , $employee ->id)}}" method="post">
 @method('DELETE')
    @csrf
    <button type="submit">Delete</button>
</form>
                </td>

            </tr> 
        @endforeach 
    </tbody>
</table>