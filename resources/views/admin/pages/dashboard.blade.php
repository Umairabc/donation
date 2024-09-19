<style>
    .icon-circle {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: white;
    }

    .icon-circle i {
        color: #1692e9;
        font-size: 30px;
    }
</style>
@extends('admin.layout.layout')
@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-center"> <!-- Add 'justify-content-center' here -->
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card" style="background-color: #d9f5ff; margin-top:50px">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Donations</p>
                                <h1 class="mb-0">8742</h1>
                            </div>
                            <div class="icon-circle">
                                <i class="typcn typcn-briefcase icon-xl"></i>
                            </div>
                        </div>
                        <canvas id="expense-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card" style="background-color: #d8c0d7;  margin-top:50px">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Total Doners</p>
                                <h1 class="mb-0">47,840</h1>
                            </div>
                            <div class="icon-circle"
                                style="background-color: white; border-radius: 50%; padding: 10px; display: flex; justify-content: center; align-items: center; width: 60px; height: 60px;">
                                <i class="typcn typcn-chart-pie icon-xl" style="color: #1692e9;"></i>
                            </div>
                        </div>
                        <canvas id="budget-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card" style="background-color: #f5b08e; margin-top:50px">
                    <div class="card-body">
                        <div
                            class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                            <div>
                                <p class="mb-2 text-md-center text-lg-left">Per Month Donation</p>
                                <h1 class="mb-0">$7,243</h1>
                            </div>
                            <div
                                style="display: flex; justify-content: center; align-items: center; width: 60px; height: 60px; background-color: white; border-radius: 50%;">
                                <i class="typcn typcn-clipboard icon-xl" style="color: #1692e9; font-size: 24px;"></i>
                            </div>

                        </div>
                        <canvas id="balance-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection
