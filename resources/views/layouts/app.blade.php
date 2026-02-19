<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baraya</title>
    <link rel="icon" href="./assets/img/baraya.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <!-- aso -->
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style_tow.css') }}" rel="stylesheet">


    <!-- Snap Pixel Code -->
    <script type='text/javascript'>
        (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
        {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
        a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
        r.src=n;var u=t.getElementsByTagName(s)[0];
        u.parentNode.insertBefore(r,u);})(window,document,
        'https://sc-static.net/scevent.min.js');

        snaptr('init', '55e3d878-82ad-4e64-86d2-f32e55701d1c', {});

        snaptr('track', 'PAGE_VIEW');

        </script>
        <!-- End Snap Pixel Code -->
        <!-- TikTok Pixel Code Start -->
        <script>
        !function (w, d, t) {
          w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie","holdConsent","revokeConsent","grantConsent"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
        var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script")
        ;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};


          ttq.load('D65GMGBC77U148L34CCG');
          ttq.page();
        }(window, document, 'ttq');
        </script>
        <!-- TikTok Pixel Code End -->


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/img/baraya.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('home') }}">الرئيسية</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ request()->routeIs('home') ? '#about' : route('home') . '#about' }}">من نحن</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ request()->routeIs('home') ? '#services' : route('home') . '#services' }}">الخدمات</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ request()->routeIs('home') ? '#why' : route('home') . '#why' }}">لماذا نحن</a>
                        </li>


                    </ul>

                    <div class="demo-container">
                        <div class="lang-btn-4" onclick="toggleSwitch(this)">
                            <a href="{{ route('home') }}" class="lang-option active">AR</a>
                            <a href="{{ route('home_en') }}" class="lang-option">EN</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')

    <footer>
        <div class="footer-content">
            <div class="social-icons">
                <a href="https://www.tiktok.com/@baraya_care" title="TikTok" target="_blank" class="social-icon">
                    <i class="fab fa-tiktok"></i>
                </a>



                <a href="https://x.com/baraya_care" title="X">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.244 2H21.552L14.324 10.263L22.828 22H16.172L10.956 14.977L4.81 22H1.5L9.228 13.165L1.073 2H7.897L12.606 8.353L18.244 2ZM17.076 19.98H18.91L6.904 4.02H4.94L17.076 19.98Z" />
                    </svg>
                </a>


                <a href="#https://www.instagram.com/baraya_care/?hl=ar" title="إنستغرام">
                    <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                    </svg>
                </a>

                <a href="https://www.linkedin.com/company/barayacare/" title="لينكد إن">
                    <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>

                <a href="https://www.snapchat.com/explore/barayacare" title="Snapchat">
                    <i class="fa-brands fa-snapchat"></i>
                </a>


            </div>

            <div class="footer-links d-flex justify-content-center">
                <a class="nav-link ">الرئيسية</a>
                <a class="nav-link " href="#">من نحن</a>
                <a class="nav-link " href="#">الخدمات</a>
                <a class="nav-link" href="#why">لماذا نحن</a>

            </div>


            <div class="copyright">
                <p>2025 جميع الحقوق محفوظة - برايا للرعاية الطبية.</p>
            </div>
        </div>
    </footer>

    {{-- <div class="modal" id="bookingModal" >
        <div class="modal-content">
            <button class="modal-close" id="closeBooking">×</button>
            <div class="modal-header">
                <h2>احجز موعدك</h2>
                <p>املأ البيانات وسنتواصل معك قريباً</p>
            </div>
            <form id="bookingForm" action="{{ route('service.booking.store') }}" method="POST">
                @csrf
                <input type="hidden"  name="service_id" id="service_id"  >
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
 --}}
    {{-- <div class="modal" id="successModal">
        <div class="modal-content success-modal">
            <button class="modal-close" id="closeSuccess">×</button>
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h2>تم إرسال حجزك بنجاح</h2>
            <p>سيتم التواصل معك في أقرب وقت</p>
        </div>
    </div> --}}

    <div class="whatsapp-floating">
        <a href="https://wa.me/966556339036" target="_blank" class="wa-icon wa-one" data-city="الرياض">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

        <a href="https://wa.me/966555970651" target="_blank" class="wa-icon wa-two" data-city="جدة">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- <script>
        document.getElementById('submitBooking').addEventListener('click', function() {
            console.log('Submit booking clicked');
            const serviceId = document.getElementById('service_id').value;
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const comment = document.getElementById('comment').value;
            const city = document.getElementById('city').value;
            const formData = new FormData();
            formData.append('service_id', serviceId);
            formData.append('name', name);
            formData.append('phone', phone);
            formData.append('comment', comment);
            formData.append('city', city);
            axios.post('{{ route('service.booking.store') }}', formData, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            })
                .then(response => {
                    if (response.status === 200) {
                        // alert('تم إرسال حجزك بنجاح');
                        document.getElementById('bookingForm').reset();
                        document.getElementById('bookingModal').classList.remove('show');
                        document.body.style.overflow = 'auto';
                    } else {
                        console.log(response.data);
                        // alert(response.data.message);
                    }
                })
                .catch(error => {
                    console.log(error);
                    // alert(error.response.data.message);
                });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            document.querySelectorAll('.btn-book').forEach(button => {
                button.addEventListener('click', function () {

                    const serviceId = this.dataset.serviceId;

                    // Set service_id in the form
                    document.getElementById('service_id').value = serviceId;

                    // Show modal
                    document.getElementById('bookingModal').style.display = 'block';
                });
            });

            // Close modal
            document.getElementById('closeBooking').addEventListener('click', function () {
                document.getElementById('bookingModal').style.display = 'none';
            });

        });
    </script>
 --}}



</body>

</html>
