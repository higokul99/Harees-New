<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Harees Jewellery - From Harees Group' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/harees-jewellery-logo.png') }}">
    


        {{-- Production Configuration (Uses CDN for shared hosting) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;600&family=Lato:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Crimson+Text:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-blue': '#1e3a8a',
                        'darker-blue': '#1e40af',
                        'navy': '#0f172a',
                        'golden': '#fbbf24',
                        'light-golden': '#fcd34d',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                    }
                }
            }
        }
    </script>
    @stack('head_scripts')

    <style>
        /* Carousel Styles */
        .carousel-item {
            min-width: calc(100% / 3);
        }

        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', Arial, sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header Styles */
        .site-header {
            position: sticky;
            top: 0;
            background-color: #082f49;
            color: #facc15;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 15px 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        /* Brand section */
        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1 1 100%;
        }

        .logo {
            width: 64px;
            height: 64px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .brand:hover .logo {
            transform: rotate(-2deg);
        }

        .brand-text h1 {
            font-size: 20px;
            font-weight: 800;
        }

        .brand-text .subtitle {
            font-weight: bold;
        }

        .brand-text .tagline {
            font-size: 12px;
            color: #fde68a;
        }

        /* Search Bar */
        .search-bar {
            flex: 1 1 100%;
            max-width: 400px;
            margin: 10px 0;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .search-form {
            position: relative;
            width: 100%;
        }

        .search-form input[type="search"] {
            width: 100%;
            padding: 10px 45px 10px 15px;
            border-radius: 25px;
            border: 1px solid #facc15;
            background-color: #082f4900;
            color: #fff;
            font-size: 14px;
            box-sizing: border-box;
        }

        .search-form input::placeholder {
            color: #facc15;
        }

        .search-form .search-btn {
            position: absolute;
            top: 50%;
            right: 12px;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 16px;
            color: #facc15;
            cursor: pointer;
            padding: 0;
            line-height: 1;
            transition: transform 0.3s ease;
        }

        .search-btn:hover i {
            transform: rotate(10deg);
        }

        /* Navigation Icons */
        .nav-icons {
            display: flex;
            gap: 8px;
            font-size: 12px;
            align-items: center;
            justify-content: space-around;
            flex: 1 1 100%;
            margin-top: 10px;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 0 5px;
        }

        .nav-icons a {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            min-width: fit-content;
            padding: 5px 8px;
            border-radius: 8px;
            transition: background-color 0.2s;
            white-space: nowrap;
        }

        .nav-icons a:hover {
            background-color: rgba(250, 204, 21, 0.1);
        }

        .nav-icons a i,
        .nav-icons a svg.icon {
            transition: transform 0.3s ease;
        }

        .nav-icons a:hover i,
        .nav-icons a:hover svg.icon {
            transform: rotate(5deg);
        }

        .nav-icons .icon {
            width: 16px;
            height: 16px;
            fill: #facc15;
        }

        .nav-icons i {
            font-size: 16px;
            margin-bottom: 2px;
        }

        /* Cart Badge */
        .cart {
            position: relative;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -10px;
            background: #ef4444;
            color: white;
            font-size: 10px;
            width: 18px;
            height: 18px;
            text-align: center;
            line-height: 18px;
            border-radius: 50%;
        }

        /* Mobile Search Toggle */
        .mobile-search-toggle {
            display: none;
        }

        /* Mobile Responsive */
        @media (max-width: 767px) {
            .nav-icons {
                gap: 4px;
                justify-content: space-evenly;
                margin-top: 8px;
            }

            .nav-icons a {
                padding: 8px 4px;
                min-width: auto;
            }

            .nav-icons span {
                display: none;
            }

            .nav-icons i,
            .nav-icons .icon {
                font-size: 18px;
                width: 18px;
                height: 18px;
            }

            .search-bar {
                display: block;
                max-height: 0;
                opacity: 0;
                margin: 0;
                padding: 0;
                transition: all 0.3s ease;
            }

            .search-bar.active {
                max-height: 60px;
                opacity: 1;
                margin: 10px 0;
                padding: 0;
            }

            .mobile-search-toggle {
                display: inline-block;
            }

            .brand-text h1 {
                font-size: 18px;
            }

            .brand-text .tagline {
                font-size: 10px;
            }

            .logo {
                width: 50px;
                height: 50px;
            }

            .container {
                padding: 10px 15px;
            }
        }

        /* Tablet and Desktop */
        @media (min-width: 768px) {

            .brand,
            .search-bar,
            .nav-icons {
                flex: unset;
            }

            .container {
                flex-wrap: nowrap;
            }

            .search-bar {
                max-width: 300px;
                margin: 0 20px;
            }

            .nav-icons {
                margin-top: 0;
                gap: 15px;
                font-size: 14px;
            }

            .nav-icons a {
                flex-direction: row;
                gap: 5px;
                padding: 5px 10px;
            }

            .nav-icons span {
                display: inline !important;
            }
        }
    </style>
    @stack('styles')
</head>