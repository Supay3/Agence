<?php


namespace App\Controller\Admin;


use App\Entity\Picture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminPictureController
 * @package App\Controller\Admin
 * @Route("/admin/picture")
 */
class AdminPictureController extends AbstractController
{

    /**
     * @param Picture $picture
     * @param Request $request
     * @return JsonResponse
     * @Route("/{id}", name="admin.picture.delete", methods="DELETE")
     */
    public function delete (Picture $picture, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if ($this->isCsrfTokenValid('delete'. $picture->getId(), $data['_token'])) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($picture);
            $entityManager->flush();
            return new JsonResponse(['success' => 1]);
        }
        return new JsonResponse(['error' => 'Token invalide'], 400);
    }
}