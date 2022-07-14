@extends('template.HomePage')

<ul>
    @foreach ($movies as $movie)
        <li style="list-style: none; text-align: center">
            <h2 style="display: inline-block">{{$movie->title}}</h2> - 
            <span>{{$movie->date}}</span>
            <div>
                vote: {{$movie->vote}}
            </div>
        </li>
    @endforeach
</ul>