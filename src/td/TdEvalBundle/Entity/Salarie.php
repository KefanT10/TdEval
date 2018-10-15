<?php

namespace td\TdEvalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salarie
 *
 * @ORM\Table(name="salarie")
 * @ORM\Entity(repositoryClass="td\TdEvalBundle\Repository\SalarieRepository")
 */
class Salarie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_salarie", type="string", length=60)
     */
    private $nomSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_salarie", type="string", length=60)
     */
    private $prenomSalarie;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction_salarie", type="string", length=100)
     */
    private $fonctionSalarie;

    /**
     *@ORM\OneToOne(targetEntity="td\TdEvalBundle\Entity\Ordinateur",
     *cascade={"persist"})
     *@ORM\joinColumn(nullable=false)
     */	
    private $ordinateur;
	

    /**
     * Get id
     *
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomSalarie
     *
     * @param string $nomSalarie
     *
     * @return Salarie
     */
    public function setNomSalarie($nomSalarie)
    {
        $this->nomSalarie = $nomSalarie;

        return $this;
    }

    /**
     * Get nomSalarie
     *
     * @return string
     */
    public function getNomSalarie()
    {
        return $this->nomSalarie;
    }

    /**
     * Set prenomSalarie
     *
     * @param string $prenomSalarie
     *
     * @return Salarie
     */
    public function setPrenomSalarie($prenomSalarie)
    {
        $this->prenomSalarie = $prenomSalarie;

        return $this;
    }

    /**
     * Get prenomSalarie
     *
     * @return string
     */
    public function getPrenomSalarie()
    {
        return $this->prenomSalarie;
    }

    /**
     * Set fonctionSalarie
     *
     * @param string $fonctionSalarie
     *
     * @return Salarie
     */
    public function setFonctionSalarie($fonctionSalarie)
    {
        $this->fonctionSalarie = $fonctionSalarie;

        return $this;
    }

    /**
     * Get fonctionSalarie
     *
     * @return string
     */
    public function getFonctionSalarie()
    {
        return $this->fonctionSalarie;
    }

    /**
     * Set ordinateur
     *
     * @param \td\TdEvalBundle\Entity\Ordinateur $ordinateur
     *
     * @return Salarie
     */
    public function setOrdinateur(\td\TdEvalBundle\Entity\Ordinateur $ordinateur)
    {
        $this->ordinateur = $ordinateur;

        return $this;
    }

    /**
     * Get ordinateur
     *
     * @return \td\TdEvalBundle\Entity\Ordinateur
     */
    public function getOrdinateur()
    {
        return $this->ordinateur;
    }
}
