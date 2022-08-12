<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contact::sortable()->paginate(5);

        return view('home', compact('contacts'));
    }

    function fetch_image($image_id)
    {
        $contact = Contact::findOrFail($image_id);

        $image_file = Image::make($contact->image);

        $response = Response::make($image_file->encode('jpeg'));

        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function retrive()
    {
        $search = request('search');
        $contacts = Contact::where('last_name', 'LIKE', '%' . $search . '%' )->get();

        if (count($contacts) > 0)
            return view ( 'home',compact('contacts'))->withDetails($contacts)->withQuery($search);
        else
            return view ( 'home',compact('contacts'))->withMessage('Try to search again!');
    }
}
