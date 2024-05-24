<?php
namespace App\Repositories\Eloquent;

use stdClass;
use App\Models\Library;
use App\DTO\Library\CreateLibraryDTO;
use App\DTO\Library\UpdateLibraryDTO;
use App\Repositories\PaginationPresenter;
use App\Repositories\Contracts\PaginationInterface;
use App\Repositories\Contracts\LibraryRepositoryInterface;

class LibraryRepository implements LibraryRepositoryInterface
{
    public function __construct(
        protected Library $model
    ) {
    }
    public function getAll(string $filter = null): array
    {
        return $this->model->where(function ($query) use ($filter) {
            if ($filter) {
                $query->where('name', '%like%', "%$filter%");
                $query->orWhere('address', '%like%', "%$filter%");
            }
        })->get()->toArray();
    }
    public function findone(int|string $id): stdClass|null
    {
        $library = $this->model->find($id);
        if (!$library)
            return null;
        return (object) $library->toArray();
    }
    public function new(CreateLibraryDTO $dto): stdClass
    {
        $library = $this->model->create((array) $dto);
        return (object) $library->toArray();
    }
    public function update(UpdateLibraryDTO $dto): stdClass|null
    {
        if (!$library = $this->model->find($dto->library_id))
            return null;
        $library->update((array) $dto);
        return (object) $library->toArray();
    }

    public function delete(string $id):void {
        $support = $this->model->findOrFail($id);
        $support->delete();
    }
    public function paginate(int $page =1 , int $totalPerPage = 15 , string $filter = null ):PaginationInterface {
        $result = $this->model
            ->where(function ($query) use ($filter) {
                if ($filter) {
                    $query->where('name', 'like', "%$filter%");
                    $query->orWhere('address' , 'like' , "%$filter%");
                }
            })->paginate($totalPerPage,['*'],'page', $page);
        return new PaginationPresenter($result);
    }
}

