<?php


namespace App\Notification;


use App\Entity\Contact;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class ContactNotification
{
    /**
     * @var MailerInterface
     */
    private $mailer;


    /**
     * ContactNotification constructor.
     * @param MailerInterface $mailer
     */
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function notify (Contact $contact)
    {
        $mail = (new TemplatedEmail())
            ->from($contact->getEmail())
            ->to('boulou15000@gmail.com')
            ->subject('Contact message')
            ->replyTo($contact->getEmail())
            ->htmlTemplate('emails/contact.html.twig')
            ->context([
                'contact' => $contact
            ])
        ;
        $this->mailer->send($mail);
    }

}