<?php

namespace App\Http\Controllers;

use App\Models\Invite;
use App\Models\Confirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InviteController extends Controller
{
    public function show($code, Request $request)
    {
        $invite = Invite::where('code', $code)->firstOrFail();
        return view('invites.show', ['invite' => $invite, 'code' => $code]);
    }

    public function confirm(String $code, Request $request)
    {
        validator($request->all(), [
            'name' => 'required|string',
            'confirm' => 'required|boolean',
        ])->validate();

        $invite = Invite::where('code', $code)->firstOrFail();

        $confirmation = new Confirmation();
        $confirmation->invite_id = $invite->id;
        $confirmation->name = $request->input('name');
        $confirmation->confirm = $request->input('confirm');
        $confirmation->save();

        return view('invites.show', ['invite' => $invite, 'success' => true]);
    }

    public function auth($code)
    {
        $invite = Invite::where('code', $code)->firstOrFail();
        return view('invites.auth', ['code' => $code, 'invite' => $invite]);
    }

    public function manage($code, Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $invite = Invite::where('code', $code)->firstOrFail();

        if (!Hash::check($request->input('password'), $invite->password)) {
            return redirect()->to(route('invites.auth', ['code' => $code]))->withErrors(['password' => 'Senha inválida']);
        }

        return view('invites.manage', ['invite' => $invite]);
    }
}
