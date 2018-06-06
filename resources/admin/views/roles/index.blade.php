@extends('admin::layouts.blank')

@section('title', 'Roles')

@section('style-plugins')
    <link rel="stylesheet" href="/assets/admin/vendor/datatables.net-bs4/dataTables.bootstrap4.min.css">
@endsection

@section('script-plugins')
    <script src="/assets/admin/vendor/datatables.net/jquery.dataTables.js?v4.0.1"></script>
    <script src="/assets/admin/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="/assets/admin/js/Plugin/datatables.js"></script>
    <script src="/assets/admin/js/Plugin/selectable.js"></script>
@endsection

@section('scripts')
    <script>
        (function (global, factory) {
            if (typeof define === "function" && define.amd) {
                define('/tables/datatable', ['jquery', 'Site'], factory);
            } else if (typeof exports !== "undefined") {
                factory(require('jquery'), require('Site'));
            } else {
                var mod = {
                    exports: {}
                };
                factory(global.jQuery, global.Site);
                global.tablesDatatable = mod.exports;
            }
        })(this, function (_jquery, _Site) {
            'use strict';

            var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

            var Site = babelHelpers.interopRequireWildcard(_Site);


            (0, _jquery2.default)(document).ready(function ($) {
                Site.run();
            });

            // Fixed Header Example
            // --------------------
            (function () {
                var offsetTop = 0;
                if ((0, _jquery2.default)('.site-navbar').length > 0) {
                    offsetTop = (0, _jquery2.default)('.site-navbar').eq(0).innerHeight();
                }

                // initialize datatable
                var table = (0, _jquery2.default)('#exampleFixedHeader').DataTable({
                    responsive: true,
                    fixedHeader: {
                        header: true,
                        headerOffset: offsetTop
                    },
                    "bPaginate": false,
                    "sDom": "t" // just show table, no other controls
                });

                // redraw fixedHeaders as necessary
                // $(window).resize(function() {
                //   fixedHeader._fnUpdateClones(true);
                //   fixedHeader._fnUpdatePositions();
                // });
            })();

            // Individual column searching
            // ---------------------------
            (function () {
                (0, _jquery2.default)(document).ready(function () {
                    var defaults = Plugin.getDefaults("dataTable");

                    var options = _jquery2.default.extend(true, {}, defaults, {
                        initComplete: function initComplete() {
                            this.api().columns().every(function () {
                                var column = this;
                                var select = (0, _jquery2.default)('<select class="form-control w-full"><option value=""></option></select>').appendTo((0, _jquery2.default)(column.footer()).empty()).on('change', function () {
                                    var val = _jquery2.default.fn.dataTable.util.escapeRegex((0, _jquery2.default)(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                                });

                                column.data().unique().sort().each(function (d, j) {
                                    select.append('<option value="' + d + '">' + d + '</option>');
                                });
                            });
                        }
                    });

                    (0, _jquery2.default)('#exampleTableSearch').DataTable(options);
                });
            })();

            // Table Tools
            // -----------
            (function () {

                (0, _jquery2.default)(document).ready(function () {
                    var defaults = Plugin.getDefaults("dataTable");

                    var options = _jquery2.default.extend(true, {}, defaults, {
                        "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [-1]
                        }],
                        "iDisplayLength": 5,
                        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                        "sDom": '<"dt-panelmenu clearfix"Bfr>t<"dt-panelfooter clearfix"ip>',
                        "buttons": ['copy', 'excel', 'csv', 'pdf', 'print']
                    });

                    (0, _jquery2.default)('#exampleTableTools').dataTable(options);
                });
            })();

            // Table Add Row
            // -------------
            (function ($) {
                var EditableTable = {

                    options: {
                        addButton: '#addToTable',
                        table: '#exampleAddRow',
                        dialog: {
                            wrapper: '#dialog',
                            cancelButton: '#dialogCancel',
                            confirmButton: '#dialogConfirm'
                        }
                    },

                    initialize: function initialize() {
                        this.setVars().build().events();
                    },

                    setVars: function setVars() {
                        this.$table = $(this.options.table);
                        this.$addButton = $(this.options.addButton);

                        // dialog
                        this.dialog = {};
                        this.dialog.$wrapper = $(this.options.dialog.wrapper);
                        this.dialog.$cancel = $(this.options.dialog.cancelButton);
                        this.dialog.$confirm = $(this.options.dialog.confirmButton);

                        return this;
                    },

                    build: function build() {
                        this.datatable = this.$table.DataTable({
                            aoColumns: [null, null, null, {
                                "bSortable": false
                            }],
                            language: {
                                "sSearchPlaceholder": "Search..",
                                "lengthMenu": "_MENU_",
                                "search": "_INPUT_"
                            }
                        });

                        window.dt = this.datatable;

                        return this;
                    },

                    events: function events() {
                        var _self = this;

                        this.$table.on('click', 'a.save-row', function (e) {
                            e.preventDefault();

                            _self.rowSave($(this).closest('tr'));
                        }).on('click', 'a.cancel-row', function (e) {
                            e.preventDefault();

                            _self.rowCancel($(this).closest('tr'));
                        }).on('click', 'a.edit-row', function (e) {
                            e.preventDefault();

                            _self.rowEdit($(this).closest('tr'));
                        }).on('click', 'a.remove-row', function (e) {
                            e.preventDefault();

                            var $row = $(this).closest('tr');
                            bootbox.dialog({
                                message: "Are you sure that you want to delete this row?",
                                title: "ARE YOU SURE?",
                                buttons: {
                                    danger: {
                                        label: "Confirm",
                                        className: "btn-danger",
                                        callback: function callback() {
                                            _self.rowRemove($row);
                                        }
                                    },
                                    main: {
                                        label: "Cancel",
                                        className: "btn-primary",
                                        callback: function callback() {
                                        }
                                    }
                                }
                            });
                        });

                        this.$addButton.on('click', function (e) {
                            e.preventDefault();

                            _self.rowAdd();
                        });

                        this.dialog.$cancel.on('click', function (e) {
                            e.preventDefault();
                            $.magnificPopup.close();
                        });

                        return this;
                    },

                    // =============
                    // ROW FUNCTIONS
                    // =============
                    rowAdd: function rowAdd() {
                        this.$addButton.attr({
                            'disabled': 'disabled'
                        });

                        var actions, data, $row;

                        actions = ['<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing save-row" data-toggle="tooltip" data-original-title="Save" hidden><i class="icon md-wrench" aria-hidden="true"></i></a>', '<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-editing cancel-row" data-toggle="tooltip" data-original-title="Delete" hidden><i class="icon md-close" aria-hidden="true"></i></a>', '<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default edit-row" data-toggle="tooltip" data-original-title="Edit" hidden><i class="icon md-edit" aria-hidden="true"></i></a>', '<a href="#" class="btn btn-sm btn-icon btn-pure btn-default on-default remove-row" data-toggle="tooltip" data-original-title="Remove" hidden><i class="icon md-delete" aria-hidden="true"></i></a>'].join(' ');

                        data = this.datatable.row.add(['', '', '', actions]);
                        $row = this.datatable.row(data[0]).nodes().to$();

                        $row.addClass('adding').find('td:last').addClass('actions');

                        this.rowEdit($row);

                        this.datatable.order([0, 'asc']).draw(); // always show fields
                    },

                    rowCancel: function rowCancel($row) {
                        var _self = this,
                            $actions,
                            i,
                            data,
                            $cancel;

                        if ($row.hasClass('adding')) {
                            this.rowRemove($row);
                        } else {
                            $actions = $row.find('td.actions');
                            $cancel = $actions.find('.cancel-row');
                            $cancel.tooltip('hide');

                            if ($actions.get(0)) {
                                this.rowSetActionsDefault($row);
                            }

                            data = this.datatable.row($row.get(0)).data();
                            this.datatable.row($row.get(0)).data(data);

                            this.handleTooltip($row);

                            this.datatable.draw();
                        }
                    },

                    rowEdit: function rowEdit($row) {
                        var _self = this,
                            data;

                        data = this.datatable.row($row.get(0)).data();

                        $row.children('td').each(function (i) {
                            var $this = $(this);

                            if ($this.hasClass('actions')) {
                                _self.rowSetActionsEditing($row);
                            } else {
                                $this.html('<input type="text" class="form-control input-block" value="' + data[i] + '"/>');
                            }
                        });
                    },

                    rowSave: function rowSave($row) {
                        var _self = this,
                            $actions,
                            values = [],
                            $save;

                        if ($row.hasClass('adding')) {
                            this.$addButton.removeAttr('disabled');
                            $row.removeClass('adding');
                        }

                        values = $row.find('td').map(function () {
                            var $this = $(this);

                            if ($this.hasClass('actions')) {
                                _self.rowSetActionsDefault($row);
                                return _self.datatable.cell(this).data();
                            } else {
                                return $.trim($this.find('input').val());
                            }
                        });

                        $actions = $row.find('td.actions');
                        $save = $actions.find('.save-row');
                        $save.tooltip('hide');

                        if ($actions.get(0)) {
                            this.rowSetActionsDefault($row);
                        }

                        this.datatable.row($row.get(0)).data(values);
                        this.handleTooltip($row);

                        this.datatable.draw();
                    },

                    rowRemove: function rowRemove($row) {
                        if ($row.hasClass('adding')) {
                            this.$addButton.removeAttr('disabled');
                        }

                        this.datatable.row($row.get(0)).remove().draw();
                    },

                    rowSetActionsEditing: function rowSetActionsEditing($row) {
                        $row.find('.on-editing').removeAttr('hidden');
                        $row.find('.on-default').attr('hidden', true);
                    },

                    rowSetActionsDefault: function rowSetActionsDefault($row) {
                        $row.find('.on-editing').attr('hidden', true);
                        $row.find('.on-default').removeAttr('hidden');
                    },
                    handleTooltip: function handleTooltip($row) {
                        var $tooltip = $row.find('[data-toggle="tooltip"]');
                        $tooltip.tooltip();
                    }

                };

                $(function () {
                    EditableTable.initialize();
                });
            }).apply(undefined, [jQuery]);
        });
    </script>
