function checkRadioButton() {
    var radioButton = document.querySelector('input[name="radio-200"]');
    var textInput = document.querySelector('input[name="text-571"]');

    function updateVisibility() {
        if (radioButton.checked) {
            textInput.classList.remove('hidden');
        } else {
            textInput.classList.add('hidden');
        }
    }

    document.addEventListener('change', function(event) {
        if (event.target.name === 'radio-200') {
            updateVisibility();
        }
    });

    updateVisibility();
}

window.onload = checkRadioButton;