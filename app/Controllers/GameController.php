<?php

namespace App\Controllers;

use App\Models\Game;
use App\Libraries\View;

class GameController {
    
    public function index () 
    {
        $games = Game::all();
        View::render('games/index', compact('games'));
    }

    public function show()
    {
       $id = $_GET['id'] ?? '';
       $game = Game::find($id);

       if (!empty($game)) {
           View::render('games/show', compact('game'));
       } else {
           $this->index();
       }
    }
}

