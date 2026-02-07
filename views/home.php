<!-- Hero Section -->
<section class="hero-section py-5 bg-gradient">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="display-5 fw-bold text-dark mb-3">
                        Quick Loans to Your M-Pesa
                    </h1>
                    <p class="lead text-muted mb-4">
                        Get up to Ksh 15,000 instantly. No CRB checks, no guarantors, no paperwork.
                    </p>
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="#loan-form" class="btn btn-primary btn-lg">Apply Now</a>
                        <a href="#how-it-works" class="btn btn-outline-primary btn-lg">Learn More</a>
                    </div>
                    
                    <!-- Trust Badges -->
                    <div class="mt-5 pt-4 border-top">
                        <strong class="d-block text-muted mb-3">Trusted by thousands</strong>
                        <div class="d-flex gap-3">
                            <div class="badge-item">
                                <i class="fas fa-check-circle text-success"></i>
                                <span>No Paperwork</span>
                            </div>
                            <div class="badge-item">
                                <i class="fas fa-lightning-bolt text-warning"></i>
                                <span>Instant Approval</span>
                            </div>
                            <div class="badge-item">
                                <i class="fas fa-lock text-primary"></i>
                                <span>Secure & Safe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="loan-form-card">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4 fw-bold">Find Your Loan Eligibility</h3>
                            
                            <form id="eligibilityForm" class="needs-validation" novalidate>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="John Doe" required>
                                    <div class="invalid-feedback">Please provide your name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">M-Pesa Phone Number</label>
                                    <input type="tel" class="form-control form-control-lg" id="phone_number" name="phone_number" placeholder="0712345678" required>
                                    <div class="invalid-feedback">Please provide a valid phone number.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="id_number" class="form-label">National ID Number</label>
                                    <input type="number" class="form-control form-control-lg" id="id_number" name="id_number" placeholder="12345678" required>
                                    <div class="invalid-feedback">Please provide your ID number.</div>
                                </div>

                                <div class="mb-4">
                                    <label for="loan_type" class="form-label">Loan Type</label>
                                    <select class="form-select form-select-lg" id="loan_type" name="loan_type" required>
                                        <option value="">Select Loan Type...</option>
                                        <option value="Car Loan">🚗 Car Loan</option>
                                        <option value="Education Loan">📚 Education Loan</option>
                                        <option value="Emergency Loan">🆘 Emergency Loan</option>
                                        <option value="Rental Loan">🏠 Rental Loan</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a loan type.</div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                    <i class="fas fa-search me-2"></i>Check Eligibility
                                </button>

                                <small class="text-muted d-block text-center">
                                    <i class="fas fa-shield-alt me-1"></i>Your information is secure and encrypted
                                </small>
                            </form>

                            <div id="eligibilityResult" class="mt-4" style="display: none;">
                                <div class="alert alert-success" id="resultAlert"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section id="how-it-works" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">How It Works</h2>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="step-card text-center">
                    <div class="step-number">1</div>
                    <h5 class="mt-3 mb-2 fw-bold">Check Eligibility</h5>
                    <p class="text-muted">Fill in your basic information to check if you qualify.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="step-card text-center">
                    <div class="step-number">2</div>
                    <h5 class="mt-3 mb-2 fw-bold">Get Approved</h5>
                    <p class="text-muted">Get instant approval if you meet our criteria.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="step-card text-center">
                    <div class="step-number">3</div>
                    <h5 class="mt-3 mb-2 fw-bold">Pay Fee</h5>
                    <p class="text-muted">Pay verification fee (Ksh 95) via M-Pesa to proceed.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="step-card text-center">
                    <div class="step-number">4</div>
                    <h5 class="mt-3 mb-2 fw-bold">Receive Loan</h5>
                    <p class="text-muted">Get your loan to M-Pesa in 5-7 working days.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Why Choose MkopoSafi?</h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h5 class="mt-3 fw-bold">Fast & Easy</h5>
                    <p class="text-muted">Apply in minutes, get approval instantly.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h5 class="mt-3 fw-bold">100% Secure</h5>
                    <p class="text-muted">Your data is encrypted and protected.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h5 class="mt-3 fw-bold">No Guarantors</h5>
                    <p class="text-muted">Zero guarantors or collateral needed.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h5 class="mt-3 fw-bold">Flexible Terms</h5>
                    <p class="text-muted">Repay over 30 days at your pace.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h5 class="mt-3 fw-bold">Expert Support</h5>
                    <p class="text-muted">24/7 customer support via phone & email.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h5 class="mt-3 fw-bold">Direct to M-Pesa</h5>
                    <p class="text-muted">Loan goes straight to your M-Pesa account.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Frequently Asked Questions</h2>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What is the maximum loan amount?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The maximum loan amount is <strong>Ksh 15,000</strong> depending on your eligibility.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long does approval take?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Approval is <strong>instant</strong> if you meet our criteria. Disbursement to M-Pesa takes 5-7 working days.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Is there a CRB check?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                No, we do not carry out CRB checks or require guarantors.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What is the repayment period?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The loan is repayable in <strong>30 days</strong> from the date of disbursement.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What documents do I need?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You only need your <strong>National ID</strong> and <strong>M-Pesa number</strong>. No other documents required!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="mb-3 fw-bold">Ready to Get Your Loan?</h2>
        <p class="lead mb-4">Get approved in minutes, receive funds in days.</p>
        <a href="#loan-form" class="btn btn-light btn-lg">Check Eligibility Now</a>
    </div>
</section>

<script>
document.getElementById('eligibilityForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    
    try {
        const response = await fetch('/check-eligibility', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data)
        });
        
        const result = await response.json();
        
        if (result.eligible) {
            document.getElementById('resultAlert').innerHTML = `
                <strong>Great news!</strong> You qualify for a loan of Ksh ${result.loan_amount.toLocaleString()}!
                <br>Proceed to complete your application.
            `;
        } else {
            document.getElementById('resultAlert').innerHTML = result.message;
            document.getElementById('resultAlert').className = 'alert alert-warning';
        }
        
        document.getElementById('eligibilityResult').style.display = 'block';
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    }
});
</script>
