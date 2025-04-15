function selectPaymentMethod(selectedDivId) {
    // Remove 'checked' class from all
    document.querySelectorAll('.payment-div').forEach(div => {
        div.children[0].classList.remove('checked');
    });

    // Add 'checked' class to the selected one
    const selectedDiv = document.getElementById(selectedDivId);
    selectedDiv.children[0].classList.add('checked');
}