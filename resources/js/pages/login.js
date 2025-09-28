setTimeout(() => {
    let inputFocus = () => {
        const emailContainer = document
            .querySelector('input[type="email"]')
            ?.closest(".relative");
        const passwordContainer = document
            .querySelector('input[type="password"]')
            ?.closest(".relative");

        if (emailContainer) {
            const emailSpan = emailContainer.querySelector("span");
            const emailInput = emailContainer.querySelector("input");

            if (emailSpan && emailInput) {
                emailSpan.addEventListener("click", function () {
                    emailInput.focus();
                });
            }
        }

        if (passwordContainer) {
            const passwordSpan = passwordContainer.querySelector("span");
            const passwordInput = passwordContainer.querySelector("input");

            if (passwordSpan && passwordInput) {
                passwordSpan.addEventListener("click", function () {
                    passwordInput.focus();
                });
            }
        }
    };
    inputFocus();
}, 1000);
