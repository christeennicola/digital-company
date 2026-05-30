@push('style')
    <style>
        /* تنسيق الحاوية الفرعية ليتم عرضها لأسفل مباشرة */
        #accordionSidebar .collapse {
            position: relative !important;
            left: 0 !important;
            z-index: 1;
            width: 100% !important;
        }

        /* تنسيق قائمة العناصر الفرعية */
        .submenu-list {
            padding: 5px 0 5px 25px;
            /* إزاحة جهة اليسار لتبدو متداخلة */
            display: flex;
            flex-direction: column;
        }

        /* تنسيق الروابط الفرعية */
        .submenu-item {
            color: rgba(255, 255, 255, 0.8) !important;
            /* لون أبيض شفاف قليلاً */
            text-decoration: none;
            padding: 8px 0;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        /* تأثير عند تمرير الماوس فوق الخيار الفرعي */
        .submenu-item:hover {
            color: #ffffff !important;
            text-decoration: none;
        }

        /* تنسيق النقطة الجانبية */
        .submenu-item .bullet {
            margin-right: 10px;
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .swal2-container {
            z-index: 9999 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        table tr td {
            style="text-align: center"
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #554fcd;
            color: white;
        }

        .button {
            background-color: #4e73df;
        }

        .button1 {
            background-color: red;
        }

        .button,
        .button1 {
            color: white;
            font-weight: bold;
            text-decoration: none !important;
            border-radius: 20px;
            padding: 0 15px;
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            height: 35px;
            border: none;
            line-height: 1;
            white-space: nowrap;
            font-size: 14px;
        }

        .button:hover,
        .button1:hover {
            color: white;
        }

        .button1 {
            padding: 12px;
            margin-left: 5px;
        }

        table tr td {
            text-align: center;
        }

        .item-wrapper:hover .content-overlay {
            opacity: 1 !important;
        }

        .portfolio-item-link {
            text-decoration: none !important;
        }

        .item-wrapper:hover {
            transform: translateY(-10px);
            /* حركة خفيفة للأعلى عند التحويم */
        }
    </style>
@endpush
