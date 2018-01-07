<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 5:18 PM
 */
declare(strict_types=1);
namespace src\Utilities;


class User
{
    private $id;
    private $name;
    private $birthday;

    /**
     * User constructor.
     */
    public function __construct(int $id = 0, string $name = "", \DateTime $birthday = null)
    {
        if (! empty($id)) {
            $this->id = $id;
        }

        if (! empty($name)) {
            $this->name = $name;
        }

        if (! empty($birthday)) {
            $this->birthday = $birthday;
        }
    }

    public function throwMyException () {
        throw new UserException("Invalid user");
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    private function _add($a, $b) {
        return ($a + $b);
    }


}