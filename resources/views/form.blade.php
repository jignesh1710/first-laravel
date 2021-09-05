<form action="getdata" method="post">
    @csrf
  <input type="text" name="username">
  <input type="password" name="password">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>