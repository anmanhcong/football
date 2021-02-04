<?php

namespace App\Scraper;

use App\Models\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;
use App\Services\Firebase;
use function Psy\debug;


class scrapMatch
{
    public function scrape()
    {
        DB::table('matches')->truncate();
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://thuckhuya.tv/wp-admin/admin-ajax.php?action=filter_match&filter=hot');
        $resArray = json_decode($res->getBody(), true);
        $crawler = new Crawler($resArray['data']);
        $crawler->filter('.list-channel')->each(
            function (Crawler $node) {
                if(!$node->attr('data-runtime')) return;
                $title = $node->filter('.info div.title')->text();
                $league = $node->filter('.info div.league')->text();
                $homeTeam = explode(' - ', $title)[0] ?? 'homeTeam';
                $awayTeam = explode(' - ', $title)[1] ?? 'awayTeam';
                $time = $node->attr('data-runtime');
                $match = new Match;
                $match->league = $league;
                $match->home_team = $homeTeam;
                $match->away_team = $awayTeam;
                $match->time = intval($time);
                $match->save();
            }
        );
        $data = Match::all();
        $listLeague = [];
        foreach ($data as $datum) {
            if (in_array($datum['league'], $listLeague)) continue;
            $listLeague[] = $datum['league'];
        }
        $result = [];
        foreach ($listLeague as $league) {
            $tmp = [
                'league' => $league,
                'matches' => []
            ];
            foreach ($data as $datum) {
                if ($league == $datum['league']) {
                    $tmp['matches'][] = $datum;
                }
            }
            $result[] = $tmp;
        }
        (new Firebase())->saveData($result);

        return 0;
    }
}
