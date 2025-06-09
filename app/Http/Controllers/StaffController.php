<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public $users = [ 
            ['name'=> 'Annie', 'description'=> "Adetta all accoglienza, coi suoi modi gentili e pacati vi (in)tratterà con le sue amorevoli cure seguendo ogni singolo passo del vostro soggiorno.", 'url'=> '/media/receptionistt.jpg'],
            ['name'=> 'Sawmanta', 'description'=> "Amante di reality show e addetta all'intrattenimento, ama mettere alla prova gli ospiti con indovinelli, un divertimento adatto a tutta la famiglia.", 'url'=> '/media/saw.jpg'],
            ['name'=> 'Ghoulliver', 'description'=> 'Addetto alle pulizie, scostantemente alle prese con la manutenzione della struttura, le sue pulizie vi lasceranno a bocca aperta. Nel tempo libero ama fare lunghe passeggiate serali in riva al fiume.', 'url'=> '/media/zombie.jpg'],
            ['name'=> 'InnocEnza', 'description'=> "Responsabile della sicurezza, farà scappare qualsiasi malintenzionato a gambe LEVATE.", 'url'=> '/media/pigtails.jpg'],
            ['name'=> "I Fratelli 'Gore'met", 'description'=> "Nonostante il loro aspetto, preparano deliziosi manicaretti con le loro mani di fata. Gestiscono anche il famoso ristorante 'Il Faro'. Non vi alzerete più dalla tavola...", 'url'=> '/media/cook.png']
        ];

    public function dettaglio ($name)
    {
        foreach($this->users as $user){
            if ($name == $user['name']) {
                return view('Staff.dettaglioStaff', ['user'=>$user]);
            }
        }
    }

    public function chi_siamo() 
    {
        return view('chi_siamo',['users'=>$this->users]);
    }
}
