<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\StoreArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ArticlesController extends Controller
{
    public function index(){
        //Auth::user() 当前登录的用户信息

//        $articles=Article::all();
//        $articles=Article::latest()->where('published_at','<=',Carbon::now())->get();
        $articles=Article::latest()->published()->get();
        return view('articles.index',compact('articles'));
    }
    public function create(){
        return view('articles.create');
    }

    public function show($id){
       $article=Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    //第一种验证
    //在项目目录下使用artisan的make:request命令就可以生成一个用于表单验证Request类了，
    //这个类我们在这里命名为StoreArticleRequest
    public function store(StoreArticleRequest $request){
        //接收post过来的数据
//        $input=$request->all();
//        $input['published_at']=Carbon::now();
        //存入数据库
       Article::create(array_merge(['user_id'=>Auth::user()->id],$request->all()));
        //重定向
        return redirect('/article');
    }

    //第二种验证 validate方法
//    public  function store(Request $request){
//        $this->validate($request,['title' => 'required|min:3','content' => 'required',]);
//        Article::create($request->all());
//        return redirect('/article');
//    }

    public function edit($id){
        $article=Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    public function update(StoreArticleRequest $request,$id){
        $article=Article::findOrFail($id);
        $article->update($request->all());
        return redirect('/article');
    }

}
