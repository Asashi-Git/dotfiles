function selectPaymentMethod(selectedDivId) {
    // Remove 'checked' class from all
    document.querySelectorAll('.payment-div').forEach(div => {
        div.children[0].classList.remove('checked');
    });

    // Add 'checked' class to the selected one
    const selectedDiv = document.getElementById(selectedDivId);
    selectedDiv.children[0].classList.add('checked');
}

function togglePaymentOption(element) {
    const details = element.nextElementSibling;
    const radio = element.querySelector('.radio-button');

    // Toggle radio button
    if (radio.classList.contains('checked')) {
        radio.classList.remove('checked');
        if (details) {
            details.style.display = 'none';
        }
    } else {
        // Deselect all other options
        document.querySelectorAll('.payment-div .radio-button').forEach(rb => {
            rb.classList.remove('checked');
        });
        document.querySelectorAll('.credit-card-details').forEach(div => {
            div.style.display = 'none';
        });

        radio.classList.add('checked');
        if (details) {
            details.style.display = 'block';
        }
    }
}