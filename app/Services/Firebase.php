<?php
namespace App\Services;
use Kreait\Firebase\Database;
use Kreait\Laravel\Firebase\Facades\Firebase as FB;

class Firebase {
    public $database;
    public function __construct()
    {
        $defaultAuth = FB::auth();
        $appAuth = FB::project('app')->auth();
        $this->database = FB::database();
    }

    public function saveData($match) {
        $this->database->getReference('LiveMatches')->set($match);
    }
}
