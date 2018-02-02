<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Trad
 *
 * @ORM\Table(name="trad")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TradRepository")
 * @Vich\Uploadable

 */

class Trad
{
     /**
      * @Vich\UploadableField(mapping="trad", fileNameProperty="tradName")
      *
      * @var File
      */
     private $tradFile;
     /**
      * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $trad
      *
      * @return Trad
     */
     public function setTradFile(File $trad = null)
     {
         $this->tradFile = $trad;

         if ($trad)
             $this->updatedAt = new \DateTimeImmutable();

         return $this;
     }
     /**
      * @return File|null
      */
     public function getTradFile()
     {
         return $this->tradFile;
     }

     /**
      * @ORM\Column(type="string", length=255)
      *
      * @var string
      */
     private $tradName;
     /**
      * @param string $tradName
      *
      * @return Devis
      */
     public function setTradName($tradName)
     {
         $this->tradName = $tradName;

         return $this;
     }
     /**
      * @return string|null
      */
     public function getTradName()
     {
         return $this->$tradName;
     }

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
     * @ORM\Column(name="submittedAt", type="string", length=255)
     */

     /**
      * @ORM\Column(type="datetime")
      *
      * @var \DateTime
     */
    private $submittedAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numberOfTrad", type="integer", nullable=true)
     */
    private $numberOfTrad;

    /**
     * @var string
     *
     * @ORM\Column(name="baseLangage", type="string", length=255)
     */
    private $baseLangage;

    /**
     * @var array|null
     *
     * @ORM\Column(name="translatingLangages", type="array", nullable=true)
     */
    private $translatingLangages;

    /**
     * @var int|null
     *
     * @ORM\Column(name="invalidations", type="integer", nullable=true)
     */
    private $invalidations;

    /**
     * @var int|null
     *
     * @ORM\Column(name="validations", type="integer", nullable=true)
     */
    private $validations;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set submittedAt.
     *
     * @param string $submittedAt
     *
     * @return Trad
     */
    public function setSubmittedAt($submittedAt)
    {
        $this->submittedAt = $submittedAt;

        return $this;
    }

    /**
     * Get submittedAt.
     *
     * @return string
     */
    public function getSubmittedAt()
    {
        return $this->submittedAt;
    }

    /**
     * Set numberOfTrad.
     *
     * @param int|null $numberOfTrad
     *
     * @return Trad
     */
    public function setNumberOfTrad($numberOfTrad = null)
    {
        $this->numberOfTrad = $numberOfTrad;

        return $this;
    }

    /**
     * Get numberOfTrad.
     *
     * @return int|null
     */
    public function getNumberOfTrad()
    {
        return $this->numberOfTrad;
    }

    /**
     * Set baseLangage.
     *
     * @param string $baseLangage
     *
     * @return Trad
     */
    public function setBaseLangage($baseLangage)
    {
        $this->baseLangage = $baseLangage;

        return $this;
    }

    /**
     * Get baseLangage.
     *
     * @return string
     */
    public function getBaseLangage()
    {
        return $this->baseLangage;
    }

    /**
     * Set translatingLangages.
     *
     * @param array|null $translatingLangages
     *
     * @return Trad
     */
    public function setTranslatingLangages($translatingLangages = null)
    {
        $this->translatingLangages = $translatingLangages;

        return $this;
    }

    /**
     * Get translatingLangages.
     *
     * @return array|null
     */
    public function getTranslatingLangages()
    {
        return $this->translatingLangages;
    }

    /**
     * Set invalidations.
     *
     * @param int|null $invalidations
     *
     * @return Trad
     */
    public function setInvalidations($invalidations = null)
    {
        $this->invalidations = $invalidations;

        return $this;
    }

    /**
     * Get invalidations.
     *
     * @return int|null
     */
    public function getInvalidations()
    {
        return $this->invalidations;
    }

    /**
     * Set validations.
     *
     * @param int|null $validations
     *
     * @return Trad
     */
    public function setValidations($validations = null)
    {
        $this->validations = $validations;

        return $this;
    }

    /**
     * Get validations.
     *
     * @return int|null
     */
    public function getValidations()
    {
        return $this->validations;
    }
}
