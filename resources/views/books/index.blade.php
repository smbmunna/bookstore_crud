@extends('layouts.app')


@section('content')


    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Book ID</th>
            <th scope="col">Book Name</th>
            <th scope="col">Pages</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($books as $book)
        <tr>
            <td><a href="books/{{$book->id}}">{{$book->id}}</a></td>
            <td><a href="books/{{$book->id}}">{{$book->name}}</a></td>
            <td><a href="books/{{$book->id}}">{{$book->pages}}</a></td>
            <td><a href="books/{{$book->id}}/edit">Edit</a> </td>
        </tr>
        @endforeach


        </tbody>
    </table>





@endsection