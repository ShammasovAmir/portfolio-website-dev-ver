document.querySelectorAll('#nav-link').forEach(navLink => 
    {
        navLink.addEventListener("click", closeFunc);
    }
);

function closeFunc() 
{
    document.getElementById('nav-toggle').checked = false;
}