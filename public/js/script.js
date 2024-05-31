
document.addEventListener('DOMContentLoaded', (event) => {
    // Select all text input elements
    const operatorInputs = document.querySelectorAll('input[type="button"]');

    // Add focus event listener to each text input
    operatorInputs.forEach(input => {
        input.addEventListener('click', function() {
            // Remove 'selected' class from all inputs
            operatorInputs.forEach(inp => inp.classList.remove('selected'));
            // Set the value of the hidden input to the name of the focused input
            document.getElementById('selectedInput').value = this.name;
            // Add the 'selected' class to the focused input
            this.classList.add('selected');
        });
    });
});