<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $username = $request->input('username');

    session(['username' => $username]);
    
    return redirect('/dashboard?username=' . urlencode($username));
    }

    public function dashboard()
    {
        $username = session('username');

        if (!$username) {
            return redirect('/login');
        }

        return view('dashboard', ['username' => $username]);
    }

    public function pengelolaan()
    {
        $username = session('username');

        if (!$username) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu');
        }

        $items = [
            ['id' => 1, 'title' => 'Produk A', 'desc' => 'Deskripsi Produk A'],
            ['id' => 2, 'title' => 'Produk B', 'desc' => 'Deskripsi Produk B'],
            ['id' => 3, 'title' => 'Produk C', 'desc' => 'Deskripsi Produk C'],
        ];

        return view('pengelolaan', compact('items'));
    }

    public function profile()
{
    $username = session('username');

    if (!$username) {
        return redirect('/login')->with('error', 'Silakan login terlebih dahulu');
    }
    
    $profile = [
        'username' => $username,
        'email' => $username . '@example.com',
        'bio' => 'Tulis bio Anda disini'
    ];

    return view('profile', compact('profile'));
}
}
