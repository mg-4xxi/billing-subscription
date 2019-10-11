<?php

declare(strict_types=1);

namespace Caesar\Entity;

interface UserSubscriptionInterface
{
    public function getId(): ?int;

    public function getUser();

    public function setUser($user): void;

    public function getExternalSubscriptionId(): ?string;

    public function setExternalSubscriptionId(?string $externalSubscriptionId): void;

    public function getCreated(): ?int;

    public function setCreated(?int $created): void;

    public function getStatus(): ?string;

    public function setStatus(?string $status): void;
}