<style>
    .radio-group {
    display: flex;
    gap: 20px; /* Adjust spacing between radio buttons */
    align-items: center; /* Align items vertically centered */
}

.radio-group div {
    display: flex;
    align-items: center; /* Align label vertically with radio button */
}

.radio-group input[type="radio"] {
    margin-right: 8px;
    margin-bottom:10px;
}

.dark-label {
    color: #333; /* Dark color for labels */
}

</style>
@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Add Donation</h1>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('donation.store') }}" method="POST">
                        @csrf
                        <!-- Donation Type (Radio Options) -->
                        <div class="form-group">
                            <label for="donation_type">Donation Type</label><br>
                            <div class="radio-group">
                                <div>
                                    <input type="radio" id="zakat" name="donation_type" value="zakat" required>
                                    <label for="zakat">Zakat</label>
                                </div>
                                <div>
                                    <input type="radio" id="sadqat" name="donation_type" value="sadqat" required>
                                    <label for="sadqat">Sadqat</label>
                                </div>
                                <div>
                                    <input type="radio" id="donation" name="donation_type" value="donation" required>
                                    <label for="donation">Donation</label>
                                </div>
                            </div>
                        </div>
                        
                    
                        <!-- Full Name Field -->
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter full name" required>
                        </div>
                    
                        <!-- Phone Number Field -->
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Enter phone number" required>
                        </div>
                    
                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                        </div>
                    
                        <!-- Town/City Field -->
                        <div class="form-group">
                            <label for="town_city">Town/City</label>
                            <input type="text" class="form-control" id="town_city" name="town_city" placeholder="Enter town/city" required>
                        </div>
                    
                        <!-- Price Field -->
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter donation amount" required>
                        </div>
                    
                        <!-- Donation Method (Select Options) -->
                        <div class="form-group">
                            <label for="donation_method">Donation Method</label>
                            <select class="form-control" id="donation_method" name="donation_method" required>
                                <option value="" disabled selected>Select donation method</option>
                                <option value="cheque">By Cheque</option>
                                <option value="direct_deposit">Direct Deposit</option>
                                <option value="online_deposit">Online Deposit</option>
                                <option value="international_payment">International Payment</option>
                            </select>
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mr-2" style="background-color: #ffd600; border:white; color:black; border-radius:10px">Submit Donation</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
