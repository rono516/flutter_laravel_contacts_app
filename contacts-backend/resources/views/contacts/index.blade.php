@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center">Contacts of {{ Auth::user()->name }}</h1>
        <a href="/contacts/create" class="btn btn-primary">New contact</a>

        @if ($contacts == null)
            <p class="display-4">No contacts</p>
        @else
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Contact Group</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->first_name }}</td>
                            <td>{{ $contact->last_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->group->name }}</td>
                            <td>
                                <div class="btn-toolbar">
                                    <a class="btn btn-primary btn-group mr-2"
                                        href="/contacts/{{ $contact->id }}/edit">Edit</a>
                                    <form action="/contacts/{{ $contact->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-group">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

    </div>

@endsection
