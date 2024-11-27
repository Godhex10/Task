document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("addTransactionModal");
    const openModalButton = document.getElementById("openModalButton");
    const closeModalButtons = [
        document.getElementById("closeModalButton"),
        document.getElementById("closeModalButtonFooter")
    ];

    // Open Modal
    openModalButton.addEventListener("click", () => {
        modal.style.display = "block";
    });

    // Close Modal
    closeModalButtons.forEach(button =>
        button.addEventListener("click", () => {
            modal.style.display = "none";
        })
    );

    // Form Submission
    const form = document.getElementById("addTransactionForm");
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        // Collect form data
        const formData = new FormData(form);

        try {
            const response = await fetch("add_transaction.php", {
                method: "POST",
                body: formData
            });

            const result = await response.json();

            if (!result.error) {
                alert(result.message); // Success message
                modal.style.display = "none"; // Close modal
                form.reset(); // Reset form fields
                location.reload(); 
            } else {
                alert(result.message); // Error message
            }
        } catch (error) {
            console.error("Error submitting the form:", error);
            alert("An error occurred while submitting the form.");
        }
    });
});
