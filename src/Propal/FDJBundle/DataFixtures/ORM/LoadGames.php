<?php
namespace Propal\FDJBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Propal\FDJBundle\Entity\Game;

class LoadGames implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
		$game = new Game();
		$game->setTitle('Astro');
		$game->setImg('astro.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(false);
		
		$manager->persist($game);

		$game = new Game();
		$game->setTitle('Banco');
		$game->setImg('banco.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(true);

		$manager->persist($game);

		$game = new Game();
		$game->setTitle('Black Jack');
		$game->setImg('black-jack.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(false);

		$manager->persist($game);
		
		$game = new Game();
		$game->setTitle('Cash');
		$game->setImg('cash.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(true);

		$manager->persist($game);

		$game = new Game();
		$game->setTitle('Eldorado');
		$game->setImg('eldorado.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(false);

		$manager->persist($game);

		$game = new Game();
		$game->setTitle('La ruche d\'or');
		$game->setImg('la-ruche-d-or.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(false);

		$manager->persist($game);

		$game = new Game();
		$game->setTitle('Millionnaire');
		$game->setImg('millionnaire.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(true);

		$manager->persist($game);
		
		$game = new Game();
		$game->setTitle('Solitaire');
		$game->setImg('solitaire.jpg');
		$game->setHref('https://www.fdj.fr/jeux/illiko-jeux-de-grattage');
		$game->setStatus(true);

		$manager->persist($game);

		$manager->flush();
	}
}
