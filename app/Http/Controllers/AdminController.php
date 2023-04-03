<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_akun()
    {
        return view('admin.akun');
    }

    public function show_faq()
    {
        return view('admin.faq');
    }

    public function show_project()
    {
        return view('admin.project');
    }

    public function show_overview()
    {
        return view('admin.overview');
    }

    public function show_logout()
    {
        return view('admin.logout');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
