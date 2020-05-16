<?php

class PagesController {

    public function home()
    {
        $head = [
            'title' => "Home Page",
            'sidebarActive' => $_SERVER['REQUEST_URI']
        ];
        return view('index', compact('head'));
    }

    public function about()
    {
        $head = [
            'title' => "About",
            'sidebarActive' => $_SERVER['REQUEST_URI']
        ];
        $company = 'Finext';

        return  view('about', compact('company', 'head'));
    }

    public function contact()
    {
        $head = [
            'title' => "Contact",
            'sidebarActive' => $_SERVER['REQUEST_URI']
        ];
        return view('contact', compact('head'));

    }

}