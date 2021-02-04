<?php

namespace App\Http\Controllers;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Database;
use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function index() {
        $defaultAuth = Firebase::auth();
        $appAuth = Firebase::project('app')->auth();

        $database = Firebase::database();

        $database->getReference('LiveMatches/match1/name')->set('created_at', ['.sv' => 'timestamp', 'aaa' => 'bbb']);

    }
}
