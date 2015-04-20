<?php

use Nette\Security;

/*
CREATE TABLE users (
	id int(11) NOT NULL AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	password char(60) NOT NULL,
	role varchar(20) NOT NULL,
	PRIMARY KEY (id)
);
*/

/**
 * Users authenticator.
 */
class Authenticator extends Nette\Object implements Security\IAuthenticator
{
	/** @var Nette\Database\Connection */
	private $database;
        
        private $table_name;



	public function __construct(Nette\Database\Connection $database,$table_name)
	{
		$this->database = $database;
                $this->table_name=$table_name;
	}



	/**
	 * Performs an authentication.
	 * @return Nette\Security\Identity
	 * @throws Nette\Security\AuthenticationException
	 */
	public function authenticate(array $credentials)
	{
		list($username, $password) = $credentials;
		$row = $this->database->table($this->table_name)->where('email', $username)->fetch();

		if (!$row) { 
			throw new Security\AuthenticationException('Uživatelské jméno není správně.', self::IDENTITY_NOT_FOUND);
		}

		if ($row->heslo !== $this->calculateHash($password)) {   
			throw new Security\AuthenticationException('Heslo není zadáno správně.', self::INVALID_CREDENTIAL);
		}

		unset($row->password);
		return new Security\Identity($row->id, $row->role, $row->toArray());
	}



	/**
	 * Computes salted password hash.
	 * @param  string
	 * @return string
	 */
	public static function calculateHash($password)
	{
            return sha1('as$fhk|sx&@'.md5($password)."sad&#21/");
	}

}
