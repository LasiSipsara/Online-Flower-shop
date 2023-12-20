document.addEventListener('DOMContentLoaded', function () {
    const headerUserLink = document.getElementById('header-user-link');
    const userMenu = document.getElementById('userMenu');
    const loginBtn = document.getElementById('loginBtn');
    const logoutBtn = document.getElementById('logoutBtn');

    headerUserLink.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation();

        if (userMenu.style.display === 'block') {
            userMenu.style.display = 'none';
        } else {
            userMenu.style.display = 'block';
        }
    });

    loginBtn.addEventListener('click', function () {
        // alert('Login clicked');
        userMenu.style.display = 'none';
    });

    logoutBtn.addEventListener('click', function () {
        alert('Logout clicked');
        userMenu.style.display = 'none';
    });

    document.addEventListener('click', function () {
        userMenu.style.display = 'none';
    });

    userMenu.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});
