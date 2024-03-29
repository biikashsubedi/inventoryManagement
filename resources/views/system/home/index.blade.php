@extends('system.layouts.master')


@section('content')


    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-voilet">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2 class="mb-0 text-white">649 <i class='bx bxs-up-arrow-alt font-14 text-white'></i></h2>
                        </div>
                        <div class="ml-auto font-35 text-white"><i class="bx bx-cart-alt"></i>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">{{translate('Total Sales')}}</p>
                        </div>
                        <div class="ml-auto font-14 text-white">+23.4%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-sunset">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2 class="mb-0 text-white">208 <i class='bx bxs-up-arrow-alt font-14 text-white'></i></h2>
                        </div>
                        <div class="ml-auto font-35 text-white"><i class="bx bx-user"></i>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">{{translate('Total Purchases')}}</p>
                        </div>
                        <div class="ml-auto font-14 text-white">+13.6%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-primary-blue">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2 class="mb-0 text-white">114 <i class='bx bxs-down-arrow-alt font-14 text-white'></i>
                            </h2>
                        </div>
                        <div class="ml-auto font-35 text-white"><i class="bx bx-support"></i>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">{{translate('Total Product')}}</p>
                        </div>
                        <div class="ml-auto font-14 text-white">+14.7%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-rose">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2 class="mb-0 text-white">98 <i class='bx bxs-up-arrow-alt font-14 text-white'></i></h2>
                        </div>
                        <div class="ml-auto font-35 text-white"><i class="bx bx-tachometer"></i>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-white">{{translate('Total Bills')}}</p>
                        </div>
                        <div class="ml-auto font-14 text-white">-12.9%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    <div class="card radius-15">
        <div class="card-header border-bottom-0">
            <div class="d-lg-flex align-items-center">
                <div>
                    <h5 class="mb-2 mb-lg-0">{{translate('Sales Update')}}</h5>
                </div>
                <div class="ml-lg-auto mb-2 mb-lg-0">
                    <div class="btn-group-round">
                        <div class="btn-group">
                            <button type="button" class="btn btn-white">{{translate('Daily')}}</button>
                            <button type="button" class="btn btn-white">{{translate('Weekly')}}</button>
                            <button type="button" class="btn btn-white">{{translate('Monthly')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="chart1"></div>
        </div>
    </div>


@endsection
