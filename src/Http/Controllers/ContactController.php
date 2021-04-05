<?php

namespace Fardin\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Fardin\Contact\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {        
        return view('contact::contact');
    }

    public function store(Request $request)
    {

        Contact::create($request->all());

        return redirect(url('contact'));
    }

    public function show($id) {

        return Contact::find($id);
    }
}
