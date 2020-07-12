<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RakutenRws_Client;

class RakutenController extends Controller
{
    public function books()
    {
        $client = new RakutenRws_Client();
        // アプリID (デベロッパーID) のセット
        $client->setApplicationId(config('rakuten.rakuten_app_id'));
        // アフィリエイトID のセット
        $client->setAffiliateId(config('rakuten.rakuten_aff_id'));
        // BooksTotal/Search API から、keyword=ボルダリング、booksGenreId=001009　を検索し取得
        $response = $client->execute('BooksTotalSearch', array(
        'keyword' => 'ボルダリング',
        'booksGenreId' => '001009',
        ));
        // レスポンスが正しいかを isOk() で確認
        if ($response->isOk()) {
            // 配列アクセスによりレスポンスにアクセスすることができる。
            // var_dump($response['hits']);
        } else {
            echo 'Error:'.$response->getMessage();
        }

        $response = $response["Items"];

        return view('items.books', ['response' => $response]);
    }
}
