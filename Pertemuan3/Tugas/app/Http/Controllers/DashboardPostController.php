<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPostController extends Controller
{
    public function index()
    {
        // menggunakan user_id dari user yang sedang login
        $posts = Post::where('user_id', Auth::id());

        // fitur search
        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        // menampilkan 5 data per halaman dengan pagination
        return view('dashboard.index', [
            'posts' => $posts->paginate(5)->withQueryString()
        ]);
    }

    public function create()
    {
        // Ambil semua categories
        $categories = Category::all();
        return view('dashboard.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
            'excerpt' => 'required',
        ]);

        // Generate slug dari title
        $slug = Str::slug($request->title) ?: Str::random(8);

        // Pastikan slug unique - jika sudah ada, tambahkan angka di belakang
        $originalSlug = $slug;
        $count = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        // Create post
        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'excerpt' => $request->excerpt,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('dashboard.show', ['post' => $post]);
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        
    }
}
