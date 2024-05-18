document.addEventListener('DOMContentLoaded', function() {
    var fullHeight = function() {
        document.querySelectorAll('.js-fullheight').forEach(function(item) {
            item.style.height = window.innerHeight + 'px';
        });
    };

    fullHeight();

    window.addEventListener('resize', function() {
        fullHeight();
    });

    document.getElementById('sidebarCollapse').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('active');
    });
});

function logout(event) {
    event.preventDefault();
    document.getElementById('logout-form').submit();
}
