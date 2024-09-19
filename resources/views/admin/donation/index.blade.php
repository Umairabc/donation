@extends('admin.layout.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>All Donation</h5>
                        <a href="{{ route('donation.create') }}" class="btn" style="background-color: #ffd600; color: black; border-radius:10px;">+Add Donation</a>

                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-hover" id="productTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Donation Type</th>
                                        <th>Full Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Price</th>
                                        <th>Donation Method</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donations as $donation)
                                        <tr>
                                            <td>{{ $donation->id }}</td>
                                            <td>{{ $donation->donation_type }}</td>
                                            <td>{{ $donation->full_name }}</td>
                                            <td>{{ $donation->phone_number }}</td>
                                            <td>{{ $donation->email }}</td>
                                            <td>{{ $donation->town_city }}</td>
                                            <td>{{ $donation->price }}</td>
                                            <td>{{ $donation->donation_method }}</td>
                                            <td colspan="2">
                                                <a href="{{ route('donation.edit',$donation->id) }}" class="btn btn-primary" style="background-color: #1692e9">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                    <a href="{{ route('donation.delete',$donation->id) }}" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#productTable').DataTable(); // Initialize DataTable
        });
    </script>
@endsection
