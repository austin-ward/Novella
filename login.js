document.getElementById('loginForm').addEventListener('submit', async function (e) {
  e.preventDefault();

  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const message = document.getElementById('message');

  try {
    const res = await fetch('/.netlify/functions/loginUser', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ email, password })
    });

    const data = await res.json();

    if (res.status === 200) {
      message.textContent = 'Login successful!';
      message.style.color = 'green';

      localStorage.setItem('token', data.token);

      setTimeout(() => {
        window.location.href = '/index.html'; // or wherever
      }, 1000);
    } else {
      message.textContent = data.error || 'Login failed';
      message.style.color = 'red';
    }
  } catch (err) {
    message.textContent = 'Error logging in';
    message.style.color = 'red';
    console.error(err);
  }
});

document.getElementById('registerButton').addEventListener('click', () => {
  window.location.href = 'signup.html';
});

