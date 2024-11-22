<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChessController extends Controller
{
    public function index(){
        $chessSize = array();
        $chessArea = array();
        for ($i = 1; $i <= 8; $i++) {
            $chessSize[$i]=array(1, 2, 3, 4, 5, 6, 7, 8);
        }
        for ($i = 1; $i <= sizeof($chessSize); $i++){
            if ($i%2==0){
                $chessArea[$i] = array("o, x, o, x, o, x, o, x");
            }
            else {
                $chessArea[$i] = array("x, o, x, o, x, o, x, o");
            }

        }
        return $chessArea;
    }
}
