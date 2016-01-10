<?php

namespace AppBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Hecho
 */
class Hecho
{
    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var boolean
     */
    private $publicado;

    /**
     * @var string
     */
    private $resumen;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $fuentes;

    /**
     * @var integer
     */
    private $id;

    private $tags;


    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Hecho
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Hecho
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }


    public function setPublicado($publicado)
    {
        $this->publicado = $publicado;

        return $this;
    }


    public function getPublicado()
    {
        return $this->publicado;
    }


    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Hecho
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set fuentes
     *
     * @param string $fuentes
     *
     * @return Hecho
     */
    public function setFuentes($fuentes)
    {
        $this->fuentes = $fuentes;

        return $this;
    }

    /**
     * Get fuentes
     *
     * @return string
     */
    public function getFuentes()
    {
        return $this->fuentes;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    public function getTags()
   {
       return $this->tags;
   }

   public function getSlug()
   {
     $str = $this->getTitulo();
      // Lower case the string and remove whitespace from the beginning or end
      $str = trim(strtolower($str));

      // Remove single quotes from the string
      //$str = str_replace("'", ”, $str);

      // Every character other than a-z, 0-9 will be replaced with a single dash (-)
      $str = preg_replace("/[^a-z0-9]+/", '-', $str);

      // Remove any beginning or trailing dashes
      $str = trim($str, '-');

       return $str;
    }

}
