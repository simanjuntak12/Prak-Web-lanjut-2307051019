<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $data = [
            'nama' => 'Andre',
            'kelas' => 'D3MI',
            'npm' => '2307051019',
        ];
        return view('profile', $data);
    }
}