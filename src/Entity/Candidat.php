<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CandidatRepository::class)
 */
class Candidat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matPolice;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matSolde;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomPrenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $grade;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateRecrutement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateDernierePromo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateDernierAvancement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $anneeRestant;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateDepart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contacts;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pieceJointe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getMatPolice(): ?string
    {
        return $this->matPolice;
    }

    public function setMatPolice(string $matPolice): self
    {
        $this->matPolice = $matPolice;

        return $this;
    }

    public function getMatSolde(): ?string
    {
        return $this->matSolde;
    }

    public function setMatSolde(string $matSolde): self
    {
        $this->matSolde = $matSolde;

        return $this;
    }

    public function getNomPrenom(): ?string
    {
        return $this->nomPrenom;
    }

    public function setNomPrenom(string $nomPrenom): self
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getDateRecrutement(): ?string
    {
        return $this->dateRecrutement;
    }

    public function setDateRecrutement(string $dateRecrutement): self
    {
        $this->dateRecrutement = $dateRecrutement;

        return $this;
    }

    public function getDateDernierePromo(): ?string
    {
        return $this->dateDernierePromo;
    }

    public function setDateDernierePromo(string $dateDernierePromo): self
    {
        $this->dateDernierePromo = $dateDernierePromo;

        return $this;
    }

    public function getDateDernierAvancement(): ?string
    {
        return $this->dateDernierAvancement;
    }

    public function setDateDernierAvancement(string $dateDernierAvancement): self
    {
        $this->dateDernierAvancement = $dateDernierAvancement;

        return $this;
    }

    public function getAnneeRestant(): ?string
    {
        return $this->anneeRestant;
    }

    public function setAnneeRestant(string $anneeRestant): self
    {
        $this->anneeRestant = $anneeRestant;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getContacts(): ?string
    {
        return $this->contacts;
    }

    public function setContacts(string $contacts): self
    {
        $this->contacts = $contacts;

        return $this;
    }

    public function getPieceJointe(): ?string
    {
        return $this->pieceJointe;
    }

    public function setPieceJointe(string $pieceJointe): self
    {
        $this->pieceJointe = $pieceJointe;

        return $this;
    }
}
