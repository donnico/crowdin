<?php

namespace AppBundle\Entity;

use AppBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentRepository")
 */
class Document
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var User
     */
    private $uploader;
    public function getUploader()
    {
        return $this->uploader;
    }
    public function setUploader($uploader)
    {
        $this->uploader = $uploader->Id;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="baseLanguage", type="string", length=255)
     */
    private $baseLanguage;
    /**
     * Set baseLanguage.
     *
     * @param string $baseLanguage
     *
     * @return Document
     */
    public function setBaseLanguage($baseLanguage)
    {
        $this->baseLanguage = $baseLanguage;

        return $this;
    }
    /**
     * Get baseLanguage.
     *
     * @return string
     */
    public function getBaseLanguage()
    {
        return $this->baseLanguage;
    }

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Ajouter un fichier .txt")
     * @Assert\File(mimeTypes={ "text/plain", "application/xliff", "application/yml" })
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $file;

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }
}
