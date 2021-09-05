<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fname</th>
      <th scope="col">Lname</th>
    </tr>
  </thead>
  <tbody>
      @foreach($fetch as $row)
    <tr>
      <th scope="row">{{$row['id']}}</th>
      <td>{{$row['fname']}}</td>
      <td>{{$row['lname']}}</td>
      <td><a href={{"edit/".$row['id']}}>Edit</a></td>
      <td><a href={{"deletedata/".$row['id']}}>Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{$fetch->links()}}
</div>