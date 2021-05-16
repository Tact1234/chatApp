<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class NewsController extends BaseController
{
		public function getNews(){
			define('URL_RSS',"https://news.google.com/rss/headlines/section/topic/");
			define('QUERY_PARAM',"?hl=ja&ie=UTF-8&oe=UTF-8&gl=JP&ceid=JP:ja");
			define('TOPICS',array(
				"国内"=>"NATION"
				,"国際"=>"WORLD"
				,"ビジネス"=>"BUSINESS"
				,"政治"=>"POLITICS"
				,"健康"=>"HEALTH"
				,"エンタメ"=>"ENTERTAINMENT"
				,"スポーツ"=>"SPORTS"
				,"テクノロジー"=>"SCITECH")
			);

			$newArray = array();
			foreach(TOPICS as $key => $topic){
				// GoogleのRSSフィードからRSSを取得
				$feed = file_get_contents(URL_RSS . $topic . QUERY_PARAM);
				// XML解析を行う上で、XMLで不正文字と扱われる対象を空文字に変換
				$invalid_characters = '/[^\x9\xa\x20-\xD7FF\xE000-\xFFFD]/';
				$feed = preg_replace($invalid_characters, '', $feed);
				// 文字列をXMLとして解析し、
				// １．SimpleXMLElementクラスのインスタンスに変換
				// ２．JSON形式にエンコード
				// ３．連想配列にデコード
				$rss = json_decode(json_encode(simplexml_load_string($feed)),true);
				$newArray = array_merge($newArray,array($key => $rss));
			}

			return $newArray;
		}
}
