@extends('base')

@section('body')
<form method="post" action="{{ route('ContactCreate') }}">
    @csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama">
    </div>
    <div>
        <label>No Telepon:</label>
        <input type="text" name="telepon">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email">
    </div>
    <div>
        <label>Alamat:</label>
        <input type="text" name="alamat">
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection