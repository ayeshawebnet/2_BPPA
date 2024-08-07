
<div class="form_container ">
      <svg class="form_close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path fill="currentColor" d="m6.4 18.308l-.708-.708l5.6-5.6l-5.6-5.6l.708-.708l5.6 5.6l5.6-5.6l.708.708l-5.6 5.6l5.6 5.6l-.708.708l-5.6-5.6z" />
      </svg>
      <!-- <i class="uil uil-times form_close"></i> -->
      <!-- Login From -->
      <div class="form login_form">
        <form action="#">
          <h2>Login</h2>

          <div class="input_box">
            <input type="email" id="login-email" value="" placeholder="Enter your email" required />
            <svg class="email" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
            </svg>
          </div>
          <div class="input_box">
            <input id="login-password" value="" placeholder="Enter your password" required />
            <svg class="password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm0-2h12V10H6zm6-3q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6zM6 20V10z" />
            </svg>
            <!-- <i class="uil uil-lock password"></i>
                      <i class="uil uil-eye-slash pw_hide"></i> -->
          </div>

          <div class="option_field">
            <!-- <span class="checkbox">
                        <input type="checkbox" id="check" />
                        <label for="check">Remember me</label>
                      </span> -->
            <a href="#" class="forgot_pw">Forgot password?</a>
          </div>

          <button class="auth-button" id="loginBtn">Login Now</button>

          <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
        </form>
      </div>

      <!-- Signup From -->
      <div class="form signup_form">
        <form action="#">
          <h2>Signup</h2>

          <div class="input_box">
            <input type="email" id="signup-email" value="" placeholder="Enter your email" required />
            <svg class="email" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z" />
            </svg>
          </div>
          <div class="input_box">
            <input id="signup-password" value="" placeholder="Create password" required />
            <svg class="password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm0-2h12V10H6zm6-3q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6zM6 20V10z" />
            </svg>
            <!-- <i class="uil uil-lock password"></i>
                      <i class="uil uil-eye-slash pw_hide"></i> -->
          </div>
          <!-- <div class="input_box">
                      <input  placeholder="Confirm password" required />
                      <svg class="password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.412-.587T4 20V10q0-.825.588-1.412T6 8h1V6q0-2.075 1.463-3.537T12 1t3.538 1.463T17 6v2h1q.825 0 1.413.588T20 10v10q0 .825-.587 1.413T18 22zm0-2h12V10H6zm6-3q.825 0 1.413-.587T14 15t-.587-1.412T12 13t-1.412.588T10 15t.588 1.413T12 17M9 8h6V6q0-1.25-.875-2.125T12 3t-2.125.875T9 6zM6 20V10z"/></svg> -->
          <!-- <i class="uil uil-lock password"></i>
                      <i class="uil uil-eye-slash pw_hide"></i> -->
          <!-- </div> -->

          <button class="auth-button" id="signupBtn">Signup Now</button>

          <div class="login_signup">Already have an account? <a href="#" id="login">Login</a></div>
        </form>
      </div>
    </div>