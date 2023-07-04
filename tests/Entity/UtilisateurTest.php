<?php

namespace App\Tests\Entity;

use App\Entity\Utilisateur;
use PHPUnit\Framework\TestCase;

class UtilisateurTest extends TestCase
{

    public function testSetPassword()
    {
        // Create a new Utilisateur object
        $utilisateur = new Utilisateur();
        $test_password = "test_password";
        $utilisateur->setPassword($test_password);
        $utilisateur_password_hash = $utilisateur->getPassword();
        $verify = password_verify($test_password, $utilisateur_password_hash);
        $this->assertTrue($verify);
    }
}
