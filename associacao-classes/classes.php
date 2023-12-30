<?php 

class Jogador {
    protected $nickname;
    protected $steam_url;
    protected $api_stats;

    public function __construct($nickname, $steam_url, ApiStats $api_stats)
    {
        $this->nickname = $nickname;
        $this->steam_url = $steam_url;
        $this->api_stats = $api_stats;
    }

    public function showPlayer() 
    {
        
    }
}

class ApiStats {
    protected $kills;
    protected $deaths;
    protected $rounds_won;
    protected $rounds_lost;

    public function __construct($kills, $deaths, $rounds_won, $rounds_lost)
    {
        $this->kills = $kills;
        $this->deaths = $deaths;
        $this->rounds_won = $rounds_won;
        $this->rounds_lost = $rounds_lost;
    }
}

$api_stats = new ApiStats(10, 2, 4, 3);
$player = new Jogador("nitcooler", "url.com", $api_stats);
var_dump($player);