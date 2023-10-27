@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Add new contact</h1>
        <form action="/contacts" method="post">
            @csrf
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                <small></small>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                <small></small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                <small></small>
            </div>

            <div class="form-group">
                <label for="email">Contact Group</label>
                <select name="contact_group_id" class="form-select" aria-label="Default select example">
                    <option selected>Select Contact Group</option>
                    @foreach ($contact_groups as $cg)
                        <option value="{{ $cg->id }}">{{ $cg->name }}</option>
                    @endforeach
                </select>
            </div>


            {{-- <hr> --}}
            <button type="submit" class="btn btn-success mt-3">Submit</button>
            <a href="/contacts" class="btn btn-danger mt-3">Cancel</a>

        </form>
    </div>
@endsection
