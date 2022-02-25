@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('bangiaotaisan::bangiaotaisans.title.bangiaotaisans') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li class="active">{{ trans('bangiaotaisan::bangiaotaisans.title.bangiaotaisans') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> {{ trans('bangiaotaisan::bangiaotaisans.button.create bangiaotaisan') }}
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="data-table table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Loại bàn giao</th>
                                <th>Ngày</th>
                                <th>Lý do bàn giao</th>
                                <th>Bộ phận bàn giao</th>
                                <th>Bộ phận nhận bàn giao</th>
                                <th>Nhân viên bàn giao</th>
                                <th>Nhân viên nhận bàn giao</th>
                                <th>Mã tài sản</th>
                                <th>Tên tài sản</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Người sử dụng</th>
                                <th>{{ trans('core::core.table.created at') }}</th>
                                <th data-sortable="false">{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($bangiaotaisans)): ?>
                            <?php foreach ($bangiaotaisans as $bangiaotaisan): ?>
                            <tr>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->id }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->loai_ban_giao }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->ngay }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ str_limit($bangiaotaisan->ly_do_ban_giao, 300) }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->bo_phan_ban_giao }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->bo_phan_nhan_ban_giao }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->nhan_vien_ban_giao }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->nhan_vien_nhan_ban_giao }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->ma_tai_san }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->ten_tai_san }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->so_luong }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->tinh_trang }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->nguoi_su_dung }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}">
                                        {{ $bangiaotaisan->create_at }}
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.bangiaotaisan.bangiaotaisan.edit', [$bangiaotaisan->id]) }}" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger btn-flat" data-toggle="modal" data-target="#modal-delete-confirmation" data-action-target="{{ route('admin.bangiaotaisan.bangiaotaisan.destroy', [$bangiaotaisan->id]) }}"><i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Loại bàn giao</th>
                                <th>Ngày</th>
                                <th>Lý do bàn giao</th>
                                <th>Bộ phận bàn giao</th>
                                <th>Bộ phận nhận bàn giao</th>
                                <th>Nhân viên bàn giao</th>
                                <th>Nhân viên nhận bàn giao</th>
                                <th>Mã tài sản</th>
                                <th>Tên tài sản</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Người sử dụng</th>
                                <th>{{ trans('core::core.table.created at') }}</th>
                                <th>{{ trans('core::core.table.actions') }}</th>
                            </tr>
                            </tfoot>
                        </table>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
    @include('core::partials.delete-modal')
@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>c</code></dt>
        <dd>{{ trans('bangiaotaisan::bangiaotaisans.title.create bangiaotaisan') }}</dd>
    </dl>
@stop

@push('js-stack')
    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'c', route: "<?= route('admin.bangiaotaisan.bangiaotaisan.create') ?>" }
                ]
            });
        });
    </script>
    <?php $locale = locale(); ?>
    <script type="text/javascript">
        $(function () {
            $('.data-table').dataTable({
                "paginate": true,
                "lengthChange": true,
                "filter": true,
                "sort": true,
                "info": true,
                "autoWidth": true,
                "order": [[ 0, "desc" ]],
                "language": {
                    "url": '<?php echo Module::asset("core:js/vendor/datatables/{$locale}.json") ?>'
                }
            });
        });
    </script>
@endpush
