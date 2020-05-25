<?php

class ImagesController {

    public function index()
    {
        $head = [
            'title' => "Img Chapter",
            'sidebarActive' => '/mangas'
        ];

        $chapter_id = $_GET['chapter_id'];

        $chapter = App::get('database')->selectWithId('chap', $chapter_id);
        
        $anh = App::get('database')->selectAll('anh', "WHERE idChap={$chapter_id}");
        return view('imag.index', compact('chapter', 'anh', 'head'));
    }

    public function store()
    {
        $head = [
            'title' => "Add New Images",
            'sidebarActive' => '/mangas'
        ];

        $chapter_id = $_GET['chapter_id'];
        return view('imag.create', compact('head', 'chapter_id'));
    }

    public function create()
    {
        $idChap = $_POST['chapter_id'];
        $imgAnh = $_POST['linkImg'];
        App::get('database')::insert('anh', compact('idChap', 'imgAnh'));

        return redirect("chapter/update/img?chapter_id={$idChap}");
    }

    public function show()
    {
        $id = $_GET["id"];
        $head = [
            'title' => "Edit imgages",
            'sidebarActive' => '/mangas'
        ];
        $anh = App::get('database')->selectWithId('anh', $id);
        return view("imag.show", compact('anh', 'head'));
    }

    public function update()
    {
        $id = $_GET["id"];
        $imgAnh = $_POST['linkImg'];
        $idChap = $_POST['idChap'];
        App::get('database')->update('anh', compact('imgAnh', 'idChap'), $id);
        return redirect("chapter/update/img?chapter_id={$idChap}");
    }

    public function delete()
    {
       $id = $_GET['id'];
       $anh = App::get('database')->selectWithId('anh', $id);
       App::get('database')->delete('anh', $id);
        return redirect("chapter/update/img?chapter_id={$anh->idChap}");
    }

}