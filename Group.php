<?php

class Group implements InterfaceGroups

{
private array $studentsArray=[];
public function __construct(
        private Teacher $teacher,private string $faculty,private DateTime $foundation
    ){

    }


public function getFoundation(): DateTime
    {
    return $this->foundation;
    }


public function getFaculty(): string
    {
    return $this->faculty;
    }


public function getStudents(): array
    {
    return $this->studentsArray;
    }


public function getStudent(Student $student):?Student
    {
    if (($key = array_search($student, $this->studentsArray)) !== false) {
            return $this->studentsArray[$key];
        }
        return null;
    }


public function getTeacher(): Teacher
    {
    return $this->teacher;
    }


public function setTeacher(Teacher $teacher): void
    {
    $this->teacher=$teacher;
    }
    
public function deleteStudent(Student $student):void{
    if (($key = array_search($student, $this->studentsArray)) !== false) {
            unset($this->studentsArray[$key]);
            }
        }

public function setStudent(?Student $student): void
    {
    array_push($this->studentsArray,$student);
    }


}