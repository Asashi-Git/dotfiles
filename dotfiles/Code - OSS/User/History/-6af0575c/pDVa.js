function togglePaymentOption(element) {
    const details = element.nextElementSibling;
    const radio = element.querySelector('.radio-button');

    // Assure that only one option is expanded and its radio button is checked
    document.querySelectorAll('.payment-option .radio-button').forEach(rb => {
        rb.classList.remove('checked');  // Remove 'checked' from all radio buttons
    });
    document.querySelectorAll('.credit-card-details').forEach(div => {
        div.style.display = 'none';  // Hide all details
    });

    // Toggle the clicked element
    if (radio.classList.contains('checked')) {
        radio.classList.remove('checked');
        if (details) {
            details.style.display = 'none';
        }
    } else {
        radio.classList.add('checked');
        if (details) {
            details.style.display = 'block';
        }
    }
}
