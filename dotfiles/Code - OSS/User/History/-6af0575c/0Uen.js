function selectPaymentMethod(selectedDivId) {
    // Remove 'checked' class from all
    document.querySelectorAll('.payment-div').forEach(div => {
        div.children[0].classList.remove('checked');
    });

    // Add 'checked' class to the selected one
    const selectedDiv = document.getElementById(selectedDivId);
    selectedDiv.children[0].classList.add('checked');
}

// ---L'accordéon 02---

let sections = document.querySelectorAll(".section-2");

sections.forEach(section => {
    section.addEventListener("click", function() {
        sections.forEach(otherSection => {
            if (otherSection !== this) {
                otherSection.classList.remove("active");
                let otherContent = otherSection.nextElementSibling;
                otherContent.style.maxHeight = null; // Ferme les autres sections
            }
        });
    this.classList.toggle("active");
    let content = this.nextElementSibling;
if (content.style.maxHeight) {
    content.style.maxHeight = null;
} else {
    content.style.maxHeight = content.scrollHeight + "px";
    }
});
});