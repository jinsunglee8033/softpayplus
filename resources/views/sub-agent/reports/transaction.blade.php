@extends('sub-agent.layout.default')

@section('content')

    <script type="text/javascript">
        window.onload = function () {
            $("#sdate").datetimepicker({
                format: 'YYYY-MM-DD'
            });
            $("#edate").datetimepicker({
                format: 'YYYY-MM-DD'
            });

            $('.note-check-box').tooltip();
        };

        function refresh_all() {
            window.location.href = '/sub-agent/reports/transaction';
        }

        function search() {
            myApp.showLoading();
            $('#excel').val('N');
            $('#frm_search').submit();
        }

        function excel_export() {
            $('#excel').val('Y');
            $('#frm_search').submit();
        }
    </script>

    <div class="parallax" data-background="/img/parallax/innerpage.jpg" data-speed="0.5" data-size="50%">
        <div class="overlay white"></div>
        <div class="container">
            <div class="inner-head">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4>Transaction</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Transaction</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contain-wrapp padding-bot70">


        <div class="well filter" style="padding-bottom:5px;">
            <form id="frm_search" class="form-horizontal" method="post" action="/sub-agent/reports/transaction">
                {{ csrf_field() }}
                <input type="hidden" name="excel" id="excel"/>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Date</label>
                            <div class="col-md-8">
                                <input type="text" style="width:100px; float:left;" class="form-control"
                                       id="sdate" name="sdate" value="{{ old('sdate', $sdate) }}"/>
                                <span class="control-label" style="margin-left:5px; float:left;"> ~ </span>
                                <input type="text" style="width:100px; margin-left: 5px; float:left;"
                                       class="form-control" id="edate" name="edate"
                                       value="{{ old('edate', $edate) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Carrier</label>
                            <div class="col-md-8">
                                <select class="form-control" name="carrier">
                                    <option value="" {{ old('carrier', $carrier) == '' ? 'selected' : '' }}>
                                        All
                                    </option>
                                    @if (count($carriers) > 0)
                                        @foreach ($carriers as $o)
                                            <option value="{{ $o->name }}" {{ old('carrier', $carrier) == $o->name ? 'selected' : '' }}>{{ $o->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phone"
                                       value="{{ old('phone', $phone) }}"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Action</label>
                            <div class="col-md-8">
                                <select class="form-control" name="action">
                                    <option value="" {{ old('action', $action) == '' ? 'selected' : '' }}>
                                        All
                                    </option>
                                    <option value="Activation" {{ old('action', $action) == 'Activation' ? 'selected' : '' }}>
                                        Activation
                                    </option>
                                    <option value="Port-In" {{ old('action', $action) == 'Port-In' ? 'selected' : '' }}>
                                        Port-In
                                    </option>
                                    <option value="Activation,Port-In" {{ old('action', $action) == 'Activation,Port-In' ? 'selected' :
                                 '' }}>Activation + Port-In</option>
                                    <option value="RTR" {{ old('action', $action) == 'RTR' ? 'selected' : '' }}>
                                        RTR
                                    </option>
                                    <option value="PIN" {{ old('action', $action) == 'PIN' ? 'selected' : '' }}>PIN</option>
                                    <option value="RTR,PIN" {{ old('action', $action) == 'RTR,PIN' ? 'selected' : '' }}>RTR +
                                        PIN</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-8">
                                <select class="form-control" name="status">
                                    <option value="" {{ old('status', $status) == '' ? 'selected' : '' }}>
                                        All
                                    </option>
                                    <option value="N" {{ old('status', $status) == 'N' ? 'selected' : '' }}>
                                        New
                                    </option>
                                    <option value="P" {{ old('status', $status) == 'P' ? 'selected' : '' }}>
                                        Processing
                                    </option>
                                    <option value="C" {{ old('status', $status) == 'C' ? 'selected' : '' }}>
                                        Completed
                                    </option>
                                    <option value="R" {{ old('status', $status) == 'R' ? 'selected' : '' }}>
                                        Action.Required
                                    </option>
                                    <option value="F" {{ old('status', $status) == 'F' ? 'selected' : '' }}>
                                        Failed
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">SIM</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="sim"
                                       value="{{ old('sim', $sim) }}"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">ESN</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="esn"
                                       value="{{ old('esn', $esn) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tx.ID</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="id"
                                       value="{{ old('id', $id) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Sales Type</label>
                            <div class="col-md-8">
                                <select class="form-control" name="sales_type" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                    <option value="" {{ old('sales_type', $sales_type) == '' ? 'selected' : '' }}>All</option>
                                    <option value="S" {{ old('sales_type', $sales_type) == 'S' ? 'selected' : '' }}>Sales</option>
                                    <option value="V" {{ old('sales_type', $sales_type) == 'V' ? 'selected' : '' }}>Void</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Note</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="note"
                                       value="{{ old('note', $note) }}"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-info btn-sm" onclick="refresh_all()">
                                    Refresh All
                                </button>
                                <button type="button" class="btn btn-primary btn-sm" id="btn_search" onclick="search()">
                                    Search
                                </button>
                                <button type="button" class="btn btn-info btn-sm" onclick="excel_export()">
                                    Export
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <table class="parameter-product table-bordered table-hover table-condensed filter">
            <thead>
            <tr class="active">
                <td><strong>ID</strong></td>
                <td><strong>Type</strong></td>
                <td><strong>Status</strong></td>
                <td><strong>Note</strong></td>
                <td><strong>Note2</strong></td>
                <td><strong>Product</strong></td>
                <td><strong>Denom($)</strong></td>
                <td><strong>Denom.Name</strong></td>
                <td><strong>RTR.M</strong></td>
                <td><strong>Total($)</strong></td>
                <td><strong>Vendor.Fee($)</strong></td>
                <td><strong>Action</strong></td>
                <td><strong>SIM</strong></td>
                <td><strong>ESN/IMEI</strong></td>
                <td><strong>Pref.Area.Code</strong></td>
                <td><strong>Phone/PIN</strong></td>
                <td><strong>User.ID</strong></td>
                <td><strong>Created.Date</strong></td>
            </tr>
            </thead>
            <tbody>
            @if (isset($transactions) && count($transactions) > 0)
                @foreach ($transactions as $o)
                    <tr style="{{ $o->type_name == 'Void' ? 'color:red' : '' }}">
                        <td>
                            @if ($o->status == 'C')
                            <a target="_RECEIPT" href="/sub-agent/reports/receipt/{{ $o->id }}">{{ $o->id }}</a>
                            @else
                            {{ $o->id }}
                            @endif
                        </td>
                        <td style="{{ $o->type_name == 'Void' ? 'color:red;' : '' }}">{{ $o->type_name }}</td>

                        @if ($o->status == 'R')
                            @if($o->product_id == 'WBMBA' || $o->product_id == 'WBMRA' || $o->product_id == 'WBMPA' ||
                                $o->product_id == 'WBMBAR' || $o->product_id == 'WBMRAR' || $o->product_id == 'WBMPAR')
                                <td><a href="/sub-agent/reports/transaction/{{ $o->id }}">{!! $o->status_name() !!}
                                        <span  class="btn btn-primary btn-sm" style="padding: 6px 8px;">Edit</span>
                                    </a></td>
                            @else
                                <td>{!! $o->status_name() !!}</td>
                            @endif
                        @else
                            <td>{!! $o->status_name() !!}</td>
                        @endif

                        <td>
                            @if($o->product_id == 'WLYCA')
                                @if ($o->status == 'C')
                                    Success
                                @else
                                    {{ $o->note }}
                                @endif
                            @elseif (in_array($o->product_id, ['WFRUPA', 'WFRUPR']))
                                @if ($o->status == 'C')
                                    Success
                                @else
                                    {{ $o->note }}
                                @endif
                            @elseif (in_array($o->product_id, ['WGENA', 'WGENOA','WGENTA', 'WGENTOA']))
                                @php
                                    $gena = \App\Model\GenActivation::where('trans_id', $o->id)->first();
                                @endphp

                                @if (!empty($gena))
                                    MSL: {{ $gena->msl }} <br>
                                    MSID: {{ $gena->msid }} <br>
                                @endif
                            @else
                                @if (!empty($o->note))
                                    {{ $o->note }}
                                @else

                                @endif
                            @endif
                        </td>
                        <td>{{ $o->note2 }}</td>
                        <td>{{ $o->product_name  }}</td>
                        <td>${{ $o->denom }}</td>
                        <td>{{ $o->denom_name }}</td>
                        <td>{{ $o->rtr_month }}</td>
                        <td style="{{ $o->type_name == 'Void' ? 'color:red;' : '' }}">${{ $o->collection_amt }}</td>
                        <td style="{{ $o->type_name == 'Void' ? 'color:red;' : '' }}">${{ $o->fee + $o->pm_fee}}</td>
                        <td>{{ $o->action }}</td>
                        <td>
                            @if (!empty($o->sim))
                            {{ $o->carrier == 'GEN Mobile' ? substr($o->sim, 0, 18) . 'XX' : $o->sim }}
                            @php
                                $sim_obj = \App\Model\StockSim::where('sim_serial', $o->sim)->where('product',$o->product_id)->first();
                            @endphp
                            <br> Type: {{ empty($sim_obj) ? 'BYOS' : $sim_obj->type_name }}
                            @endif
                        </td>
                        <td>{{ empty($o->esn) ? '' : ($o->carrier == 'GEN Mobile' ? substr($o->esn, 0, strlen($o->esn) - 2) . 'XX' : $o->esn) }}</td>
                        <td>{{ $o->npa }}</td>
                        <td>{{ $o->action == 'PIN' ? Helper::mask_pin($o->pin) : $o->phone }}</td>

                        <td>{{ $o->created_by }}</td>
                        <td>{{ $o->cdate }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="20" class="text-center">No Record Found</td>
                </tr>
            @endif
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="9" class="text-left">Total {{ $transactions->total() }} record(s). </th>
                    <th>${{ number_format($collection_amt, 2) }}</th>
                    <th>${{ number_format($fee, 2) }}</th>
                    <th colspan="20"></th>
                </tr>
            </tfoot>
        </table>

        <div class="text-right">
            {{ $transactions->appends(Request::except('page'))->links() }}
        </div>


    </div>

    @if (session()->has('success') && session('success') == 'Y')
        <script>
            var onload_events = window.onload;
            window.onload = function () {
                if (onload_events) {
                    onload_events();
                }
                $('#contact-us-success').modal();
            }
        </script>
        <div id="contact-us-success" class="modal fade " tabindex="-1" role="dialog"
             style="display:block;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thank You</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Your request has been processed successfully!
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@stop