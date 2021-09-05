<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<form action="registration" method="POST">
    @csrf
  <input type="text" name="username">
  <input type="password" name="password">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>