<form method="POST" action="{{ route('actor.store') }}">
  {!! csrf_field() !!}
  <input type="text" name="first_name" placeholder="Name">
  <input type="text" name="last_name" placeholder="Surname">
  <input type="text" name="rating" placeholder="Rating">

    <button type="submit">Save</button>
</form>


@if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
           </ul>
      </div>
  @endif
