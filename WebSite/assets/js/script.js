function resetPage() {
    document.addEventListener('click', () => {
        location.reload()
    })
}

// Mostrar somente os tamanho dos pordutos que foram registrados
document.addEventListener("DOMContentLoaded", function () {

    var selectedProductId = 1; 

    var sizeInputs = document.querySelectorAll(".size-input");

    sizeInputs.forEach(function (input) {

        if (input.dataset.available === "false") {
            input.disabled = true;

            var label = document.querySelector("label[for='" + input.id + "']");
            if (label) {
                label.classList.add("not-available");
                label.textContent += " X";
            }
        }
    });
});
