<?php

namespace App\Http\Controllers;

use App\Repositories\Article\ArticleInterface;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Category\CategoryRepository as Category;
use App\Repositories\Tag\TagInterface;
use App\Services\Pagination;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Section;
use App\Models\Cart;
use \Illuminate\Database\Eloquent\Collection;
use App\Ecommerce\helperFunctions;

/**
 * Class CategoryController.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class CategoryController extends Controller
{
    protected $article;
    protected $tag;
    protected $category;
    protected $perPage;

    public function __construct(ArticleInterface $article, TagInterface $tag, CategoryInterface $category)
    {
        $this->article = $article;
        $this->tag = $tag;
        $this->category = $category;
        $this->perPage = config('fully.modules.category.per_page');
    }

    /**
     * Display a listing of the resource by slug.
     *
     * @param Request $request
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, $slug)
    {
        $articles = $this->category->getArticlesBySlug($slug);

        $tags = $this->tag->all();
        $pagiData = $this->category->paginate($request->get('page', 1), $this->perPage, false);

        $categories = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);

        return view('frontend.category.index', compact('articles', 'tags', 'categories'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, Request $request)
    {

        // $category = Category::findOrFail($id);
        // $posts = $category->posts()->orderBy('creation_date', 'DESC')->paginate(10);
        //
        $category = Category::find($id);
        if (strtoupper($request->sort) == 'NEWEST') {
            $products = $category->products()->orderBy('created_at', 'desc')->paginate(40);
        } elseif (strtoupper($request->sort) == 'HIGHEST') {
            $products = $category->products()->orderBy('price', 'desc')->paginate(40);
        } elseif (strtoupper($request->sort) == 'LOWEST') {
            $products = $category->products()->orderBy('price', 'asc')->paginate(40);
        } else {
            $products = $category->products()->paginate(40);
        }

        helperFunctions::getPageInfo($sections,$cart,$total);

        return view('frontend.ecom.category', compact('sections', 'cart', 'total', 'category', 'products'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'section_id' => 'required'
        ]);
        Category::create($request->all());
        return \Redirect('/admin/categories')->with([
            'flash_message' => 'Category successfully Created'
        ]);
    }

    public function edit($id, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'section_id' => 'required'
        ]);
        Category::find($id)->update($request->all());
        return \Redirect()->back()->with([
            'flash_message' => 'Category Successfully Edited'
        ]);
    }
}
