<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Component\VarDumper\Cloner\Data;

class DevoirMail extends Mailable
{
    use Queueable, SerializesModels;
    public $etudiant ;
    public $id ;
    public $date ;
    public $name ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $etudiant , String $id, Data $date, String $name)
    {
        $this->etudiant = $etudiant ;
        $this->id = $id ;
        $this->date = $date;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('academiaenset@gmail.com')->view('email.devoirmail', [
            'etudiant' => $this->etudiant,
            'id' => $this->id ,
            'date' => $this->date ,
            'name' => $this->name ,
        ]);
    }
}
