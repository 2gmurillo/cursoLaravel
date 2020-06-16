const file__input = document.getElementById("file__input");
const file__text = document.getElementById("file__text");
const file__button = document.getElementById("file__button");

file__button.addEventListener("click", function() {
    file__input.click();
});

file__input.addEventListener("change", function() {
    if (file__input.value) {
        file__text.innerHTML = file__input.value.match(
            /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
    } else {
        file__text.innerHTML = file__text.value;
    }
});
