@extends('layoutmaster')
@section('htmlhead')
    <title>Laravel</title>

    @include('commons.head')
@endsection

@section('content')
    @include('components.navbar')
    <div class="container">
        <table class="table">
            <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($users as $user)
                    <th scope="row">1</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->alamat}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
@endsection