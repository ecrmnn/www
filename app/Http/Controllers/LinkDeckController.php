<?php
namespace App\Http\Controllers;

class LinkDeckController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('linkDeck.index');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function download()
    {
        return redirect('/_linkdeck/LinkDeck_by_Daniel_Eckermann_66.zip');
    }
}
