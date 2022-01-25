@extends('layouts.main')


@section('content')

<main>

    <div class="container text-center pt-3">
        <h1>Film</h1>
    
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Nationality</th>
                <th scope="col">Vote</th>
              </tr>
            </thead>
    
        @foreach ($movies as $movie)
            
            <tbody>
              <tr>
                <th scope="row">{{$movie->id}}</th>
                <td>{{$movie->title}}</td>
                <td>{{$movie->nationality}}</td>
                <td>{{$movie->vote}}</td>
              </tr>
            </tbody>
            
            @endforeach
        </table>
    </div>
</main>

@endsection