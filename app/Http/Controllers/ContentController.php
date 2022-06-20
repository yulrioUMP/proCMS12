<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;


class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contents = Content::all();
        return view("content.contentindex", ['contents' => $contents]);
    }

    public function create()
    {
        $categories = Category::all();
        return view("content.contentcreate", ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'category' => 'required',
                'title' => 'required|min:10',
                'content' => 'required'
            ],
            [
                'title.required' => "Data wajib diisi",
                'title.min' => "Judul minimal 10 karakater"

            ]
        );

        $content = new Content();
        $content->cat_id = $request->category;
        $content->title = $request->title;
        $content->content = $request->content;

        if ($request->file('photo') != null) {
            $file = $request->file('photo');

            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSave = time() . '.' . $extension;

            $destinationPath = 'uploads';
            $file->move($destinationPath, $filenameSave);
        }

        $content->photo = $filenameSave;
        $content->save();
        return redirect('/contents');
    }

    public function show($id)
    {
        $content = Content::find($id);
        return view("content.contentshow", ['content' => $content]);
    }

    public function edit($id)
    {
        $content = Content::find($id);
        $categories = Category::all();
        return view("content.contentedit", ['content' => $content, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'category' => 'required',
                'title' => 'required|min:10',
                'content' => 'required'
            ],
            [
                'title.required' => "Data wajib diisi",
                'title.min' => "Judul minimal 10 karakater"

            ]
        );

        $content = Content::find($id);
        $content->cat_id = $request->category;
        $content->title = $request->title;
        $content->content = $request->content;

        if ($request->file('photo') != null) {
            $file = $request->file('photo');

            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSave = time() . '.' . $extension;

            $destinationPath = 'uploads';
            $file->move($destinationPath, $filenameSave);

            $photo_old = $destinationPath . '/' . $request->photo_old;
            if (file_exists(public_path($photo_old))) {
                unlink(public_path($photo_old));
            }
        } else {
            $filenameSave = $content->photo;
        }

        $content->photo = $filenameSave;
        $content->save();
        return redirect('/contents');
    }

    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect('/contents');
    }
}
