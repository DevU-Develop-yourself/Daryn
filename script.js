document.addEventListener("DOMContentLoaded", function () {
    // Пример для анимации гамбургера
    const hamburger = document.getElementById("hamburger");
    const menu = document.getElementById("menu");

    hamburger.addEventListener("click", function () {
        menu.classList.toggle("active");
        hamburger.classList.toggle("active");
    });

    // Пример проверки на заполнение формы
    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", function (event) {
            const inputs = form.querySelectorAll("input");
            let valid = true;

            inputs.forEach(input => {
                if (!input.value) {
                    valid = false;
                    input.classList.add("error");
                } else {
                    input.classList.remove("error");
                }
            });

            if (!valid) {
                event.preventDefault();
                alert("Пожалуйста, заполните все поля!");
            }
        });
    });
});
