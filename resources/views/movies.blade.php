@foreach($movies as $movie)
   <li>{{ $movie->title }} - {{ !empty($movie->genre) ? $movie->genre->name : '' }}</li>
@endforeach
