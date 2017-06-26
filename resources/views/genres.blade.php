@foreach($genres as $genre)
   <li>{{ $genre->name }}</li>

   @foreach($genre->movies as $movie)
    <li>----{{ $movie->title }}</li>
   @endforeach
@endforeach
