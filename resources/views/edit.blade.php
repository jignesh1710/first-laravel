<form action="<?php echo url("/edit")?>" method="POST">
    @csrf
<input type="hidden" name="id" value="{{$edit['id']}}">
  <input type="text" name="username" value="{{$edit['fname']}}">
  <input type="text" name="lname" value="{{$edit['lname']}}">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>