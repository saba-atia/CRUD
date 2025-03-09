<h1> Create New employee </h1>

<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <br><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>
          
    <br><br>
    <button type="submit">Create</button>

</form>