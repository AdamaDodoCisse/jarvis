<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity()
 * @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={"get", "put", "delete"},
 *     formats={"json"}
 * )
 *
 * @author Adama dodo cisse <adama.dodo.cisse@gmail.com>
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * User first name
     *
     * @Assert\NotBlank()
     * @Assert\Length(max="64")
     * @ORM\Column(type="string", length=64)
     */
    private $firstName;

    /**
     * User last name
     *
     * @Assert\NotBlank()
     * @Assert\Length(max="64")
     * @ORM\Column(type="string", length=64)
     */
    private $lastName;

    /**
     * User creation date
     *
     * @ORM\Column(type="datetime")
     */
    private $creationDate;

    /**
     * User update date.
     *
     * @ORM\Column(type="datetime")
     */
    private $updateDate;

    /**
     * User constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this
            ->setCreationDate(new \DateTime())
            ->setUpdateDate(new \DateTime());
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTimeInterface $creationDate
     * @return User
     */
    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTimeInterface $updateDate
     * @return User
     */
    public function setUpdateDate(\DateTimeInterface $updateDate): self
    {
        $this->updateDate = $updateDate;

        return $this;
    }
}
