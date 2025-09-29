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
            const passwordInput = passwordContainer.querySelector("input");
            const eyeShow = passwordContainer.querySelector("#eyeShow");
            const eyeOff = passwordContainer.querySelector("#eyeOff");

            eyeOff.addEventListener("mousedown", function (e) {
                e.preventDefault();
                eyeOff.hidden = true;
                eyeShow.hidden = false;
                passwordInput.type = "text";
                passwordInput.focus();
            });

            eyeShow.addEventListener("mousedown", function (e) {
                e.preventDefault();
                eyeShow.hidden = true;
                eyeOff.hidden = false;
                passwordInput.type = "password";
                passwordInput.focus();
            });
        }
    };
    inputFocus();
}, 1000);

const rememberLabel = document.getElementById("rememberLabel");
const checkRemember = document.getElementById("remember");

rememberLabel.addEventListener("click", function () {
    checkRemember.checked = !checkRemember.checked;
});
