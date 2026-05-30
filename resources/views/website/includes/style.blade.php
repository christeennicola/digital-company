@push('styles')
    <style>
        .site-top-bar {
            background-color: rgb(244, 239, 239);
            padding: 8px 0;
            font-size: 13px;
            font-family: sans-serif;
            position: relative;
            z-index: 10000;
        }

        .top-bar-link {
            color: red;
            font-size: 16px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .top-bar-link:hover {
            color: #f5a425;
        }

        .top-bar-divider {
            width: 1px;
            height: 12px;
            background-color: #555;
        }

        .admin-zone {
            color: #f5a425;
            font-weight: bold;
        }

        .logout-btn {
            color: #ff6b6b;
        }

        .logout-btn:hover {
            color: #ff4747;
        }

        /* 2. التثبيت الانسيابي للهيدر عند النزول (الحل السحري للاهتزاز) */

        /* في الحالة العادية عند فتح الصفحة لأول مرة */
        .header-area.header-sticky {
            top: 40px !important;
            /* ينزل تحت الـ Top Bar بسلاسة */
            transition: all .8s ease !important;
            /* تجعل الانتقال ناعم جداً */
        }

        /* بمجرد أن ينزل المستخدم خطوة واحدة للأسفل ويتحول الهيدر إلى sticky */
        .header-area.header-sticky.background-header {
            position: fixed !important;
            top: 0 !important;
            /* يلتصق بأعلى الشاشة تماماً بدون أي فراغ */
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            /* ظل خفيف ليعطي عمقاً للتصفح */
        }

        .service-item:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
        }

        .service-card:hover {
            background: #e67e22 !important;
            /* لون برتقالي أغمق عند التمرير */
            transform: translateY(-10px);
            /* رفع البطاقة قليلاً للأعلى */
            box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.2);
            /* زيادة الظل */
        }

        /* تنسيق الحاوية الأساسية للصورة */
        .custom-portfolio-item {
            position: relative;
            width: 100%;
            height: 250px;
            /* يمكنك زيادة أو تقليل الارتفاع حسب رغبتك */
            overflow: hidden;
            border-radius: 12px;
            /* حواف دائرية أنيقة */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            /* ظل خفيف خلف الإطار */
        }

        /* حركة انسيابية للصورة عند التحويم */
        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(22, 34, 57, 0.85);
            /* لون داكن يتناسب مع هوية قالب SpaceDyna */

            /* جعل العناصر بداخلها في المنتصف تماماً */
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;

            opacity: 0;
            /* مخفي افتراضياً */
            transition: opacity 0.4s ease;
        }

        /* تنسيق النصوص وتكبير الحجم */
        .overlay-text {
            text-align: center;
            color: #fff;
            padding: 20px;
            width: 100%;
            /* لضمان التمركز الأفقي الصحيح */

            /* دفع النص للأسفل قليلاً لعمل تأثير حركة صعود عند التحويم */
            transform: translateY(20px);
            transition: transform 0.4s ease;
        }

        /* تكبير كود العنوان (مثال: Web Development) */
        .overlay-text h4 {
            font-size: 26px !important;
            /* تكبير الخط */
            font-weight: 700 !important;
            margin-bottom: 10px !important;
            letter-spacing: 0.5px;
            /* تباعد خفيف بين الحروف لمظهر عصري */
            text-transform: capitalize;
            /* جعل الحروف الأولى كبيرة تلقائياً */
        }

        /* تكبير كود القسم أو الوصف (Category) */
        .overlay-text p {
            font-size: 16px !important;
            /* تكبير خط القسم قليلاً */
            opacity: 0.85;
            margin: 0;
            font-weight: 400;
            color: white;
        }

        /* -----------------------------------------
                                                   تأثيرات الـ Hover عند مرور مؤشر الفأرة
                                                -------------------------------------------- */

        /* 1. إظهار الغطاء الداكن */
        .custom-portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        /* 2. تحريك النص للأعلى بسلاسة */
        .custom-portfolio-item:hover .overlay-text {
            transform: translateY(0);
        }

        /* 3. عمل زووم خفيف وتكبير للصورة بالخلفية */
        .custom-portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }

        /* إلغاء الخط الافتراضي للروابط */
        .portfolio-item-link {
            text-decoration: none !important;
        }

        .blog-card:hover {
            transform: translateY(-12px);
            box-shadow: 0px 25px 50px rgba(255, 122, 0, 0.4) !important;
        }

        /* تكبير الصورة الداخلية بنعومة السينما */
        .blog-card:hover .blog-img-container img {
            transform: scale(1.06);
        }

        /* حركة السهم وتأثير الزر الأبيض عند تمرير الماوس */
        .read-more-btn:hover {
            background: #1850bf !important;
            /* يتحول الزر للون داكن فخم عند التمرير */
            color: #1850bf !important;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2) !important;
        }

        .read-more-btn:hover i {
            transform: translateX(5px);
            /* السهم يتحرك لليمين قليلاً لإعطاء شعور بالتفاعل */
        }

        .dropdown-menu {
            display: none !important;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 9999;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* إظهار القائمة عند وضع الفأرة فوق الـ Dropdown */
        .dropdown:hover .dropdown-menu {
            display: block !important;
        }

        li .main-red-btn a:hover {
            color: white !important;
        }
    </style>
@endpush
