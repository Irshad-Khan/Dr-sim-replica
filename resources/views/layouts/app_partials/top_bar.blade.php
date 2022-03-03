<header class="position-absolute w-100">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('main.index') }}">
        <svg width="60" height="40" viewBox="0 0 60 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="20" cy="20" r="17" stroke="#2EA6DE" stroke-width="6"/>
          <circle cx="40" cy="20" r="17" stroke="#2EA6DE" stroke-width="6"/>
          </svg>
      </a>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

        <button class="btn btn-transparent closeNavbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg width="24px" height="24px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M257,461.46c-114,0-206.73-92.74-206.73-206.73S143,48,257,48s206.73,92.74,206.73,206.73S371,461.46,257,461.46ZM257,78C159.55,78,80.27,157.28,80.27,254.73S159.55,431.46,257,431.46s176.73-79.28,176.73-176.73S354.45,78,257,78Z"/><path d="M342.92,358a15,15,0,0,1-10.61-4.39L160.47,181.76a15,15,0,1,1,21.21-21.21L353.53,332.4A15,15,0,0,1,342.92,358Z"/><path d="M171.07,358a15,15,0,0,1-10.6-25.6L332.31,160.55a15,15,0,0,1,21.22,21.21L181.68,353.61A15,15,0,0,1,171.07,358Z"/></g></svg>
        </button>
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('main.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./unlock.php">Unlock</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contact.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">More</a>
          </li>
        </ul>
      </div>
      <div class="btnNav">
        <a href="./d-index.php" class="btn  btn-outline-primary rounded me-2 d-flex align-items-center">Track Order</a>
        <a href="{{ route('login') }}">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_101_2)">
            <rect width="46" height="46" rx="23" transform="matrix(-1 0 0 1 50 0)" fill="white"/>
            </g>
            <path d="M27 11.3333C25.8463 11.3333 24.7185 11.6754 23.7592 12.3163C22.7999 12.9573 22.0522 13.8684 21.6107 14.9343C21.1692 16.0002 21.0537 17.1731 21.2788 18.3046C21.5038 19.4362 22.0594 20.4756 22.8752 21.2914C23.691 22.1072 24.7304 22.6628 25.862 22.8878C26.9935 23.1129 28.1664 22.9974 29.2323 22.5559C30.2982 22.1144 31.2093 21.3667 31.8502 20.4074C32.4912 19.4481 32.8333 18.3203 32.8333 17.1666C32.8333 15.6195 32.2188 14.1358 31.1248 13.0418C30.0308 11.9478 28.5471 11.3333 27 11.3333V11.3333ZM27 20.6666C26.3078 20.6666 25.6311 20.4613 25.0555 20.0767C24.4799 19.6921 24.0313 19.1455 23.7664 18.506C23.5015 17.8664 23.4322 17.1627 23.5673 16.4838C23.7023 15.8048 24.0356 15.1812 24.5251 14.6917C25.0146 14.2022 25.6383 13.8689 26.3172 13.7338C26.9961 13.5988 27.6999 13.6681 28.3394 13.933C28.9789 14.1979 29.5256 14.6465 29.9101 15.2221C30.2947 15.7977 30.5 16.4744 30.5 17.1666C30.5 18.0948 30.1313 18.9851 29.4749 19.6415C28.8185 20.2978 27.9283 20.6666 27 20.6666V20.6666ZM37.5 33.4999V32.3333C37.5 30.1673 36.6396 28.0901 35.108 26.5585C33.5765 25.027 31.4993 24.1666 29.3333 24.1666H24.6667C22.5007 24.1666 20.4235 25.027 18.892 26.5585C17.3604 28.0901 16.5 30.1673 16.5 32.3333V33.4999H18.8333V32.3333C18.8333 30.7862 19.4479 29.3024 20.5419 28.2085C21.6358 27.1145 23.1196 26.4999 24.6667 26.4999H29.3333C30.8804 26.4999 32.3642 27.1145 33.4581 28.2085C34.5521 29.3024 35.1667 30.7862 35.1667 32.3333V33.4999H37.5Z" fill="black"/>
            <defs>
            <filter id="filter0_d_101_2" x="0" y="0" width="54" height="54" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dy="4"/>
            <feGaussianBlur stdDeviation="2"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_101_2"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_101_2" result="shape"/>
            </filter>
            </defs>
            </svg>
        </a>
        <a href="#">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d_1_348)">
            <rect width="46" height="46" rx="23" transform="matrix(-1 0 0 1 50 0)" fill="white"/>
            </g>
            <path d="M37 32L32.514 27.506L37 32ZM35 21.5C35 23.7543 34.1045 25.9163 32.5104 27.5104C30.9163 29.1045 28.7543 30 26.5 30C24.2457 30 22.0837 29.1045 20.4896 27.5104C18.8955 25.9163 18 23.7543 18 21.5C18 19.2457 18.8955 17.0837 20.4896 15.4896C22.0837 13.8955 24.2457 13 26.5 13C28.7543 13 30.9163 13.8955 32.5104 15.4896C34.1045 17.0837 35 19.2457 35 21.5V21.5Z" stroke="black" stroke-width="2" stroke-linecap="round"/>
            <defs>
            <filter id="filter0_d_1_348" x="0" y="0" width="54" height="54" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dy="4"/>
            <feGaussianBlur stdDeviation="2"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_348"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_348" result="shape"/>
            </filter>
            </defs>
          </svg>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</header>
