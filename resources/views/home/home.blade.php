<x-default-layout>
    <x-slot:title>{{ $data['title'] }}</x-slot:title>

    <div class="w-100 overflow-hidden"
         style="background-image: url('{{ asset('assets/images/bg1.jpg') }}');
                 background-size: cover; background-position: center; height: 80vh;">

        <div class="row h-100 d-flex justify-content-center align-items-center"
             style="background-color: rgba(0, 0, 0, 0.7);">



            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="text-left px-5 text-white">
                    <h1 class="display-4 text-light">Bringing Ideas to Life</h1>
                    <p class="lead">
                        We help businesses and individuals turn their ideas into reality<br/>
                        through creative, reliable, and results-driven freelance services.<br/>
                         Whether you're starting from scratch or leveling up, we are here to make <br/>
                          it happen—on time, on point, and with a personal touch.
                    </p>
                    <a href="{{ route('blog') }}" class="btn btn-danger btn-lg">
                        <i class="fas fa-rocket me-2"></i>Get Started
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-outline-danger btn-lg">
                        <i class="fas fa-user-plus me-2"></i>Register
                    </a>

                </div>
            </div>

            <div class="col-lg-4 col-md-10 col-sm-12 px-4">
                <div class="p-4" style="background-color: rgb(4 22 55 / 73%); border-radius: 8px;">
                    <h1 class="text-white">What is aipcdata?</h1>
                    <div class="text-white mt-4">
                        <div class="mt-3 d-flex align-items-center">
                            <i class="fas fa-code text-white me-2"></i>
                            <p class="mb-0">Professional web development tailored to your business needs</p>
                        </div>
                        <div class="mt-3 d-flex align-items-center">
                            <i class="fas fa-bullhorn text-white me-2"></i>
                            <p class="mb-0">Comprehensive digital marketing strategies for maximum online visibility</p>
                        </div>
                        <div class="mt-3 d-flex align-items-center">
                            <i class="fas fa-coins text-white me-2"></i>
                            <p class="mb-0">Secure and seamless cryptocurrency payment integration for your platform</p>
                        </div>
                        <div class="mt-3 d-flex align-items-center">
                            <i class="fas fa-cloud text-white me-2"></i>
                            <p class="mb-0">Reliable and scalable cloud hosting solutions for all businesses</p>
                        </div>
                        <div class="mt-3 d-flex align-items-center">
                            <i class="fas fa-search text-white me-2"></i>
                            <p class="mb-0">Expert SEO services to boost your search engine rankings</p>
                        </div>

                        {{-- <img src="{{ asset('assets/images/coin-home.png') }}" class="img-fluid"/> --}}
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="mt-5"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2>Crypto Payment Integration</h2>
                <p>
                    Experience the future of transactions with our secure and seamless cryptocurrency payment solutions.
                    Accept payments in popular cryptocurrencies, ensuring fast, reliable, and borderless transactions for your business.
                    <br/>
                    <div class="mt-3 d-flex align-items-start">
                        <i class="fas fa-globe text-info me-2 mt-1"></i>
                        <p class="mb-0"><strong>Global Reach:</strong> Accept payments from customers worldwide without the need for currency conversion.</p>
                    </div>
                    <div class="mt-3 d-flex align-items-start">
                        <i class="fas fa-percent text-info me-2 mt-1"></i>
                        <p class="mb-0"><strong>Lower Transaction Fees:</strong> Save on transaction costs compared to traditional payment methods.</p>
                    </div>
                    <div class="mt-3 d-flex align-items-start">
                        <i class="fas fa-shield-alt text-info me-2 mt-1"></i>
                        <p class="mb-0"><strong>Enhanced Security:</strong> Benefit from blockchain technology to ensure secure and tamper-proof transactions.</p>
                    </div>
                    <div class="mt-3 d-flex align-items-start">
                        <i class="fas fa-bolt text-info me-2 mt-1"></i>
                        <p class="mb-0"><strong>Faster Settlements:</strong> Receive payments instantly without delays caused by intermediaries.</p>
                    </div>
                    <div class="mt-3 d-flex align-items-start">
                        <i class="fas fa-user-secret text-info me-2 mt-1"></i>
                        <p class="mb-0"><strong>Customer Privacy:</strong> Offer a payment method that respects customer anonymity and privacy.</p>
                    </div>
                </p>
            </div>
            <div class="col-lg-8 text-right">
                <img src="{{ asset('assets/images/pay.jpg') }}" class="img-fluid"/>
            </div>
        </div>

        {{-- services --}}
        <div class="row mt-5">
            @php
                $services = [
                    [
                        'icon' => 'fas fa-laptop-code',
                        'title' => 'Custom Website Development',
                        'description' => 'Tailored website solutions designed to meet your unique business needs and goals.'
                    ],
                    [
                        'icon' => 'fas fa-server',
                        'title' => 'Back-End Development & Integrations',
                        'description' => 'Robust back-end systems and seamless integrations to power your applications.'
                    ],
                    [
                        'icon' => 'fas fa-rocket',
                        'title' => 'Landing Pages & MVPs for Startups',
                        'description' => 'Launch fast with high-converting landing pages and MVPs to validate your ideas.'
                    ],
                    [
                        'icon' => 'fas fa-shield-alt',
                        'title' => 'Performance, Security & Maintenance',
                        'description' => 'Ensure your website is fast, secure, and always up-to-date with our expert services.'
                    ],
                ];
            @endphp

            @foreach ($services as $service)
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <i class="{{ $service['icon'] }} fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">{{ $service['title'] }}</h5>
                            <p class="card-text">{{ $service['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- work fllow --}}
        <div class="row mt-5">
          <div class="col-lg-6">
            <img src="{{ asset('assets/images/fllow.jpg') }}" class="img-fluid" />
          </div>

          <div class="col-lg-6">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-5">Our Workflow: From Design to Hosting</h2>
                </div>

                <div class="col-12 mb-3 d-flex align-items-center">
                    <i class="fas fa-pencil-ruler fa-2x text-success me-3"></i>
                    <div>
                        <h5 class="mb-1">1. Design</h5>
                        <p class="mb-0">We start by understanding your vision and creating a custom design tailored to your needs.</p>
                    </div>
                </div>

                <div class="col-12 mb-3 d-flex align-items-center">
                    <i class="fas fa-code fa-2x text-info me-3"></i>
                    <div>
                        <h5 class="mb-1">2. Development</h5>
                        <p class="mb-0">Our team brings the design to life with clean, efficient, and scalable code.</p>
                    </div>
                </div>

                <div class="col-12 mb-3 d-flex align-items-center">
                    <i class="fas fa-cogs fa-2x text-warning me-3"></i>
                    <div>
                        <h5 class="mb-1">3. Testing</h5>
                        <p class="mb-0">We rigorously test your website to ensure it is bug-free, secure, and performs flawlessly.</p>
                    </div>
                </div>

                <div class="col-12 mb-3 d-flex align-items-center">
                    <i class="fas fa-cloud-upload-alt fa-2x text-danger me-3"></i>
                    <div>
                        <h5 class="mb-1">4. Hosting</h5>
                        <p class="mb-0">Finally, we deploy your website to a reliable hosting platform, ensuring it is live and accessible.</p>
                    </div>
                </div>
            </div>
          </div>

        </div>

        <div class="my-5"></div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-center mb-4">Create and Order Your Custom Website</h2>
                <form class="p-5 border rounded shadow-lg bg-light w-100" style="max-width: 100%; margin: 0 auto;" id="orderForm">
                    <div class="mb-4">
                        <label for="name" class="form-label fw-bold">Your Name</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your full name" required style="border: 2px solid #007bff; border-radius: 8px;">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label fw-bold">Your Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address" required style="border: 2px solid #007bff; border-radius: 8px;">
                    </div>
                    <div class="mb-4">
                        <label for="website_type" class="form-label fw-bold">Type of Website</label>
                        <select class="form-select form-select-lg" id="type" name="type" required style="border: 2px solid #007bff; border-radius: 8px;">
                            <option value="" disabled selected>Select the type of website</option>
                            @foreach (\App\Enums\SiteOrderEnum::cases() as $siteOrder)
                                <option value="{{ $siteOrder->value }}">{{ $siteOrder->label() }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="features" class="form-label fw-bold">Features</label>
                        <textarea class="form-control form-control-lg" id="features" name="features" rows="4" placeholder="Describe the features you want (e.g., payment integration, SEO optimization, etc.)" required style="border: 2px solid #007bff; border-radius: 8px;"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="budget" class="form-label fw-bold">Budget</label>
                        <input type="number" class="form-control form-control-lg" id="budget" name="budget" placeholder="Enter your budget in USD" required style="border: 2px solid #007bff; border-radius: 8px;">
                    </div>
                    <div class="mb-4">
                        <label for="deadline" class="form-label fw-bold">Deadline</label>
                        <input type="date" class="form-control form-control-lg" id="deadline" name="deadline" required style="border: 2px solid #007bff; border-radius: 8px;">
                    </div>
                    <div class="text-center">
                        <button id="orderFormBTN" class="btn btn-primary btn-lg px-5 py-3" style="background-color: #007bff; border: none; border-radius: 8px;">
                            <i class="fas fa-paper-plane me-2"></i>Submit Order
                        </button>
                    </div>
                </form>


            </div>

            <div class="col-lg-6">
                <h2 class="text-center mb-4">Pricing Plans</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="p-4 border rounded shadow-lg bg-light text-center">
                            <i class="fas fa-leaf fa-3x text-primary mb-3"></i>
                            <h5 class="mb-3">Basic Plan</h5>
                            <p class="mb-2">- $100</p>
                            <p class="mb-2">- A simple website</p>
                            <p class="mb-2">- Up to 5 pages</p>
                            <p class="mb-0">- Basic features</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 border rounded shadow-lg bg-light text-center">
                            <i class="fas fa-store fa-3x text-success mb-3"></i>
                            <h5 class="mb-3">E-commerce Plan</h5>
                            <p class="mb-2">- $1200</p>
                            <p class="mb-2">- Fully functional</p>
                            <p class="mb-2">- Payment integration</p>
                            <p class="mb-0">- E-commerce website</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 border rounded shadow-lg bg-light text-center">
                            <i class="fas fa-briefcase fa-3x text-warning mb-3"></i>
                            <h5 class="mb-3">Business Plan</h5>
                            <p class="mb-2">- $1000</p>
                            <p class="mb-2">- Professional website</p>
                            <p class="mb-2">- Advanced features</p>
                            <p class="mb-0">- Tailored for businesses</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="p-4 border rounded shadow-lg bg-light text-center">
                            <i class="fas fa-tools fa-3x text-danger mb-3"></i>
                            <h5 class="mb-3">Custom Plan</h5>
                            <p class="mb-2">- Contact us</p>
                            <p class="mb-2">- Tailored solutions</p>
                            <p class="mb-2">- Specific needs</p>
                            <p class="mb-0">- Custom quote</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-5"></div>

        @include('home._posts' , $data)

    </div>

    @push('scripts')
        <script>
            document.getElementById('orderForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const orderFormBTN =  $('#orderFormBTN');

                orderFormBTN.attr('disabled', true);

                const formData = new FormData(this);

                const data = {
                    name: formData.get('name'),
                    email: formData.get('email'),
                    type: formData.get('type'),
                    features: formData.get('features'),
                    budget: formData.get('budget'),
                    deadline: formData.get('deadline'),
                    _token: '{{ csrf_token() }}'
                };

                console.log(data);
                Swal.fire({
                    position: "bottom-start",
                    icon: "success",
                    title: "You'r order is sending",
                    showConfirmButton: false,
                    timer: 1500
                });

                $.ajax({
                    url: "{{ route('site-order.store') }}",
                    method: 'POST',
                    data: data,
                    success: function(response) {
                        orderFormBTN.attr('disabled', false);

                        Swal.fire({
                            icon: 'success',
                            title: 'Order Submitted',
                            text: response.message,
                        });
                        $('#orderForm')[0].reset();
                    },
                    error: function(error) {
                        orderFormBTN.attr('disabled', false);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An unexpected error occurred. Please try again later.',
                        });
                    }
                });
        });
        </script>
    @endpush

</x-default-layout>
