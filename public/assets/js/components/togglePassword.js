export default function initTogglePassword() {
   
    const toggleIcon = document.querySelector('.componente-login-direita');
    const passwordInput = document.getElementById('senha');

    if (toggleIcon && passwordInput) {
        
        toggleIcon.addEventListener('click', function() {
            const currentType = passwordInput.getAttribute('type');
            const newType = currentType === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', newType);

            if (newType === 'text') {
                this.src = '/assets/img/icones/componente-olhoFechado.svg'; 
            } else {
                this.src = '/assets/img/icones/componente-olho.svg';
            }
        });
    }
}