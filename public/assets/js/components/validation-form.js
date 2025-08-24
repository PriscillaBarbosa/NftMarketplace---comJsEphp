// ========================================
// VALIDATION FORM - VERSÃO CORRIGIDA
// ========================================

(function() {
    'use strict';

    // Aguarda o DOM estar pronto
    document.addEventListener('DOMContentLoaded', function() {
        initFormValidation();
    });

    function initFormValidation() {
        const cpfField = document.getElementById('cpf');
        
        // ✅ VERIFICAR SE ELEMENTO EXISTS
        if (!cpfField) {
            console.log('⚠️ Campo CPF não encontrado - validation-form.js não será executado');
            return; // Sai do script sem erro
        }

        console.log('✅ Campo CPF encontrado - inicializando validação');

        // Formatação automática
        cpfField.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, ''); // Remove os não dígitos

            // APLICAR MÁSCARA PROGRESSIVAMENTE
            if (value.length > 0) {
                if (value.length <= 3) {
                    value = value; // 123
                } else if (value.length <= 6) {
                    value = value.replace(/(\d{3})(\d+)/, '$1.$2'); // 123.456
                } else if (value.length <= 9) {
                    value = value.replace(/(\d{3})(\d{3})(\d+)/, '$1.$2.$3'); // 123.456.789
                } else {
                    value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4'); // 123.456.789-01
                }
            }
            
            e.target.value = value;
        });

        // Feedback visual para CPF
        cpfField.addEventListener('blur', function() {
            const cpf = this.value;
            const isValid = validarCPF(cpf);
            
            this.classList.remove('is-valid', 'is-invalid');

            if (cpf && cpf.length > 0) {
                if (isValid) {
                    this.classList.add('is-valid');
                } else {
                    this.classList.add('is-invalid');
                }
            }
        });

        console.log('✅ Validação de CPF inicializada com sucesso!');

        // Teste automático
        setTimeout(() => {
            console.log('\n🧪 TESTE AUTOMÁTICO:');
            console.log('CPF válido (111.444.777-35):', validarCPF('111.444.777-35'));
            console.log('CPF inválido (123.456.789-00):', validarCPF('123.456.789-00'));
        }, 1000);
    }

    // Validação básica de CPF em tempo real
    function validarCPF(cpf) {
        cpf = cpf.replace(/[^\d]/g, '');

        if (cpf.length !== 11) return false;
        if (/^(\d)\1{10}$/.test(cpf)) return false;

        // Mesmo algoritmo da validação php no backend
        let soma = 0;
        for (let i = 0; i < 9; i++) {
            soma += parseInt(cpf[i]) * (10 - i); 
        }
        let resto = soma % 11;
        let digito1 = resto < 2 ? 0 : 11 - resto; 
        
        if (parseInt(cpf[9]) !== digito1) return false;
        
        soma = 0;
        for (let i = 0; i < 10; i++) {
            soma += parseInt(cpf[i]) * (11 - i);
        }
        resto = soma % 11;
        let digito2 = resto < 2 ? 0 : 11 - resto;
        
        return parseInt(cpf[10]) === digito2;
    }

})();