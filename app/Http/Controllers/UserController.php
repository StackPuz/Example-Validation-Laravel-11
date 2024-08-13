<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController {

    use ValidatesRequests;

    public function index()
    {
        return view('user');
    }

    public function store()
    {
        $this->validate(request(), [
            'id' => 'required',
            'name' => 'max:10',
            'email' => 'email',
            'age' => 'numeric|between:1,100',
            'birth_date' => 'date'
        ]);
        return view('user', [ 'pass' => true ]);
    }
}