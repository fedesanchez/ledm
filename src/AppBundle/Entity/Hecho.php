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

}
