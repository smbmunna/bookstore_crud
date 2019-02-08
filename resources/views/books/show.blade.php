@extends('layouts.app')


@section('content')



    <table class="table table-bordered">
        <tbody class="thead-light">
        <tr>
            <th scope="row">Book ID</th>
            <td scope="row">{{$book->id}}</td>
        </tr>
        <tr>
            <th scope="row">Book Name</th>
            <td scope="row">{{$book->name}}</td>
        </tr>
        <tr>
            <th scope="row">Pages</th>
            <td scope="row">{{$book->pages}}</td>
        </tr>
        </tbody>
    </table>



@endsection