<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserAccepted extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Creează o nouă instanță a clasei UserAccepted.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Construcția mesajului.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contul tău a fost aprobat!')
                    ->view('emails.user-accepted')
                    ->with([
                        'userName' => $this->user->manager_name,
                        'companyName' => $this->user->company_name,
                    ]);
    }
}
