<?php

declare(strict_types=1);

namespace Caesar\Entity;

interface UserSubscriptionInterface
{
    public function getId(): ?int;

    public function getExternalSubscriptionId(): ?string;

    public function setExternalSubscriptionId(?string $externalSubscriptionId): void;

    public function getCreated(): ?int;

    public function setCreated(?int $created): void;

    public function getStatus(): ?string;

    public function setStatus(?string $status): void;

    public function getItemsLimit(): ?string;

    public function setItemsLimit(?string $itemsLimit): void;

    public function getTeamsLimit(): ?string;

    public function setTeamsLimit(?string $teamsLimit): void;

    public function getMemoryLimit(): ?string;

    public function setMemoryLimit(?string $memoryLimit): void;

    public function getUsersLimit(): ?string;

    public function setUsersLimit(?string $usersLimit): void;

    public function setSubscriptionName(?string $subscriptionName): void;

    public function getSubscriptionName(): ?string;

    public function getSubscribedAt(): ?string;

    public function setSubscribedAt(?string $subscribedAt): void;
}