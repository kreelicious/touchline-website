(function () {
  function initForm(wrapper) {
    const form = wrapper.querySelector('form');
    if (!form) {
      return;
    }

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      const variant = wrapper.getAttribute('data-variant') || 'demo';
      const detail = {
        variant: variant,
        timestamp: Date.now()
      };
      form.dispatchEvent(new CustomEvent('touchline:formSubmit', { detail: detail, bubbles: true }));
      const note = wrapper.querySelector('.touchline-form__note');
      if (note) {
        note.textContent = 'Submission captured locally. TODO: connect to your handler.';
      }
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.touchline-form').forEach(initForm);
  });
})();
