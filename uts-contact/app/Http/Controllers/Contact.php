<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact as ContactModel;
use App\Repositories\ContactInterface;

class Contact extends Controller
{
    protected $conRepo;

    public function __construct(ContactInterface $repo) {
        $this->conRepo = $repo;
    }

    // list all contacts
    public function index() {
        $contacts = $this->conRepo->all();
        return view('kontak.index',
            ['contacts'=>$contacts]);
    }

    // return create new contact form
    public function new_form() {
        return view('kontak.create');
    }

    // create/save contact
    public function save(Request $request) {
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $this->conRepo->create($nama, $telepon, $email, $alamat);
        return redirect(route('ContactIndex'));
    }

    // return edit contact form
    public function edit(int $id) {
        $contact = $this->conRepo->get($id);
        return view('kontak.edit',
            ['contact'=>$contact]);
    }

    // update contact
    public function update(Request $request, int $id) {
        $contact = new ContactModel();
        $contact->nama = $request->input('nama');
        $contact->telepon = $request->input('telepon');
        $contact->email = $request->input('email');
        $contact->alamat = $request->input('alamat');
        $this->conRepo->update($id, $contact);
        return redirect(route('ContactIndex'));
    }

    // delete contact
    public function delete(int $id) {
        $contact = $this->conRepo->delete($id);
        return redirect(route('ContactIndex'));
    }

    // filter contact
    public function filter_data(Request $request) {
        $search = $request->filter;
        $contacts = $this->conRepo->filter($search);
        return view('kontak.index', ['contacts' => $contacts]);
    }
}
