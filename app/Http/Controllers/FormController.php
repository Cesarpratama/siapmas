<?php

// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function storeData(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Simpan data ke dalam database
        $user = User::create($validatedData);
        $post = $user->posts()->create($validatedData);
        $comment = $user->comments()->create($validatedData);
        $category = Category::create($validatedData);

        // Attach post to category (Jika perlu)
        $post->categories()->attach($category->id);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
