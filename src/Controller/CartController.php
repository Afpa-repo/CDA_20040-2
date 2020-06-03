<?php

namespace App\Controller;


use App\Services\Cart\CartService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart_index")
     */
    public function index(CartService $cartService)
    {
        $cartWithData = $cartService->getFullCart();

        $total = $cartService->getTotal();
        
        return $this->render('cart/index.html.twig', [
           'items' => $cartWithData,
           'total' => $total
        ]);
    }


    /**
     * @Route("/cart/add/{id}", name="cart_add")
     */
    public function add($id, CartService $cartService){
        
        $cartService->add($id);

        return $this->redirectToRoute("home");
        

    }


    /**
     * @Route("/cart/remove/{id}", name="cart_remove")
     */
    public function remove($id, CartService $cartService){
        
$cartService->remove($id);

        return $this->redirectToRoute("cart_index");
    }
}
