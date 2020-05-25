<?php

class ChapterController {

    public function index()
    {
        $head = [
            'title' => "Chapter",
            'sidebarActive' => '/mangas'
        ];

        $idTruyen = $_GET['truyen_id'];

        $chapters = App::get('database')->selectAll('chap', "WHERE chap.idTruyen = {$idTruyen}");

        $truyen = App::get('database')->selectWithId('truyen', $idTruyen);

        return view('chapter.index', compact('chapters', 'truyen', 'head'));
    }

    public function store()
    {
        $head = [
            'title' => "Add New Chapter",
            'sidebarActive' => '/mangas'
        ];

        $truyen_id = $_GET['truyen_id'];
        return view('chapter.create', compact('head', 'truyen_id'));
    }

    public function create()
    {
        $time = new DateTime();
        $idTruyen = $_POST['truyen_id'];
        $ngaynhap = $time->format('Y-m-d');
        $tenChap = $_POST['chapter'];
        App::get('database')::insert('chap', compact('tenChap', 'ngaynhap', 'idTruyen'));

        return redirect("chapter?truyen_id={$idTruyen}");
    }

    public function show()
    {
        $id = $_GET["id"];
        $head = [
            'title' => "Edit Chapter",
            'sidebarActive' => '/mangas'
        ];
        $chapter = App::get('database')->selectWithId('chap', $id);
        return view("chapter.show", compact('chapter', 'head'));
    }

    public function update()
    {
        $id = $_GET["id"];
        $tenchap = $_POST['chapter'];
        $time = new DateTime();
        $idTruyen = $_POST['truyen_id'];
        $ngaynhap = $time->format('Y-m-d');
        App::get('database')->update('chap', compact('tenchap', 'ngaynhap', 'idTruyen'), $id);
        return redirect("chapter?truyen_id={$idTruyen}");
    }

    public function updateImg()
    {

        
    }

}