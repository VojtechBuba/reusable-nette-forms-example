<?php declare(strict_types = 1);

namespace Src\User\Form\Container\BaseUserInfo;

class RegistrationUserInfoContainerFactory
{
	public function create(): BaseUserInfoContainer
	{
		$container = new BaseUserInfoContainer();
		$container
			->getFirstName()
			->setRequired()
		;
		$container
			->getLastName()
			->setRequired()
		;
		$container
			->getEmail()
			->setRequired()
		;

		return $container;
	}
}
