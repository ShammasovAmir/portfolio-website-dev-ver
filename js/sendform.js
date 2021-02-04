export const sendForm = async () => 
{
    const formData = new FormData(this);
    const searchParams = new URLSearchParams();

    fetch('sendmail.php',
        {
            method: 'POST',
            body:   searchParams
        }
    ).then((response) => 
        {
            return response.text();
        }
    ).then((text) => 
        {
            if (text === "Success")
            {
                if (document.documentElement.lang === 'en-US')
                {
                    alert('Email has been sent successfully.');
                }
                else if (document.documentElement.lang === 'ru')
                {
                    alert('Письмо было отправлено успешно.');
                }
            }
            else if (text === "Error")
            {
                if (document.documentElement.lang === 'en-US')
                {
                    alert('Email was not sent... Please retry later');
                }
                else if (document.documentElement.lang === 'ru')
                {
                    alert('Письмо не было отправлено... Повторите попытку позже');
                }
            }
        }
    ).catch((error) =>
        {
            alert(error);
        }
    );
}