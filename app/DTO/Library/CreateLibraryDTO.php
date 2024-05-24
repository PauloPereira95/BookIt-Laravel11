<?php
namespace App\DTO\Library;
use App\Http\Requests\StoreUpdateLibraries;

class CreateLibraryDTO
{
    public function __construct(
        public string $name,
        public string $address,
    )
    {}
    public static function makeFromRequest(StoreUpdateLibraries $request):self {
        // dd($request->address);
        return new self(
            $request->name,
            $request->address,
        );
    }
}
