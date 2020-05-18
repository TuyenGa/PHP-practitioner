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
        $tenTruyen = $_POST['name'];
        $tenChap = $_POST['chapter'];
        $linkAnh = $_POST['linkImage'];
        App::get('database')::insert('truyen', compact('tenTruyen', 'tenChap', 'linkAnh'));

        return redirect('mangas');
    }

    public function show()
    {
        $id = $_GET["id"];
        $head = [
            'title' => "Edit Manga",
            'sidebarActive' => '/mangas'
        ];
        $manga = App::get('database')->selectWithId('truyen', $id);
        return view("mangas.show", compact('manga', 'head'));
    }

    public function update()
    {
        $id = $_GET["id"];
        $tenTruyen = $_POST['name'];
        $tenChap = $_POST['chapter'];
        $linkAnh = $_POST['linkImage'];
        App::get('database')->update('truyen', compact('tenTruyen', 'tenChap', 'linkAnh'), $id);
        return redirect("mangas");
    }

    public function delete()
    {

        $id = $_GET["id"];

        App::get('database')->delete('truyen', $id);
        return redirect('mangas');

    }

}