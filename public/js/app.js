document.addEventListener('DOMContentLoaded', function () {
    const currentURI = window.location.pathname

    document.querySelectorAll('#app-bar .nav-link').forEach(link => {
        if (link.getAttribute('href') == currentURI) {
            link.classList.add('active')
        }
    })

    const successAlert = document.getElementById('app-success-alert')
    const errorAlert = document.getElementById('app-error-alert')

    if (successAlert) {
        setTimeout(() => {
            successAlert.classList.add('d-none')
        }, 4000)
    }

    if (errorAlert) {
        setTimeout(() => {
            errorAlert.classList.add('d-none')
        }, 4000)
    }


    /***
     * Chambres.INDEX
     */

    if (window.location.pathname == '/chambres') {

    }


});
