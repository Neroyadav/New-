@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Ringtones
                    <span>
                        <a type="button" class="btn btn-outline-secondary float-right" href="{{route('ringtone.create')}}">Create Ringtone</a>
                    </span>

                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">File</th>
                            <th scope="col">Downloads</th>
                            <th scope="col">Size</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($ringtones as $key => $ringtone)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$ringtone->title}}</td>
                                    <td>{{$ringtone->description}}</td>
                                    <td>
                                        <audio controls>
                                            <source src="/audio/{{$ringtone->file}}" type="audio/ogg">
                                                your browser does not support this element
                                        </audio>
                                    </td>
                                    <td>{{$ringtone->download}}</td>
                                    <td>{{$ringtone->size}}</td>
                                </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
                {{$ringtones->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
