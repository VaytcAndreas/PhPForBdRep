<?php
class Teacher extends \College\Entities\Human
{
    private bool $dismissal=false;
    private ?DateTime $dismiss=null;
    
public function __construct(
    string $firstName, string $lastName, DateTime $birthDate, string $gender, private string $depart, private string $subject
    )

{
parent::__construct($firstName,$lastName,$birthDate,$gender);
}

public function getSubjects(){
    return $this->subject;
}

public function getDepart():string{
    return $this->depart;
}


public function Dismiss (bool $status,DateTime $exp):void{
$this->dismissal=$status;
$this->dismiss=$dismiss;
}

public function status(){
    if ($this->dismissal==false){
        return 'Факультет' + $this->getDepartment();
    }
return 'Уволен - ' + $this->dismiss->format('Y-m-d');
}
}