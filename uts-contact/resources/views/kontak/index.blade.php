@extends('base')

@section('body')
<button ><a href="{{ route('ContactNewForm') }}">Add New</a></button>
<form method="GET" action="{{ route('ContactFilter') }}">
    <input type="text" name="filter">
    <input type="submit" value="Filter"> 
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>No Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->nama }}</td>
        <td>{{ $contact->telepon }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->alamat }}</td>
        <td><a href="{{ route('ContactDelete', ['id' => $contact->id]) }}"
            onclick="return confirm('Are you sure?')">Delete</a>
            <a href="{{ route('ContactEditForm', ['id'=> $contact->id]) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection