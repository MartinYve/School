<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Expr\Cast\String_;

class enseignantCreate extends Mailable
{
    use Queueable, SerializesModels;
    public $name ;
    public $ensei ;
    public $option ;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $name , String $ensei, String $option)
    {
        $this->name = $name ;
        $this->ensei = $ensei ;
        $this->option = $option ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('academiaenset@gmail.com')->view('email.enseignementcreate', [
            'name' => $this->name,
            'ensei' => $this->ensei ,
            'option' => $this->option ,
        ]);
    }
}
