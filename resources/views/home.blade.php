@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">

                <div class="mt-3">
                    <a href="/contacts/create" class="btn btn-dark" style="float: left; margin-left:20px">
                        Add New Contact
                    </a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <form method="post" action="/search">
                            <lable for="search">Search by last name:</lable>
                            <input type="text" name= "search">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button>Search Now</button>
                        </form>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">@sortablelink('first_name')</th>
                            <th scope="col">@sortablelink('last_name')</th>
                            <th scope="col">@sortablelink('email')</th>
                            <th scope="col">@sortablelink('phone')</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($contacts->count())
                            @foreach($contacts as $key =>$contact)
                                <tr>
                                    <td>
                                        <img width="75" class="responsive" src="store_image/fetch_image/{{$contact->id}}"/>
                                    </td>
                                    <td>{{ $contact->first_name }}</td>
                                    <td>{{ $contact->last_name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>

                                        <form action="/contacts/{{ $contact->id }}" method="post" style="display: inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
