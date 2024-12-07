<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Hash;

public function build()
{
    // Generăm o parolă aleatorie
    $password = Str::random(8); // De exemplu, o parolă de 8 caractere

    // Criptăm parola
    $hashedPassword = Hash::make($password);

    // Salvăm parola criptată în baza de date
    $this->user->password = $hashedPassword;
    $this->user->save();

    // Trimitem emailul cu parola
    return $this->subject('Contul tău a fost aprobat!')
                ->view('emails.user-accepted')
                ->with([
                    'userName' => $this->user->manager_name,
                    'companyName' => $this->user->company_name,
                    'password' => $password, // Transmiterea parolei în email
                ]);
}
