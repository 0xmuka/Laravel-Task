@include('auth.layouts.header')


  <body>
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Login -->
          <div class="card px-sm-6 px-0">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{ url('/login') }}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <!-- SVG Logo -->
                  </span>
                  <span class="app-brand-text demo text-heading fw-bold">sneat</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1">Welcome back! 👋</h4>
              <p class="mb-6">Please sign in to your account</p>

              <!-- Login Form -->
              <form id="formAuthentication" class="mb-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-6">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                    autofocus />
                </div>
                <div class="mb-6 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      required />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-6">
                  <div class="d-flex justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                      <label class="form-check-label" for="remember-me"> Remember Me </label>
                    </div>
                    <a href="{{ route('password.request') }}">
                      <span>Forgot Password?</span>
                    </a>
                  </div>
                </div>
                <div class="mb-6">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('register') }}">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Login -->
        </div>
      </div>
    </div>
    <!-- / Content -->


    @include('auth.layouts.footer')
