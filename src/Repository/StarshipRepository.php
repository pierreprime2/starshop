<?php


namespace App\Repository;

use App\Model\Starship;
use DateTimeImmutable;
use Psr\Log\LoggerInterface;
use App\Model\StarshipStatusEnum;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {

    }

    public function findAll(): array
    {
        $this->logger->info('Starship collection retrieved');

        return [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickles',
                StarshipStatusEnum::IN_PROGRESS,
                new DateTimeImmutable()
            ),
            new Starship(
                2,
                'USS Espresso (NCC-1234-C)',
                'Latte',
                'James T. Quick!',
                StarshipStatusEnum::COMPLETED,
                new DateTimeImmutable()
            ),
            new Starship(
                3,
                'USS Wanderlust (NCC-2024-W)',
                'Delta Tourist',
                'Kathryn Journeyway',
                StarshipStatusEnum::WAITING,
                new DateTimeImmutable()
            ),
        ];
    }

    public function find(int $id): ?Starship
    {
        foreach($this->findAll() as $starship) {
            if($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}
