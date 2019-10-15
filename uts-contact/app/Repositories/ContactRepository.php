<?php

namespace App\Repositories;
use App\Contact;

class ContactRepository implements ContactInterface {
    public function create(string $nama, string $telepon, string $email, string $alamat) {
        $newCon = new Contact;
        $newCon->nama = $nama;
        $newCon->telepon = $telepon;
        $newCon->email = $email;
        $newCon->alamat = $alamat;
        $newCon->save();
    }

    public function all() {
        return Contact::all();
    }

    public function get(int $id) {
        return Contact::findOrFail($id);
    }

    public function update(int $id, Contact $data) {
        $contact = Contact::findOrFail($id);
        $contact->nama = $data->nama;
        $contact->telepon = $data->telepon;
        $contact->email = $data->email;
        $contact->alamat = $data->alamat;
        $contact->save();
    }

    public function delete(int $id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    }

    public function filter(string $filter) {
        return Contact::where('nama', 'like', '%'.$filter.'%')->get();
    }
}