<h1> Edit employee </h1>

<form action="{{ route('employees.update',$employee->id) }}" method="POST">
    @csrf

    @method('PUT')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$employee->name}}" id="name" required>
    <br><br>
    <label for="email">Email</label>
    <input type="email" name="email" value="{{$employee->email}}" id="email" required>
          
    <br><br>
    <button type="submit">update</button>

</form>