<?php

namespace EcocolocsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $motDePasse;

    /**
     * @var string
     */
    protected $mail;

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->email;
    }

    /**
     * @param string $mail
     *
     * @return string
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param string $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }


    /**
     * @var \EcocolocsBundle\Entity\Colocation
     */
    private $colocation;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set colocation
     *
     * @param \EcocolocsBundle\Entity\Colocation $colocation
     *
     * @return User
     */
    public function setColocation(\EcocolocsBundle\Entity\Colocation $colocation = null)
    {
        $this->colocation = $colocation;

        return $this;
    }

    /**
     * Get colocation
     *
     * @return \EcocolocsBundle\Entity\Colocation
     */
    public function getColocation()
    {
        return $this->colocation;
    }
}
