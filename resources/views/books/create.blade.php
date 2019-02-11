@extends('layouts.app')


@section('content')


    <form method="post" action="/books">

        <input type="text" name="name" placeholder="Book Name"><br><br>
        <input type="text" name="pages" placeholder="Number of Pages"><br><br>
        <input class="btn btn-success shiny" type="submit" value="Create Entry">

        {{csrf_field()}}

    </form>

    @if(count($errors)>0)


        <div class="alert alert-danger">

            <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
            </ul>
        </div>




    @endif



@endsection

