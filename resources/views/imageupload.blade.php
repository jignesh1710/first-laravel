<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
  <input type="file" name="file">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>