{{-- @extends('layouts.landing.app')

@section('title', Helpers::get_business_settings('business_name') . ' ' . translate('Home'))

@section('content')

    @include('landing.partials.home.intro')

    @include('landing.partials.home.feature')

    @include('landing.partials.home.screenshots')

    @include('landing.partials.home.choose-us')

    @include('landing.partials.home.agent-registration')

    @include('landing.partials.home.how-it-works')

    @include('landing.partials.home.download')

    @include('landing.partials.home.business-statistics')

@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/assets/landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/landing/css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/admin/vendor/icon-set/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/landing/plugins/swiper/swiper-bundle.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/assets/landing/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/landing/css/custom.css')}}">

    <link rel="stylesheet" href="{{asset('public/assets/admin')}}/css/toastr.css">
    <title>Zamapay Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg landing-navbar sticky-top">
        <a class="navbar-brand" href="#">
            <img
                alt="Zamapay logo"
                width="170"
                src="{{ asset('public/assets/landing/img/brown-logo.png') }}"
                class="logo ps-4"
            />
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link mx-4" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4" href="#about-us">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-4" href="#contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-4" href="#" role="button"
                       id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Language
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        {{-- @foreach ($languages as $key => $language)
                            <li><a class="dropdown-item" href="{{ url('set-language') . '/' . $language->code }}">{{ $language->name }}</a></li>
                            @if (count($languages) > ($key + 1))
                                <hr>
                            @endif
                        @endforeach --}}
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item login">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    
    
    <svg class="background-svg svg-1" viewBox="0 0 120 120">
    <defs>
        <filter id="blur" x="-10%" y="-10%" width="150%" height="150%">
        <feGaussianBlur in="SourceGraphic" stdDeviation="5" />
        </filter>
    </defs>
    <circle cx="50" cy="50" r="40" class="circle-blur" />
    </svg>
    
    <div class="svg-container">
        <svg class="background-svg svg-2" viewBox="0 0 120 120" overflow="visible">
            <circle cx="50" cy="50" r="40" class="circle-blur" />
        </svg>
    </div>
    
    <svg class="background-svg svg-3" viewBox="0 0 120 120">
    <circle cx="50" cy="50" r="40" class="circle-blur" />
    </svg>
    
    {{-- <svg class="background-svg svg-4" viewBox="0 0 120 120">
    <circle cx="50" cy="50" r="40" class="circle-blur" />
    </svg>
    
    <svg class="background-svg svg-5" viewBox="0 0 120 120">
    <circle cx="50" cy="50" r="40" class="circle-blur" />
    </svg>   --}}
    
      <div class="parent-container">
        <section class="d-flex align-items-center p-5">
          <div class="hero-container">
            <div class="row">
              <div class="col-md-6 mt-5">
                <div class="fw-900" style="font-size: 50px">
                    Simplifying Your Money Transfers and Payments with <span class="website-color">Zamapay</span>
                </div>
                <p>
                    <span class="website-color">Zamapay</span> is your all-in-one digital wallet solution, enabling effortless money transfers,
                    easy fund additions, quick withdrawals, and seamless utility bill payments.
                    Experience fast, secure transactions that simplify your financial management every day!
                </p>
                <div class="button-container d-flex">
                    <a class="btn btn-small text-white website-bg-color" href="#">Learn More</a>
                    <a class="btn btn-small mx-3" href="#">Find Out More</a>
                </div>
              </div>
              <div class="col-md-6 text-center">
                <img
                  alt="Dashboard overview with charts and graphs"
                  class="img-fluid"
                  src="{{ asset('public/assets/landing/img/media/hrrd-hero-img 1.png') }}"
                />
              </div>
            </div>
          </div>
        </section>
    
    </div>
        
        
    <div class="container text-center mt-100" id="features">
        {{-- <svg class="background-img feature-bg-svg" viewBox="0 0 100 100">
            <image href="{{ asset('assets/landing_page_images/circles.png') }}" x="0" y="0" width="100%" height="100%" />
        </svg> --}}
        <div>
            <h1 class="display-5 fw-bold">
                Features That You Can Get <br />
                In <span class="website-color">Zamapay</span>
            </h1>
            <br />
            <p class="lead">
                Many of the latest and useful features in Zamapay you can see them in more detail below
            </p>
        </div>
        <br />
        <div class="row justify-content-center">
            <div class="col-md-3">
                <button class="card mb-3 feature-card selected-card" data-target="#superAdmin">
                    <div class="card-body d-flex align-items-start">
                        {{-- <img class="feature-card-icon" src="{{ asset('assets/landing_page_images/super-admin-icon.png') }}" alt="Icon" > --}}
                        <div>
                            <h3 class="card-title">Super Admin</h3>
                            <p class="card-text ">
                                Comprehensive Control, Seamless Management, And Powerful Insights For Zamapay SaaS.
                            </p>
                        </div>
                    </div>
                </button>
            </div>
    
            <div class="col-md-3">
                <button class="card mb-3 feature-card" data-target="#teacherApp">
                    <div class="card-body d-flex align-items-start">
                        {{-- <img class="feature-card-icon" src="{{ asset('assets/landing_page_images/teacher-icon.png') }}" alt="Icon" > --}}
                        <div>
                            <h3 class="card-title">Merchant Panel</h3>
                            <p class="card-text">
                                Effortlessly manage your shops, track activities, and optimize performance for greater success
                            </p>
                        </div>
                    </div>
                </button>
            </div>
    
            <div class="col-md-3">
                <button class="card mb-3 feature-card" data-target="#student">
                    <div class="card-body d-flex align-items-start">
                        {{-- <img class="feature-card-icon" src="{{ asset('assets/landing_page_images/student-icon.png') }}" alt="Icon" > --}}
                        <div>
                            <h3 class="card-title">Agent App & Shop app</h3>
                            <p class="card-text">
                                Provide essential services for Customers, enabling seamless  for a convenient financial experience.
                            </p>
                        </div>
                    </div>
                </button>
            </div>

            <div class="col-md-3">
                <button class="card mb-3 feature-card" data-target="#customer">
                    <div class="card-body d-flex align-items-start">
                        {{-- <img class="feature-card-icon" src="{{ asset('assets/landing_page_images/student-icon.png') }}" alt="Icon" > --}}
                        <div>
                            <h3 class="card-title">Customer App</h3>
                            <p class="card-text">
                                Effortlessly transfer money, pay utility bills, and top up mobile wallets anytime, anywhere.
                            </p>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    
    
      <div class="container content-section mt-5" id="superAdmin">
        <div class="row">
          <div class="col-md-6">
            <img
              alt="Dashboard overview with charts and graphs"
              class="mt-5"
              src="{{ asset('public/assets/landing/img/media/super-admin-ss.png') }}"
            />
          </div>
          <div class="col-md-6 mt-5">
            <h4 class="fw-bolder website-color">Super Admin</h4>
            <h2 class="fw-800">Centralized control for <br> Zamapay Wallet Solutions</h2>
            <p>
                The Super Admin in Zamapay manages the platform's ecosystem, overseeing merchants, agents, and end-user applications.
                They create and modify accounts, monitor key performance indicators (KPIs), ensure compliance, and resolve disputes. 
                Additionally, the Super Admin controls user access and configures system settings to enhance the user experience for 
                both merchants and customers, playing a vital role in maintaining the platform's integrity and efficiency.
            </p>
            <div class="button-container d-flex">
                <a class="btn btn-small text-white website-bg-color" href="#">Learn More</a>
                <a class="btn btn-small mx-3" href="#">Find Out More</a>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container content-section mt-5" id="teacherApp" style="display: none">
        <div class="row">
          <div class="col-md-6">
            <img
              alt="Dashboard overview with charts and graphs"
              class="mt-5"
              src="{{ asset('assets/landing/img/media/merchant-ss.png') }}"
            />
          </div>
          <div class="col-md-6 mt-5">
            <h4 class="fw-bolder website-color">Merchant Panel</h4>
            <h2 class="fw-800">Centralized control for Zamapay Shops & Agents  </h2>
            <p>
                The Merchant Panel in Zamapay allows merchant administrators to efficiently manage their business operations. 
                Through this panel, they can add new shops and approve balance requests from shops and agents. 
                This streamlined process ensures that all transactions are handled promptly, 
                enabling merchants to maintain control over their financial activities while 
                facilitating smooth interactions with their associated shops and agents. 
                The Merchant Panel is designed to enhance operational efficiency and support 
                effective business management within the Zamapay ecosystem.
            </p>
            <div class="button-container d-flex">
                <a class="btn btn-small text-white website-bg-color" href="#">Learn More</a>
                <a class="btn btn-small mx-3" href="#">Find Out More</a>
            </div>
          </div>
        </div>
      </div>
    
      <div class="container content-section mt-5" id="student" style="display: none">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center">
            <img
              alt="Dashboard overview with charts and graphs"
              class="feature-customer-img"
              src="{{ asset('public/assets/landing/img/media/agent-ss.png') }}"
            />
          </div>
          <div class="col-md-6 mt-5">
            <h4 class="fw-bolder website-color">Shop and Agent App</h4>
            <h2 class="fw-800">Seamless Top-Ups and Withdrawals for Customers.</h2>
            <p>
                The Agent and Shop App in Zamapay empowers agents and shop owners to provide essential financial 
                services directly to customers. With this app, agents can easily top up customer accounts and facilitate withdrawals, 
                ensuring a seamless and convenient experience for users. The intuitive interface allows for quick transactions, 
                enabling agents to manage their operations efficiently while enhancing customer satisfaction. 
                By bridging the gap between digital wallets and cash transactions, the Agent and Shop App plays 
                a vital role in expanding access to financial services in the community. 
            </p>
            <a class="btn text-white website-bg-color" href="#">
              Learn More
            </a>
            <a class="btn" href="#"> Find Out More </a>
          </div>
        </div>
      </div>

      <div class="container content-section mt-5" id="customer" style="display: none">
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center">
            <img
              alt="Dashboard overview with charts and graphs"
              class="feature-customer-img"
              src="{{ asset('public/assets/landing/img/media/customer-ss.png') }}"
            />
          </div>
          <div class="col-md-6 mt-5">
            <h4 class="fw-bolder website-color">Customer App</h4>
            <h2 class="fw-800">Effortless Money Transfers and Bill Payments Anytime</h2>
            <p>
                The Customer Mobile App from Zamapay offers a convenient and user-friendly platform for managing finances on the go. 
                Users can effortlessly transfer money between wallets, pay utility bills, and top up mobile accounts with just a few taps. 
                The app ensures secure transactions and provides real-time notifications for all activities, 
                allowing customers to stay informed about their finances. With its intuitive design and robust features, 
                the Customer Mobile App simplifies everyday financial tasks, making it an essential tool for anyone 
                looking to manage their money efficiently and conveniently.
            </p>
            <a class="btn text-white website-bg-color" href="#">
              Learn More
            </a>
            <a class="btn" href="#"> Find Out More </a>
          </div>
        </div>
      </div>
    
      <div class="container-fluid position-relative p-0 mt-100" id="about-us">
        {{-- <img class="background-image-about-us" src="{{ asset('assets/landing_page_images/about-us-bg.png') }}" alt=""> --}}
        <div class="row position-relative pl-250 pt-50">
          <div class="col-md-6">
            <p class="fw-bold website-color">About Us</p>
            <div>
              <h2 class="display-8 fw-bolder">
                An Exceptionally Unique Experience Tailored To You
              </h2>
              <p class="text-secondary mt-2">
                At Zamapay, we empower Business Payments with innovative SaaS solutions,
                enhancing learning experiences and streamlining administrative
                processes for educators and students.
              </p>
              <div class="mt-3">
                <p class="mb-2">
                  <i class="fas fa-check me-2 website-color"></i>
                  Organize your data
                </p>
                <p class="mb-2">
                  <i class="fas fa-check me-2 website-color"></i>
                  Always in sync
                </p>
                <p class="mb-2">
                  <i class="fas fa-check me-2 website-color"></i>
                  Work with any team
                </p>
                <p class="mb-2">
                  <i class="fas fa-check me-2 website-color"></i>
                  Embedded analytics
                </p>
              </div>
            </div>
            <div class="d-flex mt-4">
              <a
                class="mr-5 btn text-white website-bg-color px-4 pt-2"
                href="#"
              >
                Get Started
              </a>
              <a class="btn mx-3" href="#"> Find Out More </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-start">
              <div class="mb-3 me-3">
                <img
                  alt="Group of people having a meeting in a modern office with sticky notes on the wall"
                  class="img-fluid rounded image-crop mr-100"
                  src="https://storage.googleapis.com/a1aa/image/PAx4MKf5T2SrPS999oPN5QfD2eWBSlIcIeNBZu52IQ7bwvaOB.jpg"
                />
              </div>
              <div class="text-center ml-5">
                <div class="mb-4">
                  <p class="display-6 fw-bold text-dark">15</p>
                  <p class="text-secondary">Years <br> experience</p>
                </div>
                <div class="mb-4 rounded website-bg-color py-2 px-4">
                  <p class="display-6 fw-bold text-light">
                    20k
                  </p>
                  <p class="text-light">Local <br> Customer</p>
                </div>
                <div>
                  <p class="display-6 fw-bold text-dark">3</p>
                  <p class="text-secondary">Available In 3+ <br> Languages</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    
      {{-- <div class="container text-light" style="margin-top: 100px; background-color: #05ADA6; border-radius: 25px; padding: 50px 150px; width: fit-content;">
        <div class="d-flex" style="width: 730px; margin-top: 20px;">
          <div>
            <h2>The App Supports 3 Languages.</h2>
            
            <p>
              Our app supports Kurdish, Arabic, and English—ensuring a seamless and
              personalized experience for users. Enjoy easy navigation and access to
              all features, making it accessible for a diverse audience.
            </p>
            
            <div class="d-flex mt-4">
              <button class="btn btn-light m-2" style="color: #05ADA6; padding: 0 30px;">Get Started</button>
              <button class="btn btn-outline-light m-2">Find Out More</button>
            </div>
          </div>
      
          <div class="d-flex flex-column" style="margin-left: 20px; margin-top: -20px;">
            <div class="d-flex align-items-center btn btn-lg m-2 text-light" style="background-color: #68b4b096; width: 200px;">
              <div style="background-color: #7ecac68a; border-radius: 10px; padding: 9px;">
                العربية
              </div>
              <div style="margin-left: 35px;">Arabic</div>
            </div>         
            <div class="d-flex align-items-center btn btn-lg m-2 text-light" style="background-color: #68b4b096; width: 200px;">
              <div style="background-color: #7ecac68a; padding: 9px; border-radius: 10px; margin-right: 25px;">
                کوردی
              </div>
              <div class="">Kurdish</div>
            </div>
            
            <div class="d-flex align-items-center btn btn-lg m-2 text-light" style="background-color: #68b4b096; width: 200px;">
              <div style="background-color: #7ecac68a; padding: 10px 18px; border-radius: 10px; margin-right: 30px;">
                En
              </div>
              <div class="">English</div>
            </div>
          </div>
        </div>
      </div> --}}
      
      
      <div class="testimonial-section position-relative">
        <div class="container text-center mt-2 position-relative">
          <h2 class="testimonial-title">What Our Users Say</h2>
          <div class="row justify-content-center mt-5">
            <div class="col-md-4">
              <div class="card text-center p-3 mb-3 testimonial-card">
                <img
                  alt="User avatar"
                  class="rounded-circle position-absolute testimonial-image"
                  height="50"
                  src="https://storage.googleapis.com/a1aa/image/lLIAYFuD6exvXSXZpdxcHGf8FCR6LcudIWfa0ufQpwSwmvWOB.jpg"
                  width="50"
                />
                <p class="mt-4">
                  Although this is well-intentioned, the goal certainly is to reduce
                  the quantity of these bothersome thoughts.
                </p>
      
                <hr class="testimonial-hr"> <!-- Horizontal line -->
      
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <div>
                    <h5 class="mb-0">Wade Warren</h5>
                    <p class="text-muted">CEO, Google Inc.</p>
                  </div>
                  <div class="text-warning star-margin">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
      
            <!-- Repeat for other testimonials -->
            <div class="col-md-4">
              <div class="card text-center p-3 mb-3 testimonial-card">
                <img
                  alt="User avatar"
                  class="rounded-circle position-absolute testimonial-image"
                  height="50"
                  src="https://storage.googleapis.com/a1aa/image/lLIAYFuD6exvXSXZpdxcHGf8FCR6LcudIWfa0ufQpwSwmvWOB.jpg"
                  width="50"
                />
                <p class="mt-4">
                  Although this is well-intentioned, the goal certainly is to reduce
                  the quantity of these bothersome thoughts.
                </p>
      
                <hr class="testimonial-hr"> <!-- Horizontal line -->
      
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <div>
                    <h5 class="mb-0">Wade Warren</h5>
                    <p class="text-muted">CEO, Google Inc.</p>
                  </div>
                  <div class="text-warning star-margin">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
      
            <div class="col-md-4">
              <div class="card text-center p-3 mb-3 testimonial-card">
                <img
                  alt="User avatar"
                  class="rounded-circle position-absolute testimonial-image"
                  height="50"
                  src="https://storage.googleapis.com/a1aa/image/lLIAYFuD6exvXSXZpdxcHGf8FCR6LcudIWfa0ufQpwSwmvWOB.jpg"
                  width="50"
                />
                <p class="mt-4">
                  Although this is well-intentioned, the goal certainly is to reduce
                  the quantity of these bothersome thoughts.
                </p>
      
                <hr class="testimonial-hr"> <!-- Horizontal line -->
      
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <div>
                    <h5 class="mb-0">Wade Warren</h5>
                    <p class="text-muted">CEO, Google Inc.</p>
                  </div>
                  <div class="text-warning star-margin">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
         
      <div class="container w-2000 mt-100 mb-100" id="contact">
        <div class="contact-form">
            <h5 class="website-color mb-40 fw-bolder">Get Started</h5>
            <h2 class="display-6 fw-900 mb-60">Get in touch with us. We're here to <br> assist you.</h2>
            <form>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Phone Number (optional)">
                    </div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                </div>
                <button type="submit" class="btn btn-custom mt-4">Leave us a Message</button>
            </form>
            <div class="social-icons position-absolute mt-70">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <div class="hero-section d-flex align-items-center justify-content-between website-bg-color footer-up">
        <h4 class="display-6 fw-bold text-white m-0">Manage Your Business Payments <br> With Zamapay</h4>
        <a href="#" class="btn btn-light px-4 fw-bold website-color">Read More</a>
    </div>
    
    <div class="footer text-white footer-down">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="fw-bold">Zamapay</h5>
                    <p>Experience The Future Of Education With Our <strong>Zamapay</strong> SaaS Platform.</p>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold m-3">Services</h5>
                    <div style="display: flex; flex-direction: column;">
                        <a href="#" class="text-white m-3 service">How It Works</a>
                        <a href="#" class="text-white m-3 service">Features</a>
                        <a href="#" class="text-white m-3 service">Integrations</a>
                        <a href="#" class="text-white m-3 service">Pricing</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold m-3">Company</h5>
                    <div style="display: flex; flex-direction: column;">
                        <a href="#" class="text-white m-3 service">About</a>
                        <a href="#" class="text-white m-3 service">Terms</a>
                        <a href="#" class="text-white m-3 service">Privacy Policy</a>
                        <a href="#" class="text-white m-3 service">Careers</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="fw-bold m-3">Social Media</h5>
                    <div class="social-icons-footer" style="display: flex; flex-direction: row; margin-left: 25px;">
                        <a href="#" class="service" style="color: white;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="service" style="color: white;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="service" style="color: white;"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="service" style="color: white;"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="service" style="color: white;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    <script>
        //Function to handle tab switching
        document.querySelectorAll('.feature-card').forEach(function(card) {
            card.addEventListener('click', function() {
                // Hide all content sections
                document.querySelectorAll('.content-section').forEach(function(section) {
                    section.style.display = 'none';
                });

                // Show the target content section
                var targetId = this.getAttribute('data-target');
                document.querySelector(targetId).style.display = 'block';

                // Remove 'selected-card' class from all cards
                document.querySelectorAll('.feature-card').forEach(function(c) {
                    c.classList.remove('selected-card');
                    c.style.backgroundColor = ''; // Reset background color
                });

                // Add 'selected-card' class to the clicked card
                this.classList .add('selected-card');
            });
        });
    </script>
</body>
</html>