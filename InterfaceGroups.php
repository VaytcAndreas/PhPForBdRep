<?php

interface InterfaceGroups
{
    public function getFaculty(): string;

    public function setStudent(?Student $student): void;

    public function getStudent(Student $student): ?Student;

    public function deleteStudent(Student $student):void;

    public function getFoundation(): DateTime;

    public function getTeacher(): Teacher;

    public function setTeacher(Teacher $teacher):void;
}
