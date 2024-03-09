<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quail;

class QuailController extends Controller
{
    protected $quail;

    public function __construct()
    {
        $this->quail = new Quail();
    }

    public function index()
    {
        $quails = $this->quail::all();
        return view('home')->with('quails', $quails);
    }

    public function show()
    {
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $req)
    {
        $this->quail->title = $req->input('title');
        $this->quail->content = $req->input('content');

        $this->quail->save();

        return redirect('/');
    }

    public function update()
    {
    }
}
