<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortenerController extends Controller
{
    public function index()
    {
        return view('shortener');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'url' => ['required', 'url'],
        ]);

        $url = new ShortUrl();
        $url->url = $validated['url'];

        $url->saveOrFail();

        return view('shortener', ['id' => $url->id]);
    }

    public function resolve(int $id)
    {
        $url = ShortUrl::find($id);

        if ($url != null) {
            return redirect($url->url);
        }
    }
}
