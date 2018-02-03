<?php
        // src/AppBundle/Entity/User.php

        namespace AppBundle\Entity;

        use FOS\UserBundle\Model\User as BaseUser;
        use Doctrine\ORM\Mapping as ORM;
        use Symfony\Component\Validator\Constraints as Assert;

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

            public function __construct()
            {
                parent::__construct();
                // your own logic
            }

            /**
             * @ORM\Column(type="string")
             *
             * @Assert\NotBlank(message="Ajouter un fichier .txt")
             * @Assert\File(mimeTypes={ "text/plain" })
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

            /**
             * @var string
             * @ORM\Column(name="language", type="string", length=255, nullable=true)
             * @ORM\GeneratedValue(strategy="AUTO")
             */
            private $language;

            public function getLanguage()
            {
                return $this->language;
            }

            public function setLanguage($language)
            {
                $this->language = $language;

                return $this;
            }

        }