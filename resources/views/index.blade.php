@extends('layouts.app')
@section('content')

    <main>
        <section class="hero" id="home">
            <div class="container">
                <div class="main_hero_container">
                    <div class="hero-content">
                        <h1>
                            خطوتك الأولى
                            <span class="orange-text">للتأهيل </span> و<span class="blue-text">الشفاء</span>
                            يبدأ من هنا
                        </h1>

                        <p class="hero-description">
                            تلتزم مجموعة برايا للرعاية المديدة والتأهيل الطبي بتقديم الخدمات الصحية المتميزة والمتكاملة
                            والتي تشمل على خدمات الرعاية المديدة، التأهيل الطبي، والرعاية الصحية المنزلية
                            خدماتنا الطبية مصممة بعناية لتلبية احتياجات جميع المرضى وتحسين جودة حياتهم

                        </p>



                        <div class="cta-buttons">
                            <button class="btn btn-orange btn-book" onclick="window.location.href='{{ route('booking', 'main') }}'" data-service-id="0">
                                <span data-service-id="0">احجز موعدك الآن</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>

                            <a href="tel:+966920014962" class="btn btn-blue">
                                <i class="fas fa-phone"></i>
                                <span>تواصل معنا</span>
                            </a>
                        </div>
                    </div>


                    <div class="hero-image">
                        <div class="image-wrapper">
                            <div class="main-image-container">
                                <div class="glow-orange"></div>
                                <div class="image-border">
                                    <div class="image-inner">
                                        <img src="./assets/img/Logo...jpg" alt="أخصائي علاج طبيعي" class="doctor-image">
                                    </div>
                                </div>


                            </div>

                            <div class="floating-card card-customers">
                                <div class="card-title">
                                    <i class="fas fa-smile"></i>
                                    <span>عملاء سعداء</span>
                                </div>
                                <div class="avatars-row">
                                    <img src="https://i.pravatar.cc/150?img=33" alt="عميل" class="avatar">
                                    <img src="https://i.pravatar.cc/150?img=12" alt="عميل" class="avatar">
                                    <img src="https://i.pravatar.cc/150?img=25" alt="عميل" class="avatar">
                                    <div class="avatar-more">+90</div>
                                </div>
                            </div>

                            <div class="floating-card card-rating">
                                <div class="rating-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="rating-text">نتائج سريعة<br>ومضمونة</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="who-we-are-section" id="about">
            <div class="container">
                <div class="main_about">
                    <div class="video-container">
                        <div class="video-wrapper">
                            <div class="image-box">
                                <video id="myVideo" width="100%" autoplay loop playsinline>
                                    <source src="./assets/img/axxs.mp4" type="video/mp4">
                                    متصفحك لا يدعم الفيديو.
                                </video>

                                <div class="video-controls">
                                    <button id="playPauseBtn">
                                        <i class="fa-solid fa-pause"></i>
                                    </button>

                                    <button id="muteBtn">
                                        <i class="fa-solid fa-volume-high"></i>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class="info-cards">
                            <div class="info-card">
                                <div class="info-number">5000+</div>
                                <div class="info-label">مريض</div>
                            </div>
                            <div class="info-card">
                                <div class="info-number">30+</div>
                                <div class="info-label">متخصص</div>
                            </div>
                            <div class="info-card">
                                <div class="info-number">98%</div>
                                <div class="info-label">نجاح</div>
                            </div>
                        </div>
                    </div>
                    <div class="values-container_main">
                        <h2 class="section-title">من نحن</h2>
                        <p class="description-text">
                            مستشفيات وعيادات برايا الطبية هي أحد مشاريع واستثمارات تي في إم كابيتال هيلثكير بارتنرز،
                            الصندوق الاستثماري المعروف بخبراته في إنشاء وتشغيل مرافق الرعاية المديدة والتأهيل الطبي في
                            منطقة الخليج العربي.

                        </p>
                        <div class="main_item">
                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <span class="value-text">الثقة</span>
                            </div>

                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <span class="value-text">العناية</span>
                            </div>

                            <div class="value-item">
                                <div class="value-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="value-text">التميز</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="services" id="services">
            <div class="container">
                <div class="section-header">
                    <h2>خدماتنا الطبية</h2>
                    <p class="section-subtitle">نقدم مجموعة شاملة من الخدمات الطبية المتخصصة بأعلى معايير الجودة</p>
                </div>

                <div class="services-grid">
                    @forelse ($services as $service)
                    <div class="service-card">
                        <div class="icon-wrapper">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name_ar }}">
                        </div>
                        <div class="service-content">
                            <h3>{{ $service->name_ar }}</h3>
                            <p>{{ $service->short_description_ar }}</p>
                            <button class="btn-book" onclick="window.location.href='{{ route('booking', $service->id) }}'" data-service-id="{{ $service->id }}">
                                <span data-service-id="{{ $service->id }}">احجز الآن</span>
                                <i class="fas fa-arrow-left"></i>
                            </button>
                        </div>
                    </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </section>

        <section class="main-section" id="why">

            <div class="container">
                <h2 class="section-title_main">لماذا تختار برايا</h2>
                <p>نقدم مجموعة شاملة من الخدمات الطبية المتخصصة بأعلى معايير الجودة</p>
                <div class="container">
                    <div class="main_card_container">
                        <div class="card">
                            <img src="./assets/img/b.jpg" alt="العلاج الطبيعي" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <div class="gear"></div>
                                </div>
                                <h3 class="card-title">طاقم طبي متخصص عالي الخبرة</h3>
                                <p class="card-description">
                                    نقدّم خدمات تأهيل متكاملة تهدف إلى تقليل الألم واستعادة الحركة وتحسين القوة والمرونة
                                    تشمل خدماتنا إعادة التأهيل الحركي، علاج الإصابات الرياضية، والحالات العضلية والعصبية
                                    يعتمد فريقنا عالي الخبرة على تقييم دقيق وتقنيات علاجية حديثة لمساعدتك على استعادة
                                    كفاءة وجودة حياتك اليومية بثقة

                                </p>
                                <button onclick="window.location.href='{{ route('booking', 'main') }}'" class="card-btn btn-book"  data-service-id="0">احجز الآن</button>

                            </div>
                        </div>

                        <div class="card">
                            <img src="./assets/img/v.jpg" alt="العلاج الطبيعي" class="card-image">
                            <div class="card-overlay">
                                <div class="card-icon">
                                    <div class="gear"></div>
                                </div>
                                <h3 class="card-title">ثقة -عناية - تميز</h3>
                                <p class="card-description">
                                    برامج علاجية مثبتة علميا ومتخصصة لكل حالة بناءً على التقييم الشامل. نقدمها تحت اشراف
                                    ايدي أمينة من المتخصصين المميزين .
                                    تساعد هذه البرامج على تسريع التعافي، دعم نتائج العلاج، والوقاية من تكرار الإصابة
                                    وتحسين الصحة واللياقة العامة لمختلف الأعمار

                                </p>
                                <button onclick="window.location.href='{{ route('booking', 'main') }}'" class="card-btn btn-book"  data-service-id="0">احجز الآن</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection
