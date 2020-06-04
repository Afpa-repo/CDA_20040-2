<?php

namespace App\Services;

use App\Entity\User;
use App\Entity\Token;
use Twig\Environment;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;




class TokenSendler
{
    private $mailer;
    private $twig;
     
    public function  __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }
    public function sendToken(User $user, Token $token){
        $message = (new TemplatedEmail())
            ->from('noreply@bad-vinyl.com')
            ->to(new Address($user->getEmail()))
            ->subject('Merci pour votre inscription'
            )
                    ->htmlTemplate(
                        'emails/register.html.twig',
                        ['token' => $token->getValue()]
                    
                    );
            $this->mailer->send($message);
    }
}