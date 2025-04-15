function togglePaymentMethod(selectedDivId) {
    // Get the selected div
    const selectedDiv = document.getElementById(selectedDivId);

    // Toggle 'checked' class on the first child of the selected div
    selectedDiv.children[0].classList.toggle('checked');
}
function togglePaymentMethod(selectedDivId) {
    const selectedDiv = document.getElementById(selectedDivId);
    const isSelected = selectedDiv.children[0].classList.contains('checked');

    // Remove 'checked' class from all
    document.querySelectorAll('.payment-div').forEach(div => {
        div.children[0].classList.remove('checked');
    });

    // Add 'checked' class to the selected one only if it wasn't selected before
    if (!isSelected) {
        selectedDiv.children[0].classList.add('checked');
    }
}
