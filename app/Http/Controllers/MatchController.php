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
        return json_encode([
            'success' => true,
            'message' => 'Lay danh sach tran dau thanh cong.',
            'data' => $data
        ]);
    }
}
