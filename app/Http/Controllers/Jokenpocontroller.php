<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jokenpocontroller extends Controller
{
    public function Jokenpo_IA($playerpoints,$cpupoints,$playerchoose)
    {
        $this->playerpoints = $playerpoints;
        $this->cpupoints = $cpupoints;
        //dd($id);
        $cpuchoose =  rand(1 , 3);
       //dd($sort);
        if($playerchoose == $cpuchoose){//empate
            return view('jokenpo', ['playerpoints' => $playerpoints, 'cpupoints' => $cpupoints, 'playerplay' => $playerchoose, 'cpuplay' => $cpuchoose]);
        }

        if($playerchoose == 1){//papel
            if($cpuchoose == 2){//pedra
                $playerpoints++;//vitoria
            }else{
                $cpupoints++;
            }
            return view('jokenpo', ['playerpoints' => $playerpoints, 'cpupoints' => $cpupoints, 'playerplay' => $playerchoose, 'cpuplay' => $cpuchoose ]);
        }
        if($playerchoose == 2){//pedra
            if($cpuchoose == 3){//tesoura
                $playerpoints++;//vitoria
            }else{
                $cpupoints++;
            }
            return view('jokenpo', ['playerpoints' => $playerpoints, 'cpupoints' => $cpupoints, 'playerplay' => $playerchoose, 'cpuplay' => $cpuchoose]);
        }
        if($playerchoose == 3){//tesoura
            if($cpuchoose == 1){//papel
                $playerpoints++;//vitoria
            }else{
                $cpupoints++;
            }
            return view('jokenpo', ['playerpoints' => $playerpoints, 'cpupoints' => $cpupoints, 'playerplay' => $playerchoose, 'cpuplay' => $cpuchoose]);
        }
    }
}
