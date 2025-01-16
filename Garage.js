const form = document.getElementById('contact-form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const url = 'sendmail.php';

  fetch(url, {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => console.log(data))
  .catch(error => console.error(error));
});