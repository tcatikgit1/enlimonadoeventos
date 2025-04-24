  document.addEventListener('DOMContentLoaded', function (e) {
    const form = document.querySelector('form');

    if (!form) return;

    FormValidation.formValidation(form, {
      fields: {
        name: {
          validators: {
            notEmpty: {
              message: 'Por favor, introduce tu nombre completo'
            },
            stringLength: {
              min: 3,
              message: 'Debe tener al menos 3 caracteres'
            }
          }
        },
        email: {
          validators: {
            notEmpty: {
              message: 'El email es obligatorio'
            },
            emailAddress: {
              message: 'Introduce un email válido'
            }
          }
        },
        subject: {
          validators: {
            notEmpty: {
              message: 'Por favor, indica el asunto del mensaje'
            }
          }
        },
        message: {
          validators: {
            notEmpty: {
              message: 'Cuéntanos algo sobre tu proyecto'
            },
            stringLength: {
              min: 10,
              message: 'El mensaje debe tener al menos 10 caracteres'
            }
          }
        },
        phone: {
          validators: {
            regexp: {
              regexp: /^[\d\+\-\s]{7,20}$/,
              message: 'Introduce un número de teléfono válido'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          rowSelector: '.col-md-6, .col-12',
          eleInvalidClass: 'is-invalid',
          eleValidClass: 'is-valid'
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        defaultSubmit: new FormValidation.plugins.DefaultSubmit()
      }
    });
  });
