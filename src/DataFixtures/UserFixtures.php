<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Class UserFixtures
 *
 * @package App\DataFixtures
 *
 * @author Adama dodo cisse <adama.dodo.cisse@gmail.com>
 */
class UserFixtures extends Fixture
{
    /**
     * Load data fixtures with the passed EntityManager
     * @param ObjectManager $manager
     * @throws \Exception
     */
    public function load(ObjectManager $manager)
    {

        $user = new User();
        $user->setFirstName('JARVIS')->setLastName('TEST');

        $manager->persist($user);
        $manager->flush();
    }
}
