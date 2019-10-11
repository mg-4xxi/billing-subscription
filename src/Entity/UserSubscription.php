<?php

namespace Caesar\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserSubscriptionRepository")
 */
class UserSubscription
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="\App\Entity\User", inversedBy="userSubscriptions", cascade={"remove", "persist"})
     */
    private $user;

    /**
     * @var Subscription
     * @ORM\ManyToOne(targetEntity="\App\Entity\Subscription", inversedBy="userSubscriptions", cascade={"remove", "persist"})
     */
    private $subscription;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * @var string|null
     */
    private $externalSubscriptionId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @var int|null
     */
    private $created;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     * @ORM\Column(type="json", nullable=true)
     */
    private $metaData;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getSubscription(): Subscription
    {
        return $this->subscription;
    }

    public function setSubscription(Subscription $subscription): void
    {
        $this->subscription = $subscription;
    }

    public function getExternalSubscriptionId(): ?string
    {
        return $this->externalSubscriptionId;
    }

    public function setExternalSubscriptionId(?string $externalSubscriptionId): void
    {
        $this->externalSubscriptionId = $externalSubscriptionId;
    }

    public function getCreated(): ?int
    {
        return $this->created;
    }

    public function setCreated(?int $created): void
    {
        $this->created = $created;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getMetaData(): ?string
    {
        return $this->metaData;
    }

    public function setMetaData(?string $metaData): void
    {
        $this->metaData = $metaData;
    }
}
