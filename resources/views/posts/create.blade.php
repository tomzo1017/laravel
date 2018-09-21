@extends ('layout')


@section ('content')
<div class="col-md-8">
<h1> create a post </h1>
<form method="POST" action="/posts">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" placeholder="" name="title" required>
   
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>
  </div>

  <div class="form-group">

  <button type="submit" class="btn btn-primary">Publish</button>
</div>

@include ('partials.errors')
</form>
</div>
@endsection