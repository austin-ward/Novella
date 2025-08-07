
document.getElementById('signup-form').addEventListener('submit', async function (e) {
  e.preventDefault();

  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const message = document.getElementById('message');

  try {
    const res = await fetch('/.netlify/functions/createUser', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ email, password })
    });

    const data = await res.json();

    if (res.status === 200) {
      message.textContent = 'Signup successful! Redirecting to login...';
      message.style.color = 'green';

      setTimeout(() => {
        window.location.href = '/login.html';
      }, 1500);
    } else {
      message.textContent = data.error || 'Signup failed';
      message.style.color = 'red';
    }
  } catch (err) {
    message.textContent = 'Error creating account';
    message.style.color = 'red';
    console.error(err);
  }
});
