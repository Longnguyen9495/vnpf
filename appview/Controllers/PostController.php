<?php
/**
 * Created by PhpStorm.
 * User: Stephen Nguyen
 * Date: 4/27/2017
 * Time: 5:10 PM
 */

namespace AppView\Controllers;


use AppView\Repository\PostRepository;
use AppView\Repository\PostRepositoryInterface;
use VatGia\Cache\Facade\Cache;

class PostController extends FrontEndController
{

    public function index()
    {
        $posts = model('posts/get_list')->load();
        $posts = $posts['vars'];
        return $this->renderView('posts/index', ['posts' => $posts]);
    }
}