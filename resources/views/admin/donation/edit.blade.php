<style>
    .radio-group {
    display: flex;
    gap: 20px; /* Adjust the space between items as needed */
}

.radio-item {
    display: flex;
    align-items: center;
}

.radio-item input[type="radio"] {
    margin-right: 5px;
    margin-bottom:10px;
}
</style>
@extends('admin.layout.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Donation</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('donation.update', $donation->id) }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="donation_type">Donation Type</label><br>
                            <div class="radio-group">
                                <div class="radio-item">
                                    <input type="radio" id="zakat" name="donation_type" value="zakat" {{ $donation->donation_type == 'zakat' ? 'checked' : '' }} required>
                                    <label for="zakat">Zakat</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="sadqat" name="donation_type" value="sadqat" {{ $donation->donation_type == 'sadqat' ? 'checked' : '' }} required>
                                    <label for="sadqat">Sadqat</label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" id="donation" name="donation_type" value="donation" {{ $donation->donation_type == 'donation' ? 'checked' : '' }} required>
                                    <label for="donation">Donation</label>
                                </div>
                            </div>
                        </div>
                        
                    
                        <!-- Full Name Field -->
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name', $donation->full_name) }}" placeholder="Enter full name" required>
                        </div>
                    
                        <!-- Phone Number Field -->
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $donation->phone_number) }}" placeholder="Enter phone number" required>
                        </div>
                    
                        <!-- Email Field -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $donation->email) }}" placeholder="Enter email" required>
                        </div>
                    
                        <!-- Town/City Field -->
                        <div class="form-group">
                            <label for="town_city">Town/City</label>
                            <input type="text" class="form-control" id="town_city" name="town_city" value="{{ old('town_city', $donation->town_city) }}" placeholder="Enter town/city" required>
                        </div>
                    
                        <!-- Price Field -->
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $donation->price) }}" placeholder="Enter donation amount" required>
                        </div>
                    
                        <!-- Donation Method (Select Options) -->
                        <div class="form-group">
                            <label for="donation_method">Donation Method</label>
                            <select class="form-control" id="donation_method" name="donation_method" required>
                                <option value="" disabled>Select donation method</option>
                                <option value="cheque" {{ $donation->donation_method == 'cheque' ? 'selected' : '' }}>By Cheque</option>
                                <option value="direct_deposit" {{ $donation->donation_method == 'direct_deposit' ? 'selected' : '' }}>Direct Deposit</option>
                                <option value="online_deposit" {{ $donation->donation_method == 'online_deposit' ? 'selected' : '' }}>Online Deposit</option>
                                <option value="international_payment" {{ $donation->donation_method == 'international_payment' ? 'selected' : '' }}>International Payment</option>
                            </select>
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mr-2" style="background-color: #ffd600; border:white; color:black; border-radius:10px">update Donation</button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
