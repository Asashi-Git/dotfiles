function togglePaymentMethod(selectedDivId) {
    // Find the selected div and check if it is already 'checked'
    const selectedDiv = document.getElementById(selectedDivId);
    const isAlreadyChecked = selectedDiv.children[0].classList.contains('checked');

    // Remove 'checked' class from all payment divs
    document.querySelectorAll('.payment-div').forEach(div => {
        div.children[0].classList.remove('checked');
    });

    // Add 'checked' class back only if it was not previously checked
    if (!isAlreadyChecked) {
        selectedDiv.children[0].classList.add('checked');
    }
}
