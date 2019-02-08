@extends('layouts.app')


@section('content')


    <form method="post" action="/books/{{$book->id}}">

        <input type="text" name="name" placeholder="Book Name" value="{{$book->name}}"><br><br>
        <input type="text" name="pages" placeholder="Number of Pages"value="{{$book->pages}}"><br><br>

        <input type="hidden" name="_method" value="put">
        <input type="submit" value="Update Entry">


        {{csrf_field()}}

    </form>

    <form method="post" action="/books/{{$book->id}}">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="'Delete Entry">

        {{csrf_field()}}
    </form>



@endsection

