<?php
class album
{
    private ?int $id;
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    private string $naam;
    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->naam;
    }
    /**
     * @param string $naam
     */
    public function setNaam(string $naam): void
    {
        $this->naam = $naam;
    }
    private string $artiesten;
    /**
     * @return string
     */
    public function getArtiesten(): string
    {
        return $this->artiesten;
    }
    /**
     * @param string $artiesten
     */
    public function setArtiesten(string $artiesten): void
    {
        $this->artiesten = $artiesten;
    }
}