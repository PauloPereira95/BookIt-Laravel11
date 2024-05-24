<?php
namespace App\DTO\Library;
use App\Http\Requests\StoreUpdateLibraries;

class UpdateLibraryDTO
{
    public function __construct(
        public string $library_id,
        public string $name,
        public string $address
    )
    {}
    public static function makeFromRequest(StoreUpdateLibraries $request, string $id = null):self {
        return new self(
            $id ?? $request->id,
            $request->name,
            $request->adress
        );
    }
}
