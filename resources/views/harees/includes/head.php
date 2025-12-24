<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Harees Jewellery - From Harees Group</title>
  <link rel="icon" type="image/x-icon" href="./assets/harees-jewellery-logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <?php echo vite(['resources/css/app.css', 'resources/js/app.js']); ?>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;600&family=Lato:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    /* For elegant serif combination */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;500&display=swap');

    /* For modern luxury */
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Crimson+Text:wght@400;600&display=swap');

    .carousel-item {
      min-width: calc(100% / 3);
    }
  </style>
  <style>
    /*.hidden {
            display: none;
        }

        .block {
            display: block;
        }
        .container {
          width: 100%;
          max-width: 1200px;
          margin: 0 auto;
          display: flex;
          align-items: center;
        }*/
  </style>
  <style>
    /*#gallery {
            z-index: 10;
            
        }
       */

    /* Navigation link with even higher z-index */
  </style>
  <style type="text/css">
    /* header style  */
    /* Reset and base styles */
    /* header style  */
    /* Reset and base styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    /* Import Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&display=swap');

    body {
      /* font-family: Arial, sans-serif; */
      font-family: 'Montserrat', Arial, sans-serif;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

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

    .search-bar {
      flex: 1 1 100%;
      max-width: 400px;
      margin: 10px 0;
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
    }

    /* Navigation */
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

    .nav-icons .icon {
      width: 16px;
      height: 16px;
      fill: #facc15;
    }

    .nav-icons i {
      font-size: 16px;
      margin-bottom: 2px;
    }

    /* Mobile Search Toggle */
    .mobile-search-toggle {
      display: none;
    }

    .search-bar {
      transition: all 0.3s ease;
      overflow: hidden;
    }

    /* Hide text on mobile, show only icons */
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

      /* Mobile search bar - hidden by default */
      .search-bar {
        display: block;
        max-height: 0;
        opacity: 0;
        margin: 0;
        padding: 0;
        transition: all 0.3s ease;
      }

      /* Show search bar when active */
      .search-bar.active {
        max-height: 60px;
        opacity: 1;
        margin: 10px 0;
        padding: 0;
      }

      /* Show mobile search toggle */
      .mobile-search-toggle {
        display: inline-block;
      }

      /* Reduce brand text size on mobile */
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

    /* Cart */
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
</head>