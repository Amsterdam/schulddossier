<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;

class GebruikerFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{
    public const ADMIN_USER_REFERENCE = 'admin';
    public const GKA_USER_REFERENCE = 'gka';
    public const GKA_APPBEHEERDER_USER_REFERENCE = 'gka_appbeheerder';
    public const SHV_USER_REFERENCE = 'shv';
    public const SHV_KEYUSER_USER_REFERENCE = 'shv_keyuser';
    public const USERS_JSON_FILENAME = 'users.json';

    /**
     * @inheritDoc
     */
    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        $users = $this->loadUsersJson();

        $schuldhulpverlener = $this->getReference('schuldhulpverlener');

        foreach ($users as $user) {
            $gebruiker = new Gebruiker();
            $gebruiker->setEmail($user['email']);
            $gebruiker->setType($user['type']);
            $gebruiker->setNaam($user['fullname']);
            $gebruiker->setUsername($user['username']);
            $gebruiker->setTelefoonnummer($user['telefoon'] . $user['id']);
            $gebruiker->setEnabled($user['enabled']);

            if ($gebruiker->isSchuldhulpverlener()) {
                $gebruiker->addOrganisatie($schuldhulpverlener);
            } else {
                $gebruiker->setTeamGka($this->getReference(TeamFixtures::TEAM_3_REFERENCE));
            }

            if (isset($user['last_login_interval'])) {
                $gebruiker->setLastLogin(
                    (new \DateTime())->sub(
                        new \DateInterval($user['last_login_interval'])
                    )
                );
            }

            try {
                $this->addReference($user['enabled'] ? $user['type'] : 'disabled', $gebruiker);
            } catch (\BadMethodCallException $e) {
                //Catch toegevoegd om te voorkomen dat er dubbele referenties zijn.
            }

            $manager->persist($gebruiker);
        }

        $manager->flush();
    }

    private function loadUsersJson()
    {
        $dir = explode('src/', __DIR__);
        $file = $dir[0] . self::USERS_JSON_FILENAME;
        $jsonString = file_get_contents($file);

        return array_values(array_filter(json_decode($jsonString, true)));
    }

    public function getDependencies()
    {
        return [
            OrganisatieFixtures::class,
            TeamFixtures::class
        ];
    }
}