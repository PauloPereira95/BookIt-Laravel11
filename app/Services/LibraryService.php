<?php

namespace App\Services;
use App\Repositories\Contracts\PaginationInterface;
use stdClass;
use App\DTO\Library\CreateLibraryDTO;
use App\DTO\Library\UpdateLibraryDTO;
use App\Repositories\Contracts\LibraryRepositoryInterface;

class LibraryService
{
    public function __construct(protected LibraryRepositoryInterface $repository)
    {
    }
    public function new(CreateLibraryDTO $dto): stdClass
    {
        return $this->repository->new($dto);
    }
    public function update(UpdateLibraryDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }
    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }
    public function findOne(string|int $id): stdClass|null
    {
        return $this->repository->findone($id);
    }

    public function delete(string| int $id): void
    {
        $this->repository->delete($id);
    }
    public function paginate(
        int $page,
        string $filter = null,
        int $totalPerPage
    ): PaginationInterface {
        return $this->repository->paginate(
            page: $page,
            totalPerPage: $totalPerPage,
            filter: $filter
        );
    }
}
