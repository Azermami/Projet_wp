document.addEventListener('DOMContentLoaded', function() {
    const menuLink = document.querySelectorAll('.custom-menu-link');
    const containerUnfold = document.querySelector('.container-unfold');
    const foldMenu = document.querySelector('.fold');
    
    menuLink.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            containerUnfold.classList.toggle('hidden');
            foldMenu.classList.toggle('active');
        });
    });

    
    
});

