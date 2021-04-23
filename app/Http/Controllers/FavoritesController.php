<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * micropostをお気に入り登録するアクション
     * 
     * @param $id 対象micropostsのid
     * @return \ILLuminate\Http\Response
     */
     
     public function store($id)
     {
         // 認証済みユーザがidの投稿をお気に入り登録する
         \Auth::user()->favorite($id);
         // 前のURLへリダイレクトさせる
         return back();
     }
     
     /**
      * micropostsのお気に入り解除するアクション
      * 
      * @param $id 対象micropostのid
      * @return \ILLuminate\Http\Response
      */
      
      public function destroy($id)
      {
          // 認証済みユーザがidの投稿のお気に入りを解除する
          \Auth::user()->unfavorite($id);
          //前のURLへリダイレクトさせる
          return back();
      }
}
