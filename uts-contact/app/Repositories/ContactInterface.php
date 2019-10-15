<?php

namespace App\Repositories;

use App\Contact;

interface ContactInterface {
    public function create(string $nama, string $telepon, string $email, string $alamat);
    public function all();
    public function get(int $id);
    public function update(int $id, Contact $data);
    public function delete(int $id);
    public function filter(string $filter);
}