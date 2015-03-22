@if ($errors->any())
<div class="well well-sm text-danger">
 <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
  <ul class="alert">
    @foreach ($errors->all() as $error)
          <li class="">{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