@endsection

@section('content')
    <div class="page">
        <div class="page-header">
            <h1 class="page-title">DataTables</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                <li class="breadcrumb-item active">DataTables</li>
            </ol>
            <div class="page-header-actions">
                <a class="btn btn-sm btn-primary btn-round" href="https://datatables.net" target="_blank">
                    <i class="icon md-link" aria-hidden="true"></i>
                    <span class="hidden-sm-down">Official Website</span>
                </a>
            </div>
        </div>

        <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable selectable"
                           data-row-selectable="true">
                        <thead>
                        <tr>
                            <th class="w-50">
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-all" type="checkbox">
                            <label></label>
                          </span>
                            </th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th class="w-50">
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-all" type="checkbox">
                            <label></label>
                          </span>
                            </th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Date</th>
                            <th>Salary</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>
                          <span class="checkbox-custom checkbox-primary">
                            <input class="selectable-item" type="checkbox" id="row-619" value="619">
                            <label for="row-619"></label>
                          </span>
                            </td>
                            <td>Damon</td>
                            <td>5516 Adolfo Green</td>
                            <td>Littelhaven</td>
                            <td>85</td>
                            <td>2014/06/13</td>
                            <td>$553,536</td>
                        </tr>
                        <tr>
                            <td>Torrey</td>
                            <td>1995 Richie Neck</td>
                            <td>West Sedrickstad</td>
                            <td>77</td>
                            <td>2014/09/12</td>
                            <td>$243,577</td>
                        </tr>
                        <tr>
                            <td>Miracle</td>
                            <td>176 Hirthe Squares</td>
                            <td>Ryleetown</td>
                            <td>82</td>
                            <td>2013/09/27</td>
                            <td>$784,802</td>
                        </tr>
                        <tr>
                            <td>Wilhelmine</td>
                            <td>44727 O&#x27;Hara Union</td>
                            <td>Dibbertfurt</td>
                            <td>68</td>
                            <td>2013/06/28</td>
                            <td>$207,291</td>
                        </tr>
                        <tr>
                            <td>Hubert</td>
                            <td>8884 Jamel Pines</td>
                            <td>Howemouth</td>
                            <td>63</td>
                            <td>2013/05/28</td>
                            <td>$584,032</td>
                        </tr>
                        <tr>
                            <td>Myrtie.Gerhold</td>
                            <td>098 Noel Way</td>
                            <td>Santinoland</td>
                            <td>13</td>
                            <td>2014/12/12</td>
                            <td>$550,087</td>
                        </tr>
                        <tr>
                            <td>Chester</td>
                            <td>14095 Kling Gateway</td>
                            <td>Andresmouth</td>
                            <td>26</td>
                            <td>2014/09/27</td>
                            <td>$177,404</td>
                        </tr>
                        <tr>
                            <td>Melany_Gerhold</td>
                            <td>1100 Steve Pines</td>
                            <td>Immanuelfort</td>
                            <td>12</td>
                            <td>2014/06/28</td>
                            <td>$162,453</td>
                        </tr>
                        <tr>
                            <td>Thea</td>
                            <td>26114 Narciso Lodge</td>
                            <td>East Opal</td>
                            <td>64</td>
                            <td>2014/11/12</td>
                            <td>$581,736</td>
                        </tr>
                        <tr>
                            <td>Albin.Kreiger</td>
                            <td>111 Hershel Stream</td>
                            <td>Hermannborough</td>
                            <td>90</td>
                            <td>2013/11/27</td>
                            <td>$921,021</td>
                        </tr>
                        <tr>
                            <td>Shanel</td>
                            <td>7579 Santa Forest</td>
                            <td>Jordaneville</td>
                            <td>14</td>
                            <td>2017/04/28</td>
                            <td>$818,20</td>
                        </tr>
                        <tr>
                            <td>Bell.Mueller</td>
                            <td>083 Kshlerin Forest</td>
                            <td>Clintmouth</td>
                            <td>98</td>
                            <td>2013/10/12</td>
                            <td>$571,46</td>
                        </tr>
                        <tr>
                            <td>Clementina</td>
                            <td>5957 Hagenes Falls</td>
                            <td>Anaishaven</td>
                            <td>45</td>
                            <td>2013/11/12</td>
                            <td>$684,588</td>
                        </tr>
                        <tr>
                            <td>Johanna.Thiel</td>
                            <td>4301 Trever Radial</td>
                            <td>Lake Augustineton</td>
                            <td>67</td>
                            <td>2013/12/27</td>
                            <td>$608,507</td>
                        </tr>
                        <tr>
                            <td>Elliott_Becker</td>
                            <td>8417 Orion Parkway</td>
                            <td>Streichside</td>
                            <td>83</td>
                            <td>2014/08/28</td>
                            <td>$447,592</td>
                        </tr>
                        <tr>
                            <td>Yasmine</td>
                            <td>67284 Kreiger Freeway</td>
                            <td>Stoltenbergside</td>
                            <td>8</td>
                            <td>2014/12/12</td>
                            <td>$358,369</td>
                        </tr>
                        <tr>
                            <td>Ada.Hoppe</td>
                            <td>69842 Peyton Viaduct</td>
                            <td>South Geovannyburgh</td>
                            <td>89</td>
                            <td>2013/05/13</td>
                            <td>$211,76</td>
                        </tr>
                        <tr>
                            <td>Sammie</td>
                            <td>46406 Powlowski Common</td>
                            <td>Cristmouth</td>
                            <td>51</td>
                            <td>2014/03/29</td>
                            <td>$345,739</td>
                        </tr>
                        <tr>
                            <td>Terrance.Borer</td>
                            <td>1568 Richmond Bypass</td>
                            <td>Schillerfort</td>
                            <td>46</td>
                            <td>2014/10/27</td>
                            <td>$634,073</td>
                        </tr>
                        <tr>
                            <td>August</td>
                            <td>731 Stiedemann Crossing</td>
                            <td>Rolfsonborough</td>
                            <td>98</td>
                            <td>2013/11/12</td>
                            <td>$203,952</td>
                        </tr>
                        <tr>
                            <td>Mckenna.Herman</td>
                            <td>63204 Hegmann Keys</td>
                            <td>New Isobelview</td>
                            <td>2</td>
                            <td>2013/08/12</td>
                            <td>$702,091</td>
                        </tr>
                        <tr>
                            <td>Adrianna_Durgan</td>
                            <td>75151 Kshlerin Square</td>
                            <td>North Elwynfurt</td>
                            <td>25</td>
                            <td>2014/02/26</td>
                            <td>$481,980</td>
                        </tr>
                        <tr>
                            <td>Heath.Ryan</td>
                            <td>6778 Howe Route</td>
                            <td>Antwanbury</td>
                            <td>90</td>
                            <td>2013/08/12</td>
                            <td>$569,723</td>
                        </tr>
                        <tr>
                            <td>Alisa</td>
                            <td>64838 D&#x27;Amore Cove</td>
                            <td>Port Lempi</td>
                            <td>25</td>
                            <td>2017/04/28</td>
                            <td>$226,459</td>
                        </tr>
                        <tr>
                            <td>Treva</td>
                            <td>308 Octavia Roads</td>
                            <td>East Eunaton</td>
                            <td>37</td>
                            <td>2014/12/12</td>
                            <td>$746,921</td>
                        </tr>
                        <tr>
                            <td>Myriam_Nicolas</td>
                            <td>760 Hickle Causeway</td>
                            <td>Lake Nickolasshire</td>
                            <td>69</td>
                            <td>2014/05/13</td>
                            <td>$293,786</td>
                        </tr>
                        <tr>
                            <td>Gerhard</td>
                            <td>893 Mara Parkway</td>
                            <td>Elmermouth</td>
                            <td>32</td>
                            <td>2014/11/27</td>
                            <td>$856,275</td>
                        </tr>
                        <tr>
                            <td>Monica</td>
                            <td>0039 Heath Plain</td>
                            <td>West Bentonhaven</td>
                            <td>80</td>
                            <td>2017/05/13</td>
                            <td>$821,600</td>
                        </tr>
                        <tr>
                            <td>Lacey</td>
                            <td>995 Lang Springs</td>
                            <td>Cordellburgh</td>
                            <td>94</td>
                            <td>2014/11/27</td>
                            <td>$990,291</td>
                        </tr>
                        <tr>
                            <td>Bret</td>
                            <td>282 Susana Heights</td>
                            <td>Kaneport</td>
                            <td>47</td>
                            <td>2013/05/28</td>
                            <td>$445,494</td>
                        </tr>
                        <tr>
                            <td>Jennie</td>
                            <td>755 Greyson Key</td>
                            <td>East Jazmyne</td>
                            <td>94</td>
                            <td>2017/03/29</td>
                            <td>$530,408</td>
                        </tr>
                        <tr>
                            <td>Emerson</td>
                            <td>784 Adriel Radial</td>
                            <td>New Jerroldland</td>
                            <td>4</td>
                            <td>2014/02/26</td>
                            <td>$805,823</td>
                        </tr>
                        <tr>
                            <td>Herta</td>
                            <td>7491 Bednar Gardens</td>
                            <td>Port Lucianoton</td>
                            <td>23</td>
                            <td>2013/10/12</td>
                            <td>$352,269</td>
                        </tr>
                        <tr>
                            <td>Stone_Deckow</td>
                            <td>6440 Moen Loop</td>
                            <td>Jenningsbury</td>
                            <td>23</td>
                            <td>2014/07/28</td>
                            <td>$219,573</td>
                        </tr>
                        <tr>
                            <td>Davin</td>
                            <td>50922 Kiara Square</td>
                            <td>Port Edmund</td>
                            <td>37</td>
                            <td>2014/11/27</td>
                            <td>$241,432</td>
                        </tr>
                        <tr>
                            <td>Johnathan_Mraz</td>
                            <td>1998 Webster Fords</td>
                            <td>East Vern</td>
                            <td>50</td>
                            <td>2014/09/12</td>
                            <td>$290,875</td>
                        </tr>
                        <tr>
                            <td>Gunnar</td>
                            <td>92873 Barney Club</td>
                            <td>Beierview</td>
                            <td>82</td>
                            <td>2014/03/29</td>
                            <td>$569,778</td>
                        </tr>
                        <tr>
                            <td>Raina</td>
                            <td>828 Cathy Streets</td>
                            <td>West Uriahville</td>
                            <td>26</td>
                            <td>2013/09/27</td>
                            <td>$186,229</td>
                        </tr>
                        <tr>
                            <td>Marjorie.Orn</td>
                            <td>314 Aurore Canyon</td>
                            <td>Port Jaquelineburgh</td>
                            <td>3</td>
                            <td>2014/06/28</td>
                            <td>$547,752</td>
                        </tr>
                        <tr>
                            <td>Citlalli_Wehner</td>
                            <td>139 Ebert Freeway</td>
                            <td>Lake Esperanzamouth</td>
                            <td>78</td>
                            <td>2017/01/27</td>
                            <td>$892,012</td>
                        </tr>
                        <tr>
                            <td>Ruben.Reilly</td>
                            <td>02868 Cronin Tunnel</td>
                            <td>Rossieville</td>
                            <td>87</td>
                            <td>2013/09/12</td>
                            <td>$520,483</td>
                        </tr>
                        <tr>
                            <td>Gunner_Jakubowski</td>
                            <td>80391 Maxwell Parks</td>
                            <td>South Travon</td>
                            <td>26</td>
                            <td>2014/03/29</td>
                            <td>$272,005</td>
                        </tr>
                        <tr>
                            <td>Josephine</td>
                            <td>36238 Satterfield Avenue</td>
                            <td>New Alexanderhaven</td>
                            <td>51</td>
                            <td>2017/01/27</td>
                            <td>$189,18</td>
                        </tr>
                        <tr>
                            <td>Ceasar_Orn</td>
                            <td>2795 Clement Ridges</td>
                            <td>Beckerhaven</td>
                            <td>78</td>
                            <td>2013/11/27</td>
                            <td>$958,117</td>
                        </tr>
                        <tr>
                            <td>Coby</td>
                            <td>53700 Pagac Lodge</td>
                            <td>South Hershel</td>
                            <td>86</td>
                            <td>2013/08/28</td>
                            <td>$481,619</td>
                        </tr>
                        <tr>
                            <td>Colin</td>
                            <td>637 Paucek Mountain</td>
                            <td>West Luraberg</td>
                            <td>77</td>
                            <td>2017/02/26</td>
                            <td>$298,110</td>
                        </tr>
                        <tr>
                            <td>Monique_White</td>
                            <td>415 Corkery Walks</td>
                            <td>West Lauryn</td>
                            <td>97</td>
                            <td>2014/02/11</td>
                            <td>$222,343</td>
                        </tr>
                        <tr>
                            <td>Jarvis.Simonis</td>
                            <td>0778 Elvis Spurs</td>
                            <td>Harrisfurt</td>
                            <td>62</td>
                            <td>2013/05/28</td>
                            <td>$336,046</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Panel Basic -->
        </div>
    </div>
@endsection