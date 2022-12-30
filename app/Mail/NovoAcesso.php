<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NovoAcesso extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('NovoAcesso')->with([
            'nome'  => $this->user->name,
            'email'  => $this->user->email,
            'dataHora'=>now()->setTimezone('Africa/Luanda')->format('d-m-Y H:i:s'),
        ]);
    }
}
