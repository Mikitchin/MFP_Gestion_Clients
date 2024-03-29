<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Il existe déjà un compte qui utilise ce mail')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(type: 'json')]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $contact = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieuNaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fonction = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Structure $structure = null;

    #[ORM\OneToMany(mappedBy: 'users', targetEntity: DemandeRdv::class)]
    private Collection $demandeRdvs;

    #[ORM\Column]
    private ?bool $fonctionnaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $resetToken = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Commune = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $quartier = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $matricule = null;

    #[ORM\OneToMany(mappedBy: 'userAgent', targetEntity: DemandeRdv::class)]
    private Collection $demandeRdvAgent;

    // #[ORM\Column(type: 'string', length: 100)]
    // private $resetToken;
    // #[ORM\ManyToMany(targetEntity: Roles::class, inversedBy: 'users')]
    // private Collection $privilege;

    public function __construct()
    {
        // $this->privilege = new ArrayCollection();
        $this->demandeRdvs = new ArrayCollection();
        $this->demandeRdvAgent = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getContact(): ?int
    {
        return $this->contact;
    }

    public function setContact(int $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function setLieuNaissance(?string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getStructure(): ?Structure
    {
        return $this->structure;
    }

    public function setStructure(?Structure $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    // /**
    //  * @return Collection<int, Roles>
    //  */
    // public function getPrivilege(): Collection
    // {
    //     return $this->privilege;
    // }

    // public function addPrivilege(Roles $privilege): self
    // {
    //     if (!$this->privilege->contains($privilege)) {
    //         $this->privilege->add($privilege);
    //     }

    //     return $this;
    // }

    // public function removePrivilege(Roles $privilege): self
    // {
    //     $this->privilege->removeElement($privilege);

    //     return $this;
    // }

    /**
     * @return Collection<int, DemandeRdv>
     */
    public function getDemandeRdvs(): Collection
    {
        return $this->demandeRdvs;
    }

    public function addDemandeRdv(DemandeRdv $demandeRdv): self
    {
        if (!$this->demandeRdvs->contains($demandeRdv)) {
            $this->demandeRdvs->add($demandeRdv);
            $demandeRdv->setUsers($this);
        }

        return $this;
    }

    public function removeDemandeRdv(DemandeRdv $demandeRdv): self
    {
        if ($this->demandeRdvs->removeElement($demandeRdv)) {
            // set the owning side to null (unless already changed)
            if ($demandeRdv->getUsers() === $this) {
                $demandeRdv->setUsers(null);
            }
        }

        return $this;
    }

    // public function getResetToken(): ?string
    // {
    //     return $this->resetToken;
    // }

    // public function setResetToken(?string $resetToken): self
    // {
    //     $this->resetToken = $resetToken;

    //     return $this;
    // }

    public function isFonctionnaire(): ?bool
    {
        return $this->fonctionnaire;
    }

    public function setFonctionnaire(bool $fonctionnaire): self
    {
        $this->fonctionnaire = $fonctionnaire;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): self
    {
        $this->resetToken = $resetToken;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->Commune;
    }

    public function setCommune(?string $Commune): self
    {
        $this->Commune = $Commune;

        return $this;
    }

    public function getQuartier(): ?string
    {
        return $this->quartier;
    }

    public function setQuartier(?string $quartier): self
    {
        $this->quartier = $quartier;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * @return Collection<int, DemandeRdv>
     */
    public function getDemandeRdvAgent(): Collection
    {
        return $this->demandeRdvAgent;
    }

    public function addDemandeRdvAgent(DemandeRdv $demandeRdvAgent): self
    {
        if (!$this->demandeRdvAgent->contains($demandeRdvAgent)) {
            $this->demandeRdvAgent->add($demandeRdvAgent);
            $demandeRdvAgent->setUserAgent($this);
        }

        return $this;
    }

    public function removeDemandeRdvAgent(DemandeRdv $demandeRdvAgent): self
    {
        if ($this->demandeRdvAgent->removeElement($demandeRdvAgent)) {
            // set the owning side to null (unless already changed)
            if ($demandeRdvAgent->getUserAgent() === $this) {
                $demandeRdvAgent->setUserAgent(null);
            }
        }

        return $this;
    }
}
