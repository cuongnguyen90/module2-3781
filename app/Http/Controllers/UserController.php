<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repositories\UserEloquentRepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct(UserEloquentRepository $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $data = $this->user->getAll();

        return view('show',compact('data'));
    }

    public function show (Request $rq)
    {
        dd(public_path('/images'));
    }

    public function store(Request $request)
    {

    }
}
