<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Session;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('shop', array('articles' => $articles));
    }

    public function getAddToCart(Request $request, $id) {
        $article = Article::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($article, $article->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('shop');
    }


    public function delete()
    {
        echo "Please enter your article id below: <p>";
        return view('shop.delete');
    }

    public function deletes($id)
    {
        $this->request->allowMethod(['post', 'delete']);
    
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__("L'article avec l'id: {0} a été supprimé.", h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Please enter your article below: <p>";
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 'Article received';
        $image = request('image');
        $campus_id = request('campus_id');
        $category_id = request('category_id');
        $name = request('name');
        $price = request('price');
        $description = request('description');
        $article = Article::create(['image' =>$request->image, 'campus_id' =>$request->campus_id,'category_id' =>$request->category_id ,'name' => $request->name, 'price' => $request->price, 'description' => $request->description]);
        return redirect('shop');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$article = Article::find($id);
        //return view('shop.show', array('article' => $article));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
