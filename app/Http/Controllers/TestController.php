<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

class TestController extends Controller
{
    public function index ()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://thuckhuya.tv/wp-admin/admin-ajax.php?action=filter_match&filter=hot');
        $resArray = json_decode($res->getBody(), true);
        $crawler = new Crawler($resArray['data']);

        $crawler->filter('.info')->each(
            function (Crawler $node) {
                $name = $node->filter('.league div')->text();
                $title = $node->filter('div')->text();
                $name = $node->filter('div')->text();
                echo $name;
            }
        );
//        dd($crawler);

//        $client = new Client();
//        $crawler = $client->request('GET', 'http://thuckhuya.tv/wp-admin/admin-ajax.php?action=filter_match&filter=hot');
//        dd($crawler);
    }
}
