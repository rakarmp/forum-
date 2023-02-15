require("./bootstrap");

// require("alpinejs");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import Choices from "choices.js";

// buat multiselect element menggunakan choices.js

window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 3,
        removeItemButton: true,
    });
};
