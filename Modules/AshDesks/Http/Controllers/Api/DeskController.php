<?php

namespace Modules\AshDesks\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AshDesks\Entities\Desk;
use Modules\AshDesks\Http\Requests\DeskStoreRequest;
use Modules\AshDesks\Transformers\DesksResource;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
      return view('AshDesks.index');
    }

}
