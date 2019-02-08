@extends('layouts.app')


@section('content')


    <form method="post" action="/books">

        <input type="text" name="name" placeholder="Book Name"><br><br>
        <input type="text" name="pages" placeholder="Number of Pages"><br><br>
        <input type="submit" value="Create Entry">

        {{csrf_field()}}

    </form>



@endsection

