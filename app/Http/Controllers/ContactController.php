<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'pesan' => 'required',
        ]);

        Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subject' => $request->subject,
            'pesan' => $request->pesan,
        ]);

        return redirect('/');
    }

    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('admin.contact', compact('contacts'));
    }

    public function destroy($id)
    {
        Contact::destroy($id);

        return redirect()
                ->route('admin.contact')
                ->with('success', 'Pesan berhasil dihapus.');
    }
}
