@include('auth.layouts.header')

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Forgot Password Card -->
        <div class="card px-sm-6 px-0">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-6">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <!-- Add your logo SVG here -->
                </span>
                <span class="app-brand-text demo text-heading fw-bold">Sneat</span>
              </a>
            </div>
            <!-- /Logo -->

            <h4 class="mb-1">Forgot Your Password? 🔒</h4>
            <p class="mb-6">No problem! Enter your email address and we’ll send you a link to reset your password.</p>

            <!-- Session Status -->
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
              @csrf

              <!-- Email Address -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                  value="{{ old('email') }}"
                  required
                  autofocus
                />
                @error('email')
                  <span class="text-danger small">{{ $message }}</span>
                @enderror
              </div>

              <button class="btn btn-primary d-grid w-100">Email Password Reset Link</button>
            </form>

            <p class="text-center mt-3">
              <a href="{{ route('login') }}">
                <span>Back to Login</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Forgot Password Card -->
      </div>
    </div>
  </div>


@include('auth.layouts.footer')
