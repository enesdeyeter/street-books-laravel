<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
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
            ->select('*','comments.created_at as comment_create_at')
            ->leftJoin('comments','comments.commenter_id','=','users.id')
            ->leftJoin('books','books.id','=','comments.commentable_id')
            ->where('users.id',Auth::user()->id)
            ->orderBy('comment_create_at','desc')
            ->paginate(6);

        //dd($comments);

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

    public function home()
    {
        $page_title = 'Anasayfa';
        $page_description = 'kitaplar bla bla';

        return view('pages.home', compact('page_title', 'page_description'));
    }

    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';

        return view('pages.dashboard', compact('page_title', 'page_description'));
    }

    /**
     * Demo methods below
     */

    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';

        return view('pages.datatables', compact('page_title', 'page_description'));
    }

    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';

        return view('pages.ktdatatables', compact('page_title', 'page_description'));
    }

    // Select2
    public function select2()
    {
        $page_title = 'Select 2';
        $page_description = 'This is Select2 test page';

        return view('pages.select2', compact('page_title', 'page_description'));
    }

    // custom-icons
    public function customIcons()
    {
        $page_title = 'customIcons';
        $page_description = 'This is customIcons test page';

        return view('pages.icons.custom-icons', compact('page_title', 'page_description'));
    }

    // flaticon
    public function flaticon()
    {
        $page_title = 'flaticon';
        $page_description = 'This is flaticon test page';

        return view('pages.icons.flaticon', compact('page_title', 'page_description'));
    }

    // fontawesome
    public function fontawesome()
    {
        $page_title = 'fontawesome';
        $page_description = 'This is fontawesome test page';

        return view('pages.icons.fontawesome', compact('page_title', 'page_description'));
    }

    // lineawesome
    public function lineawesome()
    {
        $page_title = 'lineawesome';
        $page_description = 'This is lineawesome test page';

        return view('pages.icons.lineawesome', compact('page_title', 'page_description'));
    }

    // socicons
    public function socicons()
    {
        $page_title = 'socicons';
        $page_description = 'This is socicons test page';

        return view('pages.icons.socicons', compact('page_title', 'page_description'));
    }

    // svg
    public function svg()
    {
        $page_title = 'svg';
        $page_description = 'This is svg test page';

        return view('pages.icons.svg', compact('page_title', 'page_description'));
    }
}
