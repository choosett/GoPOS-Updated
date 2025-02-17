<?php

namespace App\Actions\Fortify;

use App\Models\Business;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Log;

class CreateNewUser implements CreatesNewUsers
{
    public function create(array $input)
    {
        Log::info("🔹 Registration Attempt Started", $input);

        // Validate input fields
        $validated = Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'owner_phone' => ['required', 'string', 'max:20'],
            'website' => ['nullable', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'vat_number' => ['nullable', 'string', 'max:50'],
            'business_phone' => ['nullable', 'string', 'max:20'],
            'business_email' => ['nullable', 'string', 'email', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'district' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:500'],
            'zip_code' => ['nullable', 'string', 'max:20'],
        ])->validate();

        Log::info("✅ Validation Passed");

        // Create a new Business entry
        $business = Business::create([
            'company_name' => $validated['company_name'],
            'vat_number' => $validated['vat_number'] ?? null,
            'business_phone' => $validated['business_phone'] ?? null,
            'business_email' => $validated['business_email'] ?? null,
            'country' => $validated['country'] ?? null,
            'city' => $validated['city'] ?? null,
            'district' => $validated['district'] ?? null,
            'address' => $validated['address'] ?? null,
            'zip_code' => $validated['zip_code'] ?? null,
        ]);

        Log::info("✅ Business Created Successfully", ['business_id' => $business->id]);

        // Create a new User
        return User::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'business_id' => $business->id,
            'owner_phone' => $validated['owner_phone'],
            'website' => $validated['website'] ?? null,
        ]);
    }
}
