<?php

namespace Modules\Bangiaotaisan\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Bangiaotaisan\Entities\Bangiaotaisan;
use Modules\Bangiaotaisan\Http\Requests\CreateBangiaotaisanRequest;
use Modules\Bangiaotaisan\Http\Requests\UpdateBangiaotaisanRequest;
use Modules\Bangiaotaisan\Repositories\BangiaotaisanRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class BangiaotaisanController extends AdminBaseController
{
    /**
     * @var BangiaotaisanRepository
     */
    private $bangiaotaisan;

    public function __construct(BangiaotaisanRepository $bangiaotaisan)
    {
        parent::__construct();

        $this->bangiaotaisan = $bangiaotaisan;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $bangiaotaisans = $this->bangiaotaisan->all();

        return view('bangiaotaisan::admin.bangiaotaisans.index', compact('bangiaotaisans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('bangiaotaisan::admin.bangiaotaisans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateBangiaotaisanRequest $request
     * @return Response
     */
    public function store(CreateBangiaotaisanRequest $request)
    {
        $this->bangiaotaisan->create($request->all());

        return redirect()->route('admin.bangiaotaisan.bangiaotaisan.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('bangiaotaisan::bangiaotaisans.title.bangiaotaisans')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Bangiaotaisan $bangiaotaisan
     * @return Response
     */
    public function edit(Bangiaotaisan $bangiaotaisan)
    {
        return view('bangiaotaisan::admin.bangiaotaisans.edit', compact('bangiaotaisan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Bangiaotaisan $bangiaotaisan
     * @param  UpdateBangiaotaisanRequest $request
     * @return Response
     */
    public function update(Bangiaotaisan $bangiaotaisan, UpdateBangiaotaisanRequest $request)
    {
        $this->bangiaotaisan->update($bangiaotaisan, $request->all());

        return redirect()->route('admin.bangiaotaisan.bangiaotaisan.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('bangiaotaisan::bangiaotaisans.title.bangiaotaisans')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bangiaotaisan $bangiaotaisan
     * @return Response
     */
    public function destroy(Bangiaotaisan $bangiaotaisan)
    {
        $this->bangiaotaisan->destroy($bangiaotaisan);

        return redirect()->route('admin.bangiaotaisan.bangiaotaisan.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('bangiaotaisan::bangiaotaisans.title.bangiaotaisans')]));
    }
}
