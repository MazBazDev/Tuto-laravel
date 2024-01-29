<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        return view("tags.index", [
            "tags" => Tag::where("id", 1)->get(),
            "site_name" => "Mon super site !"
        ]);
    }

    public function createLabel(Request $request)
    {
        $request->validate([
            "label" => "string|min:4",
        ]);

        $tag = Tag::create([
            "label" => $request->label,
        ]);

        return redirect()->route("index");
    }

    public function EditLabel(Request $request, Tag $tag)
    {
        $request->validate([
            "label" => "string|min:4",
        ]);

        $tag->update([
            "label" => $request->label,
        ]);

        return redirect()->route("index");
    }

    public function DeleteLabel(Tag $tag)
    {
        $tag->delete();

        return redirect()->route("index");
    }
}
