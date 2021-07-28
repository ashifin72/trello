<?php

namespace Modules\AshDesks\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AshDesks\Entities\Desk;
use Modules\AshDesks\Http\Requests\DeskStoreRequest;
use Modules\AshDesks\Transformers\DesksResource;

class ApiDesksController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
      return DesksResource::collection(Desk::with('lists')->get());
    }

  /**
   * Store a newly created resource in storage.
   * @param Request $request
   * @return Response
   */
  public function store(DeskStoreRequest $request)
  {
    $create_desk = Desk::create($request->validated());

    return new DesksResource($create_desk);
  }

  /**
   * Show the specified resource.
   * @param int $id
   * @return Response
   */
  public function show(Desk $desk)
  {
    return new DesksResource($desk);
  }

  /**
   * Update the specified resource in storage.
   * @param Request $request
   * @param int $id
   * @return Response
   */
  public function update(DeskStoreRequest $request, Desk $desk)
  {
    $desk->update($request->validated());

    return new DesksResource($desk);
  }

  /**
   * Remove the specified resource from storage.
   * @param int $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }
}
