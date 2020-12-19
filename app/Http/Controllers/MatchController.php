<?php

namespace App\Http\Controllers;

use App\Models\Match;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getMatches()
    {
        $data = Match::all();
        $result = [];
        foreach ($data as $datum) {
            if (empty($result)) $result[$datum['league']][] = $datum;
            foreach ($result as $key => $value) {
                if ($key == $datum['league']) {
                    $result[$datum['league']][] = $datum;
                } else {
                    $result[$datum['league']][] = $datum;
                }
                break;
            }
        }
        return json_encode([
            'success' => true,
            'message' => 'Lay danh sach tran dau thanh cong.',
            'data' => $result
        ]);
    }
}
