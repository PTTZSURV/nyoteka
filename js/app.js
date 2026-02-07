/**
 * Modern MkopoSafi Application JavaScript
 */

// App Configuration
const AppConfig = {
    apiBaseUrl: '/api',
    environment: 'production'
};

// Utility Functions
const Utils = {
    /**
     * Format currency to KES
     */
    formatCurrency: (amount) => {
        return new Intl.NumberFormat('en-KE', {
            style: 'currency',
            currency: 'KES'
        }).format(amount);
    },

    /**
     * Validate email
     */
    validateEmail: (email) => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    },

    /**
     * Validate phone number (Kenya format)
     */
    validatePhone: (phone) => {
        return /^(254|0)7\d{8}$/.test(phone);
    },

    /**
     * Show toast notification
     */
    showToast: (message, type = 'info') => {
        const toastHtml = `
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">MkopoSafi</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
                </div>
                <div class="toast-body">
                    ${message}
                </div>
            </div>
        `;
        
        const toastContainer = document.createElement('div');
        toastContainer.innerHTML = toastHtml;
        document.body.appendChild(toastContainer);
        
        const toast = new bootstrap.Toast(toastContainer.querySelector('.toast'));
        toast.show();
    },

    /**
     * Show loading spinner
     */
    showLoading: (button) => {
        button.disabled = true;
        const originalText = button.innerHTML;
        button.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
        button.dataset.originalText = originalText;
        return button;
    },

    /**
     * Hide loading spinner
     */
    hideLoading: (button) => {
        button.disabled = false;
        button.innerHTML = button.dataset.originalText || 'Submit';
        return button;
    }
};

// API Client
const API = {
    /**
     * Make API request
     */
    request: async (method, endpoint, data = null) => {
        const options = {
            method: method,
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            }
        };

        if (data && (method === 'POST' || method === 'PUT')) {
            options.body = JSON.stringify(data);
        }

        try {
            const response = await fetch(endpoint, options);
            const result = await response.json();

            if (!response.ok) {
                throw new Error(result.message || 'API request failed');
            }

            return result;
        } catch (error) {
            console.error('API Error:', error);
            throw error;
        }
    },

    /**
     * Check eligibility
     */
    checkEligibility: async (data) => {
        return API.request('POST', '/check-eligibility', data);
    },

    /**
     * Apply for loan
     */
    applyLoan: async (data) => {
        return API.request('POST', '/apply-loan', data);
    },

    /**
     * Query transaction
     */
    queryTransaction: async (transactionId) => {
        return API.request('GET', `/query/${transactionId}`);
    }
};

// Form Validation
const FormValidator = {
    /**
     * Validate form input
     */
    validateInput: (input) => {
        const value = input.value.trim();
        const type = input.name;

        if (!value) {
            return { valid: false, message: 'This field is required' };
        }

        switch (type) {
            case 'phone_number':
                if (!Utils.validatePhone(value)) {
                    return { valid: false, message: 'Please enter a valid phone number' };
                }
                break;

            case 'id_number':
                if (value.length < 5) {
                    return { valid: false, message: 'ID number must be at least 5 digits' };
                }
                break;

            case 'email':
                if (!Utils.validateEmail(value)) {
                    return { valid: false, message: 'Please enter a valid email address' };
                }
                break;
        }

        return { valid: true, message: '' };
    },

    /**
     * Mark input as error
     */
    markError: (input, message) => {
        input.classList.add('is-invalid');
        const feedback = input.parentElement.querySelector('.invalid-feedback');
        if (feedback) {
            feedback.textContent = message;
        }
    },

    /**
     * Mark input as valid
     */
    markValid: (input) => {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    },

    /**
     * Clear validation
     */
    clearValidation: (input) => {
        input.classList.remove('is-invalid', 'is-valid');
    }
};

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', function() {
    // Enable Bootstrap form validation
    const forms = document.querySelectorAll('.needs-validation');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });

    // Real-time form validation
    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            const validation = FormValidator.validateInput(this);
            if (!validation.valid) {
                FormValidator.markError(this, validation.message);
            } else {
                FormValidator.markValid(this);
            }
        });

        input.addEventListener('focus', function() {
            FormValidator.clearValidation(this);
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    console.log('MkopoSafi App Initialized - Version 2.0.0');
});

// Export for use in other modules
window.AppUtils = Utils;
window.AppAPI = API;
window.AppValidator = FormValidator;
