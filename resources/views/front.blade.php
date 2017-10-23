@extends('layoutmaster')
@section('htmlhead')
    <title>Laravel</title>

    @include('commons.head')
@endsection

@section('content')
    @include('components.navbar')
    <div class="container mt-3">
        <div class="card-columns">
            <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header">
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-primary">Primary</span>
                </div>
                <div class="card-body">
                    <a href="#"> <h4 class="card-title">Judul Pekerjaan</h4> </a>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection