@extends('base')

@section('body')
<form method="post" action="{{ route('ContactUpdate', ['id'=>$contact->id]) }}">
    @csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $contact->nama }}">
    </div>
    <div>
        <label>No Telepon:</label>
        <input type="text" name="telepon" value="{{ $contact->telepon }}">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $contact->email }}">
    </div>
    <div>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ $contact->alamat }}">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection
