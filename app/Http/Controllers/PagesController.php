<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\b;

class PagesController extends Controller
{
    public function home()
    {
        $page_title = 'Anasayfa';
        $page_description = 'Kitaplar hakkında hızlıca bilgi edinin';

        $books = Book::all();

        $top3Categories = DB::table('books')
            ->select(DB::raw('categories.name,categories.slug,COUNT(*) as adet'))
            ->leftJoin('categories','books.category_id','=','categories.id')
            ->groupBy('category_id')
            ->orderBy('adet','desc')
            ->limit(3)
            ->get();

        $popularBooks = DB::table('reviews')
            ->select(DB::raw('books.book_name,books.slug,books.book_image, COUNT(*) as adet'))
            ->leftJoin('books','reviews.book_id','=','books.id')
            ->groupBy('book_id')
            ->orderBy('adet','desc')
            ->limit(4)
            ->get();

        $bestBooks = DB::table('reviews')
            ->select(DB::raw('books.book_name,books.slug,books.book_image, COUNT(*) as adet'))
            ->leftJoin('books','reviews.book_id','=','books.id')
            ->groupBy('book_id')
            ->orderBy('adet','desc')
            ->where('reviews.rating','=','5')
            ->limit(6)
            ->get();

//        dd($bestBooks);

        $allBooks = Book::orderBy('created_at','desc')->limit(6)->get();


        return view('pages.home', compact('page_title', 'page_description','top3Categories','popularBooks','bestBooks','allBooks'));
    }

    public function books()
    {
        $page_title = 'Kitaplar';
        $page_description = 'kitaplar anasayfası';

        return view('pages.books.index', compact('page_title', 'page_description'));
    }

    public function profile()
    {
        $page_title = 'Profil';
        $page_description = 'Hızlıca profiline göz at';

        $comments = DB::table('users')
            ->select('*','comments.created_at as comment_create_at','comments.id as c_id')
            ->leftJoin('comments','comments.commenter_id','=','users.id')
            ->leftJoin('books','books.id','=','comments.commentable_id')
            ->where('users.id',Auth::user()->id)
            ->orderBy('comment_create_at','desc')
            ->paginate(6);

//        dd($comments);

        return view('pages.user.profile', compact('page_title', 'page_description','comments'));
    }

    public function categoryPage(Request $request){
        $category = Category::query()->where('slug', $request->id)->first();

        $page_title = $category->name.' Kategorisi';
        $page_description = 'Bu kategoriye ait kitaplar';


        if ($category!=null){
            $category_result = $category->getAllCategoryBooks;
            return view('pages.category-page', compact('page_title', 'page_description','category_result'));
        }

        else
            abort(404);
    }

    public function authorPage(Request $request){
        $author = Book::query()->where('author_name_slug', $request->id)->get();

        if ($author->count() > 0){
            //dd($author);
            $page_title = $author[0]->author_name;
            $page_description = 'Bu yazara ait kitaplar';

            return view('pages.author-page', compact('page_title', 'page_description','author'));
        }
        else
            return abort(404);
    }

    public function quickSearch(Request $request)
    {
        $search = $request->input('query');
        //dd($search);

        $search_result_book = Book::query()
            ->where('book_name', 'like', '%'.$search.'%')
            ->get();

        //dd($search_result_book);

        $search_result_author = Book::query()
            ->where('author_name', 'like', "%{$search}%")
            ->get();

        return view('layout.partials.extras._quick_search_result', compact('search_result_book','search_result_author','search'));
    }

    public function sendBookComment(){
        $page_title = 'Yorum Yapın';
        $page_description = 'Okumuş olduğunuz kitap hakkında yorum yapın';

        $books = Book::query()->limit(4)->orderBy('created_at','desc')->get();

//        dd($books);

        return view('pages.sendBookComment', compact('page_title', 'page_description','books'));
    }

    public function commentableBook(Request $request){
        $page_title = 'Yorum Yapın';
        $page_description = 'Okumuş olduğunuz kitap hakkında yorum yapın';

        $books = Book::query()->limit(4)->orderBy('created_at','desc')->get();

        $foundBook = Book::query()->where('book_name','=', $request->book_name)->first();

        if ($foundBook){
            return view('pages.sendBookComment', compact('page_title', 'page_description','foundBook','books'));
        }

        else{
            return redirect()->back()->with('error','kitap bulunamadı. lütfen sayfanın alt tarafına bakınız...');
        }


//        dd($foundBook);


    }



    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';

        return view('pages.dashboard', compact('page_title', 'page_description'));
    }
}
