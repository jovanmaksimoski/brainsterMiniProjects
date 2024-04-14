<?php

declare(strict_types=1);

namespace Users;

require_once(__DIR__ . '/../Database/Connection.php');

use Database\Connection as Connection;

class Users
{
    protected $id;
    private array $userInfo;
    protected string $coverImageUrl;
    protected string $mainTitleOfPage;
    protected string $subtitleOfPage;
    protected string $somethingAboutYou;
    protected string $yourTelephoneNumber;
    protected string $location;
    protected string $services;
    protected string $imageUrl;
    protected string $descService;
    protected string $imageUrlTwo;
    protected string $descServiceTwo;
    protected string $imageUrlThree;
    protected string $descServiceThree;
    protected string $descCompany;
    protected string $linkedin;
    protected string $facebook;
    protected string $twitter;
    protected string $googlePlus;


    public function __construct
    (array $userInfo)

    {
        $this->userInfo = $userInfo;

        $this->coverImageUrl = $this->userInfo['cover_image_url'];
        $this->mainTitleOfPage = $this->userInfo['main_title_of_page'];
        $this->subtitleOfPage = $this->userInfo['subtitle_of_page'];
        $this->somethingAboutYou = $this->userInfo['something_about_you'];
        $this->yourTelephoneNumber = $this->userInfo['your_telephone_number'];
        $this->location = $this->userInfo['location'];
        $this->services = $this->userInfo['services'];
        $this->imageUrl = $this->userInfo['image_url'];
        $this->descService = $this->userInfo['desc_service'];
        $this->imageUrlTwo = $this->userInfo['image_url_two'];
        $this->descServiceTwo = $this->userInfo['desc_service_two'];
        $this->imageUrlThree = $this->userInfo['image_url_three'];
        $this->descServiceThree = $this->userInfo['desc_service_three'];
        $this->descCompany = $this->userInfo['desc_company'];
        $this->linkedin = $this->userInfo['linkedin'];
        $this->facebook = $this->userInfo['facebook'];
        $this->twitter = $this->userInfo['twitter'];
        $this->googlePlus = $this->userInfo['google_plus'];

    }

    public function getUserInfo(): array
    {
        return $this->userInfo;
    }


    public function getCoverImageUrl(): string
    {
        return $this->coverImageUrl;
    }


    public function getMainTitleOfPage(): string
    {
        return $this->mainTitleOfPage;
    }


    public function getSubtitleOfPage(): string
    {
        return $this->subtitleOfPage;
    }


    public function getSomethingAboutYou(): string
    {
        return $this->somethingAboutYou;
    }


    public function getYourTelephoneNumber(): string
    {
        return $this->yourTelephoneNumber;
    }


    public function getLocation(): string
    {
        return $this->location;
    }


    public function getServices(): string
    {
        return $this->services;
    }


    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getDescService(): string
    {
        return $this->descService;
    }


    public function getImageUrlTwo(): string
    {
        return $this->imageUrlTwo;
    }


    public function getDescServiceTwo(): string
    {
        return $this->descServiceTwo;
    }


    public function getImageUrlThree(): string
    {
        return $this->imageUrlThree;
    }


    public function getDescServiceThree(): string
    {
        return $this->descServiceThree;
    }


    public function getDescCompany(): string
    {
        return $this->descCompany;
    }


    public function getLinkedin(): string
    {
        return $this->linkedin;
    }


    public function getFacebook(): string
    {
        return $this->facebook;
    }


    public function getTwitter(): string
    {
        return $this->twitter;
    }


    public function getGooglePlus(): string
    {
        return $this->googlePlus;
    }
    public function getUserByID(int $id)
    {
        try {
            $database = new Connection();
            $connection = $database->getConnection();

            $statement = $connection->prepare('SELECT * FROM users WHERE ID = :ID');
            $statement->bindParam(':ID', $id, \PDO::PARAM_INT);
            $statement->execute();

            $user = $statement->fetch(\PDO::FETCH_ASSOC);

            return $user;
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function store(): void
    {
        $database = new Connection();
        $connection = $database->getConnection();

        $sql = 'INSERT INTO
            `users` (
                     `cover_image_url`,
                     `main_title_of_page`,
                     `subtitle_of_page`,
                     `something_about_you`,
                     `your_telephone_number`,
                     `location`,
                     `services`,
                     `image_url`,
                     `desc_service`,
                     `image_url_two`,
                     `desc_service_two`,
                     `image_url_three`,
                     `desc_service_three`,
                     `desc_company`,
                     `linkedin`,
                     `facebook`,
                     `twitter`,
                     `google_plus`)
            VALUES (
                     :cover_image_url,
                     :main_title_of_page,
                     :subtitle_of_page,
                     :something_about_you,
                     :your_telephone_number,
                     :location,
                     :services,
                     :image_url,
                     :desc_service,
                     :image_url_two,
                    :desc_service_two,
                     :image_url_three,
                     :desc_service_three,
                     :desc_company,
                    :linkedin,
                     :facebook,
                     :twitter,
                     :google_plus)';

        $statement = $connection->prepare($sql);

        $statement->execute($this->userInfo);

    }


}