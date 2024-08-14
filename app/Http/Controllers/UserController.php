<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Users;

class UserController {

    use ValidatesRequests;

    public function index()
    {
        return view('user', [ 'user' => new Users() ]);
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
        $user = new Users();
        $user->fill(request()->all());
        return view('user', [ 'user' => $user, 'pass' => true ]);
    }
}