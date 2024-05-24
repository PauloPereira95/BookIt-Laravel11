<?php

namespace App\Repositories\Contracts;

use stdClass;
use App\DTO\Library\CreateLibraryDTO;
use App\DTO\Library\UpdateLibraryDTO;

interface LibraryRepositoryInterface
{
    //public function paginate(int $page, int $totalPerPage = 15, string $filter = null): PaginationInterface;
    public function getAll(string $filter = null): array;
    public function findone(string|int $id): stdClass|null;
    public function delete(string $id): void;
    public function new(CreateLibraryDTO $dto): stdClass;
    public function update(UpdateLibraryDTO $dto): stdClass|null;
    public function paginate (int $page = 1 , int $totalPerPage = 15 , string $filter = null ): PaginationInterface;
}
