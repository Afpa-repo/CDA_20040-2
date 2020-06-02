<?php

namespace App\Services;

use App\Entity\User;
use App\Entity\Token;
use Twig\Environment;




class TokenSendler
{
    private $mailer;
    private $twig;
     
    public function  __construct(\Swift_Mailer $mailer, \Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }
    public function sendToken(User $user, Token $token){
        $message = (new \swift_Message('Comfirmez votre inscription'))
            ->setFrom('noreply@bad-vinyl.com')
            ->setTo($user->getEmail())
            ->setBody(
                $this->twig->render(
                    'emails/register.html.twig',
                    ['token' => $token->getValue()]
                ),
                'text/html'
            );
            $this->mailer->send($message);
    }
}