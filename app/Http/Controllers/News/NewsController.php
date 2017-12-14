<?php
/**
 * Created by PhpStorm.
 * User: lyn
 * Date: 2017/12/14
 * Time: 10:49
 */

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    protected $path = 'news/';

    public function index()
    {
        return view('index');
    }

    public function main()
    {
        return view('page/main');
    }


    public function newsAdd()
    {
        return view($this->path . 'newsAdd');
    }

    public function newsList()
    {
        return view($this->path . 'newsList');
    }
}