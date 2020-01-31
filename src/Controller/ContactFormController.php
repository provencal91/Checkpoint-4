<?php


namespace App\Controller;


use App\Entity\User;
use App\Form\ContactFormType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

class ContactFormController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     * @param Request $request
     * @param MailerInterface $mailer
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function contact(Request $request, MailerInterface $mailer)
    {
        $user = new User();
        $user->setFirstname('');
        $user->setLastname('');
        $user->setEmail('');
        $user->setPhone('');
        $form = $this->createForm(ContactFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManagers();
            $user->addUser($this->getUser());
            $entityManager->persist($user);
            $entityManager->persist($this->getUser());
            $entityManager->flush();

            $email = (new TemplatedEmail())
                ->from(Address::fromString('CarFly <g.masson279@gmail.com>')
                ->to(new Address($this->getParameter('mailer_from')))
                ->subject('Votre reservation FlyCar')
                ->htmlTemplate('emails/confirmationMail.html.twig'));
            $mailer->send($email);


        }
        return $this->render("home/index.html.twig");
    }

}