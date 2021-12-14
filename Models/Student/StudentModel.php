<?php

namespace MVC\Models\Student;

use MVC\Core\Model;

class StudentModel extends Model
{
    protected $studentName;
    protected $studentId;
    protected $gender;
    protected $dob;

    /**
     * @param mixed $studentName
     */
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
    }

    /**
     * @param mixed $studenId
     */
    public function setStudentId($studenId)
    {
        $this->studenId = $studenId;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }
}