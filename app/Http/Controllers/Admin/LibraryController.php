<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\LibraryService;

use App\Http\Controllers\Controller;
use App\DTO\Library\CreateLibraryDTO;

use App\Http\Requests\StoreUpdateLibraries;

class LibraryController extends Controller
{
    // attributes promotion ex.: protected SupportService $service
    public function __construct(protected LibraryService $service)
    {
    }

    public function create(){
        return view('admin/library/index');
    }
    public function store (StoreUpdateLibraries $request){
        $this->service->new(CreateLibraryDTO::makeFromRequest($request));
        return redirect()->back();
    }
}
