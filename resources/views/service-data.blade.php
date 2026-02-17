@extends('layouts.app')
@section('content')
    <!-- Banner Section -->
    <div class="booking-banner">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1>احجز موعدك</h1>
        </div>
    </div>

    <!-- Booking Form Section -->
    <div class="booking-form-container">
        <div class="booking-form-wrapper">
            <div class="form-header">
                <h2>احجز موعدك</h2>
                <p>املأ البيانات وسنتواصل معك قريباً</p>
            </div>

            <form id="bookingForm" action="{{ route('service.booking.store') }}" method="POST">
                @csrf
                <input type="hidden" name="service_id" id="service_id">

                <div class="form-group">
                    <label for="name">الاسم *</label>
                    <input type="text" name="name" id="name" required placeholder="أدخل اسمك الكامل">
                </div>

                <div class="form-group">
                    <label for="phone">رقم الجوال *</label>
                    <input type="tel" name="phone" id="phone" required placeholder="أدخل رقم الجوال">
                </div>

                <div class="form-group">
                    <label for="city">المدينة *</label>
                    <select id="city" name="city" required>
                        <option value="">اختر المدينة</option>
                        <option value="جدة">جدة</option>
                        <option value="الرياض">الرياض</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">تعليق (اختياري)</label>
                    <textarea name="comment" id="comment" placeholder="أضف أي ملاحظات أو تفاصيل إضافية"></textarea>
                </div>

                <button type="submit" id="submitBooking" class="btn-submit">إرسال الحجز</button>
            </form>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal" id="successModal" style="display: none;">
        <div class="modal-content success-modal">
            <button class="modal-close" id="closeSuccess">×</button>
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h2>تم إرسال حجزك بنجاح</h2>
            <p>سيتم التواصل معك في أقرب وقت</p>
        </div>
    </div>

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
    @if (session('success'))
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
    </script>
@endsection
