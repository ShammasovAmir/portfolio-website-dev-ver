export async function sendForm(e)
{
    let formData = new FormData(form);

    form.classList.add('_sending');
    let response = await fetch ('sendmail.php', {
        method: 'POST',
        body: formData
    });
    if (response.ok) {
        let result = await response.text();
        form.reset();
    } else {
        alert('Error');
    }
}