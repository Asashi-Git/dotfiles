function togglePaymentMethod(selectedDivId) {
    const selectedDiv = document.getElementById(selectedDivId);
    const allDivs = document.querySelectorAll('.payment-div');

    // Check if the clicked div's first child already has the 'checked' class
    const isAlreadyChecked = selectedDiv.children[0].classList.contains('checked');

    // First, remove 'checked' from all children of all payment divs
    allDivs.forEach(div => {
        div.children[0].classList.remove('checked');
    });

    // Then, add 'checked' only if it was not already checked
    if (!isAlreadyChecked) {
        selectedDiv.children[0].classList.add('checked');
    }
}
