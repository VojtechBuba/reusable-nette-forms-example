<?php declare(strict_types = 1);

namespace Src\User\Form\Container\LoyaltyUser;

class RequiredLoyaltyUserContainerFactory
{
	public function create(): LoyaltyUserContainer
	{
		$container = new LoyaltyUserContainer();
		$container
			->getBirthDay()
			->setRequired()
		;
		$container
			->getLoyaltyAgreement()
			->setRequired()
		;
		$container
			->getAddress()
			->setRequired()
		;
		$container
			->getCity()
			->setRequired()
		;
		$container
			->getPostCode()
			->setRequired()
		;

		return $container;
	}
}
