<?php

namespace App\Repository;


use Doctrine\ORM\Query;
use App\Data\SearchData;
use App\Entity\Products;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Products|null find($id, $lockMode = null, $lockVersion = null)
 * @method Products|null findOneBy(array $criteria, array $orderBy = null)
 * @method Products[]    findAll()
 * @method Products[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Products::class);
    }



    /**
     * Undocumented function
     * Récupérer les produits en lien avec une recherche
     *
     * @return product[]
     */
    public function findSearch(SearchData $search): array
    {
        // Requête de récupération des produits
        $query = $this
            ->createQueryBuilder('p')
            ->select('c', 'p')
            ->join('p.category', 'c');


            // Si $search n'est pas vide on récupère la query 
        if (!empty($search->q)) {
            $query = $query
                ->andWhere('p.prod_name LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }


        if (!empty($search->min)) {
            $query = $query
                ->andWhere('p.prodPrice >= :min')
                ->setParameter('min', $search->min);
        }


        if (!empty($search->max)) {
            $query = $query
                ->andWhere('p.prodPrice <= :max')
                ->setParameter('max', $search->max);
        }
        if (!empty($search->promo)) {
            $query = $query
                ->andWhere('p.promo = 1');
                
        }
        if (!empty($search->categories)) {
            $query = $query
                ->andWhere('product.c.cat_id IN (:categories')
                ->setParameter('categories', $search->categories);
                
        }



        return $query->getQuery()->getResult();
    }


    // Fonction de pagination qui revoie la query
    public function findAllWithPagination(): Query
    {

        return $this->createQueryBuilder('p')
            ->getQuery();
    }

    // /**
    //  * @return Products[] Returns an array of Products objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Products
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
