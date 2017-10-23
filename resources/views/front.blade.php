@extends('layoutmaster')
@section('htmlhead')
    <title>Laravel</title>

    @include('commons.head')
@endsection

@section('content')
    @include('components.navbar')
    @if(sizeof($jobs)==0)
    <div class="p-3">
        <h3 class="text-center">No data to show</h3>
    </div>

    @endif
    @foreach($jobs as $job)
        <div class="container mt-3">
            <div class="card-columns">
                <div class="card mb-3" style="max-width: 20rem;">
                    <div class="card-header">
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-primary">Primary</span>
                    </div>
                    <div class="card-body">
                        <a href="#"> <h4 class="card-title">{{$job->name}}</h4> </a>
                        <div class="text-info"> {{$job->user->name}}</div>
                        <p class="card-text">{{$job->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('script')
@endsection