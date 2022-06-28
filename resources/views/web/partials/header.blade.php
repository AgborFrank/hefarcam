<header class="main-header w-100">
    <nav class="navbar navbar-expand-xl navbar-light sticky-header">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="{{asset('meta/img/logo-light.png')}}" alt="logo" class="img-fluid logo-white" width="160px" />
                <img src="{{asset('meta/img/logo-black.png')}}" alt="logo" class="img-fluid logo-color" width="160px"/>
            </a>

            <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('home')}}"  aria-expanded="false">
                            Welcome
                        </a>
                    </li>
                    <li><a href="{{route('home')}}" class="nav-link">RIV Coin</a></li>
                    <li class="nav-item dropdown vsm-dropdown-section">
                        <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ecosystem</a>
                        <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                            <div class="dropdown-grid rounded-custom width-full-3">
                                <div class="dropdown-grid-item">
                                    <h6 class="drop-heading">Core Products</h6>
                                    <a href="{{route('home')}}" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-dollar-sign"></i></span>
                                        <div class="drop-title">Vehron Exchange</div>
                                    </a>
                                    <a href="{{route('home')}}" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-wallet"></i></span>
                                        <div class="drop-title">Vehron Wallet</div>
                                    </a>
                                    <a href="{{route('home')}}" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-address-card"></i></span>
                                        <div class="drop-title">Zionville Metaverse</div>
                                    </a>

                                </div>
                                <div class="dropdown-grid-item">
                                    <h6 class="drop-heading">Communitty</h6>
                                    <a href="{{route('home')}}" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-usd-square"></i></span>
                                        <div class="drop-title">Vehron Launchpad</div>
                                    </a>
                                    <a href="accordions.html" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-donate"></i></span>
                                        <div class="drop-title">Vehron Charity</div>
                                    </a>
                                    <a href="{{route('home')}}" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-chart-network"></i></span>
                                        <div class="drop-title">Vehron Academy</div>
                                    </a>

                                </div>
                                <div class="dropdown-grid-item last-item bg-light radius-right-side">
                                    <a href="#"><img src="{{asset('meta/img/ecosystem.png')}}" alt="add" class="img-fluid rounded-custom" /></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{route('home')}}" class="nav-link">ICO Launch</a></li>
                    <li><a href="pricing.html" class="nav-link">Tokenomics</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Communittee</a>
                        <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                            <div class="dropdown-grid rounded-custom width-full">
                                <div class="dropdown-grid-item">
                                    <h6 class="drop-heading">Social Communittee</h6>
                                    <a href="https://www.facebook.com/vehronofficial"  target="_blank" class="dropdown-link px-0">
                                        <span class="me-2"><i class="fab fa-facebook"></i></span>
                                        <div class="drop-title">Facebook Communitee</div>
                                    </a>
                                    <a href="https://www.twitter.com/vehronofficial" target="_blank" class="dropdown-link px-0">
                                        <span class="me-2"><i class="fab fa-twitter"></i></span>
                                        <div class="drop-title">Twitter Communitee</div>
                                    </a>
                                    <a href="https://t.me/vehron" target="_blank" class="dropdown-link px-0">
                                        <span class="me-2"><i class="fab fa-telegram"></i></span>
                                        <div class="drop-title">Telegram Communittee</div>
                                    </a>
                                    <a href="services.html" target="_blank" class="dropdown-link">
                                        <span class="me-2"><i class="fab fa-linkedin"></i></span>
                                        <div class="drop-title">Linkedin Communittee</div>
                                    </a>
                                    <a href="service-single.html" target="_blank" class="dropdown-link px-0">
                                        <span class="me-2"><i class="fab fa-reddit"></i></span>
                                        <div class="drop-title">Reddit Communittee</div>
                                    </a>
                                    <a href="blog.html" target="_blank" class="dropdown-link">
                                        <span class="me-2"><i class="fab fa-medium"></i></span>
                                        <div class="drop-title">Connect on Medium</div>
                                    </a>

                                </div>
                                <div class="dropdown-grid-item radius-right-side bg-light">
                                    <h6 class="drop-heading">Learn and Grow with us.</h6>
                                    <a href="{{route('home')}}" class="dropdown-link">
                                        <span class="me-2"><i class="fas fa-graduation-cap"></i></span>
                                        <div class="drop-title">The Vehron Academy</div>
                                    </a>
                                    <a href="{{route('home')}}" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-briefcase"></i></span>
                                        <div class="drop-title">Vehron Career Center</div>
                                    </a>
                                    <a href="support-single.html" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-headset"></i></span>
                                        <div class="drop-title">Developer's Connect</div>
                                    </a>
                                    <a href="request-demo.html" class="dropdown-link">
                                        <span class="me-2"><i class="far fa-comment-dots"></i></span>
                                        <div class="drop-title">Fintech Fireside Chat</div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Wallets</a>
                        <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                            <div class="dropdown-grid rounded-custom">
                                <div class="dropdown-grid-item">
                                    <h6 class="drop-heading">Connect Wallet</h6>
                                    <a href="#" class="dropdown-link px-0" onclick="web3Login();">
                                        <div class="drop-title">Metamask</div>
                                    </a>

                                    <a href="about-us.html" class="dropdown-link px-0">
                                        <div class="drop-title">Trust Wallet</div>
                                    </a>

                                </div>

                            </div>
                    </li>
                </ul>
            </div>
            @auth
            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                <a href="{{route('user.home')}}" class="btn btn-primary"><i class="far fa-wallet"></i> Go My Wallet</a>
            </div>
            @endauth
            @guest
            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                <a href="{{route('login')}}" class="btn btn-link text-decoration-none me-2">Sign In</a>
                <a href="{{route('register')}}" class="btn btn-primary">Signup for free</a>
            </div>
            @endguest

            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="assets/img/logo-color.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="far fa-close"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-half">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 1</div>
                                                <p>It's for <strong>SaaS Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-2.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 2</div>
                                                <p>Modern <strong>Saas agency</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-3.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">3</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Desktop App</div>
                                                <p><strong>Web Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-4.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">4</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing</div>
                                                <p>App and <strong>Software</strong> Landing</p>
                                            </div>
                                        </a>
                                        <a href="index-5.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">5</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Application</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>

                                        <a href="index-6.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">6</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Startup Agency</div>
                                                <p>Different type of <strong>Agency</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-7.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">7</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Data Analysis</div>
                                                <p>Software & <strong>Data Analysis</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-8.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">8</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing Two</div>
                                                <p>Software & <strong>App Landing Two</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-9.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">9</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">IT Solution</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-10.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">10</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Cyber Security</div>
                                                <p>Cyber Security <strong>Landing Page</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-11.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                11
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Crypto Currency</div>
                                                <p><strong>Crypto Currency</strong> landing page</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="header.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">Navigations</div>
                                        </a>
                                        <a href="hero-sections.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-browser"></i></span>
                                            <div class="drop-title">Hero Sections</div>
                                        </a>
                                        <a href="testimonials.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-address-card"></i></span>
                                            <div class="drop-title">Testimonials</div>
                                        </a>
                                        <a href="call-to-action.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bolt"></i></span>
                                            <div class="drop-title">Call to Action</div>
                                        </a>
                                        <a href="tab-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-eject"></i></span>
                                            <div class="drop-title">Tab Style</div>
                                        </a>
                                        <a href="services-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Services Style</div>
                                        </a>
                                        <a href="work-process.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-hourglass-start"></i></span>
                                            <div class="drop-title">Work Process</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="pricing-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-usd-square"></i></span>
                                            <div class="drop-title">Pricing Style</div>
                                        </a>
                                        <a href="accordions.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-list"></i></span>
                                            <div class="drop-title">Accordions</div>
                                        </a>
                                        <a href="features.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-chart-network"></i></span>
                                            <div class="drop-title">Features</div>
                                        </a>
                                        <a href="footers.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-closed-captioning"></i></span>
                                            <div class="drop-title">Footers</div>
                                        </a>

                                        <a href="team.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user"></i></span>
                                            <div class="drop-title">Our Team</div>
                                        </a>
                                        <a href="integration-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                            <div class="drop-title">Integration Style</div>
                                        </a>
                                        <a href="blog-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Blog Style</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item last-item bg-light radius-right-side">
                                        <a href="#"><img src="assets/img/feature-img3.jpg" alt="add" class="img-fluid rounded-custom" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="pricing.html" class="nav-link">Tokenomics</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Useful Links</h6>
                                        <a href="about-us.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-fingerprint"></i></span>
                                            <div class="drop-title">About Us</div>
                                        </a>
                                        <a href="contact-us.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-address-book"></i></span>
                                            <div class="drop-title">Contact Us</div>
                                        </a>
                                        <a href="services.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Services</div>
                                        </a>
                                        <a href="service-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-server"></i></span>
                                            <div class="drop-title">Services Single</div>
                                        </a>
                                        <a href="blog.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Our Latest News</div>
                                        </a>
                                        <a href="blog-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">News Details</div>
                                        </a>
                                        <a href="career.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-graduation-cap"></i></span>
                                            <div class="drop-title">Career</div>
                                        </a>
                                        <a href="career-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-user-graduate"></i></span>
                                            <div class="drop-title">Career Single</div>
                                        </a>
                                        <a href="integrations.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-rocket-launch"></i></span>
                                            <div class="drop-title">Integrations</div>
                                        </a>
                                        <a href="integration-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                            <div class="drop-title">Integration Single</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item radius-right-side bg-light">
                                        <h6 class="drop-heading">Utility Pages</h6>
                                        <a href="style-guide.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Style Guide</div>
                                        </a>
                                        <a href="support.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-life-ring"></i></span>
                                            <div class="drop-title">Help Center</div>
                                        </a>
                                        <a href="support-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-headset"></i></span>
                                            <div class="drop-title">Help Details</div>
                                        </a>
                                        <a href="request-demo.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-laptop-code"></i></span>
                                            <div class="drop-title">Request for Demo</div>
                                        </a>
                                        <a href="login.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-sign-in"></i></span>
                                            <div class="drop-title">User Login</div>
                                        </a>
                                        <a href="register.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user-plus"></i></span>
                                            <div class="drop-title">User SignUp</div>
                                        </a>
                                        <a href="password-reset.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-trash-undo"></i></span>
                                            <div class="drop-title">Recovery Account</div>
                                        </a>
                                        <a href="404.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-exclamation-triangle"></i></span>
                                            <div class="drop-title">404 Page</div>
                                        </a>
                                        <a href="coming-soon.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-clock"></i></span>
                                            <div class="drop-title">Coming Soon</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.html" class="btn btn-outline-primary me-2">Sign In</a>
                        <a href="request-demo.html" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </div>
    </nav>
</header>
