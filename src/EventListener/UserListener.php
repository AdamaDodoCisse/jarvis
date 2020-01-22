<?php
namespace App\EventListener;

use App\Entity\User;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Psr\Log\LoggerInterface;

/**
 * User listener
 *
 * @author Adama dodo cisse <adama.dodo.cisse@gmail.com>
 */
class UserListener
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * UserSubscriber constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Before update User
     *
     * @param LifecycleEventArgs $args
     * @throws \Exception
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if ($object instanceof User) {
            $object->setUpdateDate(new \DateTime());
        }
    }


    /**
     * After update User
     *
     * @param LifecycleEventArgs $args
     * @throws \Exception
     */
    public function postUpdate(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if ($object instanceof User) {
            $this->logger->debug("Custom update user log id : " . $object->getId());
        }
    }
}
