@extends("admin::layouts.blank")

@section('style-plugins')

    <link rel="stylesheet" href="/assets/admin/vendor/nestable/nestable.css">
@endsection

@section('script-plugins')
    <script src="/assets/admin/vendor/nestable/jquery.nestable.min.js?v4.0.1"></script>
    <script src="/assets/admin/js/Plugin/nestable.js"></script>
@endsection

@section('content')

    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Advanced UI</li>
            </ol>
            <h1 class="page-title">Sortable &amp; Nestable</h1>
            <div class="page-header-actions">
                <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
                        data-original-title="Edit">
                    <i class="icon md-edit" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
                        data-original-title="Refresh">
                    <i class="icon md-refresh-alt" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-sm btn-icon btn-primary btn-round" data-toggle="tooltip"
                        data-original-title="Setting">
                    <i class="icon md-settings" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="page-content">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title"></h3>
                </div>
                <div class="panel-body container-fluid">
                    <div class="row row-lg">
                        <div class="col-lg-6">
                            <div class="dd" data-plugin="nestable">
                                <ul class="dd-list">
                                    @include('admin::components.menus._menus-item', ['menus' => \App\Entities\Menu::menus()])
                                </ul>
                                {{--<ul class="dd-list">--}}
                                {{--<li class="dd-item dd-item-alt" data-id="1">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 1--}}
                                {{--<span class="float-right md-wrench"></span>--}}
                                {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="dd-item dd-item-alt" data-id="2">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 2--}}
                                {{--<span class="float-right md-settings"></span>--}}
                                {{--</div>--}}
                                {{--</li>--}}
                                {{--<li class="dd-item dd-item-alt" data-id="3">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 3</div>--}}
                                {{--<ol class="dd-list">--}}
                                {{--<li class="dd-item dd-item-alt" data-id="4">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 4</div>--}}
                                {{--</li>--}}
                                {{--<li class="dd-item dd-item-alt" data-id="5" data-foo="bar">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 5</div>--}}
                                {{--</li>--}}
                                {{--</ol>--}}
                                {{--</li>--}}
                                {{--<li class="dd-item dd-item-alt" data-id="6">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 6</div>--}}
                                {{--<ol class="dd-list">--}}
                                {{--<li class="dd-item dd-item-alt" data-id="7">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 7</div>--}}

                                {{--<ol class="dd-list">--}}
                                {{--<li class="dd-item dd-item-alt" data-id="8">--}}
                                {{--<div class="dd-handle"></div>--}}
                                {{--<div class="dd-content">ITEM 8</div>--}}
                                {{--</li>--}}
                                {{--</ol>--}}
                                {{--</li>--}}
                                {{--</ol>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection