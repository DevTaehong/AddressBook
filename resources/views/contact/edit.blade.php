@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit contact</div>
                    <div class="card-body">
                        <form action="/contacts/{{ $contact->id }}" method="post" enctype="multipart/form-data">

                            @method('PATCH')

                            @include('contact.form')
                            <a href="/home" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

