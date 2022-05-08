<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\PostModel;
use App\Models\Site\PostDetailModel;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $posts = PostModel::all();
        return view('site.index', compact('posts'));
    }

    public function detail($slug){
        $post = PostDetailModel::whereSlug($slug)->first() ?? abort(403, 'Böyle bir post bulunamadı.');
        $categories = Category::all();
        return view('site.detail', compact('post', 'categories'));
    }
    
    public function category($slug){
        //$posts = PostModel::where('CategorySlug', $slug)->get() ?? abort(403, 'Böyle bir kategori bulunamadı.');
        //'products' => Product::whereCategoryId($category->id)->orderBy('id', 'DESC')->get(),
        $post = DB::select("SELECT * FROM postcategoryhome WHERE CategorySlug = $slug");
        return dd($post);
    }
}
