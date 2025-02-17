<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg p-4">
                <h2 class="text-center mb-4">REGISTER</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="row">
                        <!-- Primary Contact Information -->
                        <div class="col-md-6">
                            <div class="card p-3 shadow-sm">
                                <h4 class="mb-3">Primary Contact Information</h4>

                                <div class="mb-2">
                                    <label class="form-label required">First Name</label>
                                    <input type="text" class="form-control" name="first_name" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label required">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label required">Email Address</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label required">Owner Phone</label>
                                    <input type="text" class="form-control" name="owner_phone" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Website</label>
                                    <input type="text" class="form-control" name="website">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label required">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label required">Repeat Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <!-- Company Information -->
                        <div class="col-md-6">
                            <div class="card p-3 shadow-sm">
                                <h4 class="mb-3">Company Information</h4>

                                <div class="mb-2">
                                    <label class="form-label required">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" required>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">VAT Number</label>
                                    <input type="text" class="form-control" name="vat_number">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Business Phone</label>
                                    <input type="text" class="form-control" name="business_phone">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Business Email</label>
                                    <input type="email" class="form-control" name="business_email">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Country</label>
                                    <select class="form-control" name="country">
                                        <option value="">Select Country</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="India">India</option>
                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">District</label>
                                    <input type="text" class="form-control" name="district">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>

                                <div class="mb-2">
                                    <label class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
