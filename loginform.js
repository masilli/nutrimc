function showLoginForm() {
    if (document.getElementById('login-user').checked) {
      // display login form 1
      document.getElementById('login-form-user').style.display = 'flex';
      document.getElementById('login-form-visitor').style.display = 'none';
    } else {
      // display login form 2
      document.getElementById('login-form-user').style.display = 'none';
      document.getElementById('login-form-visitor').style.display = 'flex';
    }
  }
  