@extends('layouts.main')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper p-0">
      <div class="tab-content home-tab-content">
        <div class="tab-pane fade show active" id="Dashboards-1" role="tabpanel" aria-labelledby="Dashboards-tab">

          <div class="row">
            <div class="col-md-4 grid-margin grid-margin-xl-0 grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Total Conversion Rate</h4>
                  <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                    <h6 class="font-weight-normal">Mar 28 -  Apr 28.2019</h6>
                    <button type="button" class="btn btn-outline-primary">Details</button>
                  </div>
                  <div class="row mt-4 d-flex align-items-center">
                    <div class="col-xl-9 mb-4 mb-sm-0 ">
                        <h1 class="font-weight-medium m-0 text-dark">$2345.00 <span class="text-danger text-small font-weight-normal">-11.45% (1.2%)</span></h1>
                    </div>

                      <div class="col-xl-3"><canvas id="total-conversion"></canvas></div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-xl-0 grid-margin-lg-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Avg. Order Quantity</h4>
                    <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                      <h6 class="font-weight-normal">Mar 28 -  Apr 28.2019</h6>
                      <button type="button" class="btn btn-outline-primary">Details</button>
                    </div>
                    <div class="row mt-4 d-flex align-items-center">
                      <div class="col-xl-9 mb-4 mb-sm-0 ">
                          <div class="col-xl-9 ">
                          <h1 class="font-weight-medium m-0 text-dark">4,356 <span class="text-success text-small font-weight-normal">+54.34 (1.2%)</span></h1>
                      </div>

                        <div class="col-xl-3"><canvas id="avrg-order-quantity"></canvas></div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin grid-margin-xl-0 grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-0">Percentage of licenses used</h4>
                  <div class="d-xl-flex justify-content-between mt-3 mb-3 align-items-center">
                    <h6 class="font-weight-normal">Mar 28 -  Apr 28.2019</h6>
                    <button type="button" class="btn btn-outline-primary">Details</button>
                  </div>
                  <div class="row mt-4 d-flex align-items-center">
                    <div class="col-xl-9">
                        <h1 class="font-weight-medium m-0 text-dark">45.34% <span class="text-success text-small font-weight-normal">+24.18 (2.6%)</span></h1>
                    </div>

                      <div class="col-xl-3"><canvas id="percentage"></canvas></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->




@endsection
