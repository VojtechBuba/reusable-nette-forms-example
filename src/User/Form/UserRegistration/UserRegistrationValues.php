<?php declare(strict_types = 1);

namespace Src\User\Form\UserRegistration;

final class UserRegistrationValues
{

	/**
	 * @var \Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues
	 */
	private $baseUserInfoValues;

	/**
	 * @var \Src\User\Form\Container\Password\PasswordValues
	 */
	private $passwordValues;

	/**
	 * @var bool
	 */
	private $becomeLoyaltyMember;

	/**
	 * @var \Src\User\Form\Container\LoayltyUser\LoyaltyUserValues|NULL
	 */
	private $loyaltyUserValues;

	public function __construct(
		\Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues $baseUserInfoValues,
		\Src\User\Form\Container\Password\PasswordValues $passwordValues,
		bool $becomeLoyaltyMember,
		?\Src\User\Form\Container\LoayltyUser\LoyaltyUserValues $loyaltyUserValues
	)
	{
		$this->baseUserInfoValues = $baseUserInfoValues;
		$this->passwordValues = $passwordValues;
		$this->becomeLoyaltyMember = $becomeLoyaltyMember;
		$this->loyaltyUserValues = $loyaltyUserValues;
	}


	public function getBaseUserInfoValues(): \Src\User\Form\Container\BaseUserInfo\BaseUserInfoValues
	{
		return $this->baseUserInfoValues;
	}

	public function getPasswordValues(): \Src\User\Form\Container\Password\PasswordValues
	{
		return $this->passwordValues;
	}


	public function isBecomeLoyaltyMember(): bool
	{
		return $this->becomeLoyaltyMember;
	}


	public function getLoyaltyUserValues(): ?\Src\User\Form\Container\LoayltyUser\LoyaltyUserValues
	{
		return $this->loyaltyUserValues;
	}

}
