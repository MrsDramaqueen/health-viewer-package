<?php

namespace Forlab\HealthViewer\Entity;

interface UserEntityInterface
{
    public function getId();

    public function getName();

    public function setName($name);

    public function getEmail();
}