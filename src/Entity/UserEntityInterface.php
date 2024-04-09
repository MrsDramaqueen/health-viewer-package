<?php

namespace Forlab\HealthViewer\Entity;

interface UserEntityInterface
{
    public function getId();

    public function getName();

    public function setName(string $name);

    public function getEmail();
}