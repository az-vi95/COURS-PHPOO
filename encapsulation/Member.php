<?php
class Member
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;
    
    /**
     * @var string
     */
    private $age;

    /**
     * Getter de l'attribut firstname
     * 
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * 
     * Setter de l'attribut firstname
     * 
     * @param string $firstname La valeur à donner à l'attribut
     */

     public function setFirstname(string $firstname)
     {
         if (strlen($firstname) > 10) {
            trigger_error('Prénom trop long');
         }else{
             $this->firstname = $firstname;
         }

         return $this;
     }

     public function getLastname()
     {
         return $this->lastname;
     }

     public function setLastname(string $lastname)
     {
         $this->lastname = $lastname;

         return $this;
     }

     public function getAge()
     {
         return $this->age;
     }

     public function setAge(int $age)
     {
        $this->age = $age;

        return $this;
     }
}   