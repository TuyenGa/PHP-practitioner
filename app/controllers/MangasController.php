<?php

class MangasController {

    public function index()
    {
        $head = [
            'title' => "Mangas",
            'sidebarActive' => $_SERVER['REQUEST_URI']
        ];

        $mangas = App::get('database')->selectAll('truyen');

        return view('mangas.index', compact('mangas', 'head'));
    }

    public function store()
    {
        $head = [
            'title' => "Add New",
            'sidebarActive' => '/mangas'
        ];
        return view('mangas.create', compact('head'));
    }

    public function create()
    {

        $name = $_POST['name'];
        $email = $_POST['email'];
        App::get('database')->insert('users', compact('name'));

        return redirect('mangas');
    }

}