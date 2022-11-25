<?php
class Student extends \College\Entities\Human
{

public function __construct(
    string $firstName, string $lastName, DateTime $birthDate, string $gender, private InterfaceGroups $group, private DateTime $entrance
    )

    {
parent::__construct($firstName, $lastName, $birthDate, $gender);
$group->setStudent($this);
    }


public function getGroup():InterfaceGroups
    {
    return $this->group;
    }


public function setGroup(InterfaceGroups $group): void
    {
    $this->group = $group;
    }


public function Expulsion (bool $status, DateTime $expuls): void
    {

    }


public function getEntrance(): DateTime
    {
    return $this->entrance;
    }

    
   
}