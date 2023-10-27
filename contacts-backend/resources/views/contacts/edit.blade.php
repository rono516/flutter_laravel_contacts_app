@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Contact contact</h1>
        <form action="/contacts/{{ $contact->id }}" method="post">
            @csrf 
            @method('patch')
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nombre"
                    value="{{ $contact->first_name }}">
                <small></small>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Nombre"
                    value="{{ $contact->last_name }}">
                <small></small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Nombre"
                    value="{{ $contact->email }}">
                <small></small>
            </div>
            <button type="submit" class="btn btn-success mt-3">Update</button>
            <a href="/contacts" class="btn btn-danger mt-3">Cancel</a>

        </form>
    </div>
@endsection
