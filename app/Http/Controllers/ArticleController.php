<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function articleSearch(Request $request){
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view ('article.search-index', compact('articles', 'query'));
    }
   
    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    public function __construct(){
        $this->middleware('auth')->except('index', 'show','byCategory','byUser', 'category', 'articleSearch');
    }

    
    public function create()
    {
        // Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
        return view('article.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:articles|min:10',
            'subtitle' => 'required|unique:articles|min:15|max:255',
            'body' => 'required|min:25',
            'image' => 'image|required',
            'category' => 'required',
            'tags' => 'required',
        ]);

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'image' => $request->file('image')->store('public/images'),
            'category_id' => $request->category,
            'user_id' => Auth::user()->id,
            'slug' => Str::slug($request->title),
        ]);

        $tags = explode(',', $request->tags);

        foreach($tags as $tag){
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $article->tags()->attach($newTag);
        }
    
         return redirect(route('home'))->with('message', 'Articolo creato correttamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

  
    public function update(Request $request, Article $article)
    {
      $request->validate([
        'title' => 'required|min:5|unique:articles,title,' . $article->id,
        'subtitle' => 'required|min:5|unique:articles,subtitle,' . $article->id,
        'body' => 'required|min:10',
        'image' => 'image',
        'category' => 'required',
        'tags' => 'required',

      ]);

      $imgArticle = $article->image;
      
      $article->update([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'image' => ($request->file('image') == null) ? $article->image : $request->file('image')->store('public/images'),
        'body' => $request->body,
        'category_id' => $request->category,
        'slug' => Str::slug($request->title),
        'is_accepted' => NULL,
      ]);

      if ($request->file('image') !== null) {
        
        Storage::delete($imgArticle);
    
      }

      $tags = explode(', ', $request->tags);
      $newTags = [];

      foreach($tags as $tag){
        $newTag = Tag::updateOrCreate([
            'name' => $tag,
        ]);
        $newTags[] = $newTag->id;
      }

      $article->tags()->sync($newTags);

    

      return redirect(route('writer.dashboard'))->with('message', 'Hai correttamente aggiornato l articolo scelto');


    }


    /**
     * Remove the specified resource from storage.
     */

        public function destroy(Article $article){
            foreach($article->tags as $tag){
                $article->tags()->detach($tag);
            }
            
            Storage::delete($article->image);
            $article->delete();

            return redirect(route('writer.dashboard'))->with('message', 'Hai correttamente cancellato l\'articolo scelto');
        }

        
    

    
    public function byCategory($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
        $articles = $category->articles->sortByDesc('created_at')->filter(function ($article) {
            return $article->is_accepted == true;
        });
        return view('article.by-category', compact('category', 'articles'));
    }




    public function byUser(User $user){
        
        $articles = $user->articles->sortByDesc('created_at');
        return view('article.user', compact('user', 'articles'));
    }

    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name' => 'required|unique:tags',
        ]);
        $tag->update([
            'name' => strtolower($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Hai aggiornato correttamente il tag');
    }
   
    public function deleteTag(Tag $tag){
        foreach($tag->articles as $article){
            $article->tags()->detach($tag);
        }
        $tag->delete();

        return redirect(route('admin.dashboard'))->with('message', 'Hai eliminato correttamente il tag');
    }

    public function editCategory(Request $request, Category $category){
        $request->validate([
            'name' => 'required|unique:categories'
        ]);
        $category->update([
            'name' => strtolower($request->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai aggiornato correttamente la categoria');
    }

    public function deleteCategory(Category $category){
        $category->delete();

        return redirect(route('admin.dashboard'))->with('message', 'Hai eliminato correttamente la categoria');
    }
    
    public function storeCategory(Request $request){
        Category::create([
            'name' => strtolower($request ->name),
        ]);

        return redirect(route('admin.dashboard'))->with('message', 'Hai inserito correttamente la nuova categoria');
    }

    
}


