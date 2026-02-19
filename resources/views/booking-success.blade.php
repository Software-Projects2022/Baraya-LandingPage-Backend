@extends('layouts.app')
@section('content')
    <!-- Banner Section -->
    <div class="booking-banner">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1>تم إرسال حجزك بنجاح</h1>
        </div>
    </div>

    <!-- Booking Form Section -->
    <div class="booking-form-container">
        <div class="booking-form-wrapper">
            <div class="form-header">
                <div class="success-icon">
                    <i class="fas fa-check"></i>
                </div>
                <h2>تم إرسال حجزك بنجاح</h2>
                <p>سيتم التواصل معك في أقرب وقت</p>
                </div>
        </div>
    </div>

    <!-- Success Modal -->

    <style>
        /* Banner Styles */
        .booking-banner {
            position: relative;
            width: 100%;
            height: 250px;
            background-image: url('{{ asset('assets/img/docto.jpg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <!-- Check if session has success message -->
    {{-- @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('successModal').style.display = 'flex';
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successModal = document.getElementById('successModal');
            const closeSuccess = document.getElementById('closeSuccess');
            const bookingForm = document.getElementById('bookingForm');
            const submitButton = document.getElementById('submitBooking');

            // Handle form submission
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Disable submit button to prevent multiple submissions
                submitButton.disabled = true;

                // Submit form via AJAX
                const formData = new FormData(this);

                fetch(this.action, {
                        method: 'POST',
                        body: formData,

                    })
                    .then(response => {
                        // Check if response is ok
                        if (response.ok) {
                            return response.json();
                        }
                        throw new Error('Network response was not ok');
                    })
                    .then(data => {
                        console.log('Response:', data);

                        if (data.success) {
                            // Reset form
                            bookingForm.reset();
                            // Show success modal
                            successModal.style.display = 'flex';
                        }
                    })

                    .finally(() => {
                        // Re-enable submit button
                        submitButton.disabled = false;
                        submitButton.textContent = 'إرسال الحجز';
                    });
            });

            // Close success modal
            closeSuccess.addEventListener('click', function() {
                successModal.style.display = 'none';
            });

            // Close modal when clicking outside
            successModal.addEventListener('click', function(e) {
                if (e.target === successModal) {
                    successModal.style.display = 'none';
                }
            });
        });
    </script> --}}
@endsection
