@extends('layouts.app')

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                 </div>

                <div class="links">
                    <a href="{{route('post.index')}}">ADD NEW POST</a>
                    <a href="{{route('post.monitor')}}">SUMMARY</a>
                </div>
                    
        </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Titles</th>
                            <th>Post</th>
                        </tr>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->post }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
</div>
@endsection
`