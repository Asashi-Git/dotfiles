function selectPaymentMethod(selectedDivId) {
    // Remove 'checked' class from all
    document.querySelectorAll('.payment-div').forEach(div => {
        div.children[0].classList.remove('checked');
    });

    // Add 'checked' class to the selected one
    const selectedDiv = document.getElementById(selectedDivId);
    selectedDiv.children[0].classList.add('checked');
}




function togglePaymentMethod(selectedDivId) {
    let allDivs = document.querySelectorAll('.payment-div');
    let allDetails = document.querySelectorAll('.payment-details');

    allDivs.forEach(div => {
        if (div.id === selectedDivId) {
            div.children[0].classList.toggle('checked');
            let details = document.getElementById('details' + selectedDivId);
            if (details.style.display === "none" || details.style.display === "") {
                details.style.display = "block";
            } else {
                details.style.display = "none";
            }
        } else {
            div.children[0].classList.remove('checked');
            document.getElementById('details' + div.id).style.display = "none";
        }
    });
}
