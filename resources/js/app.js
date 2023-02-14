require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import Choices from "choices.js";

window.choices(document.getElementById("tags"));

// Create multiselect element
window.choices = (element) => {
    return new Choices(element, {
        maxItemCount: 3,
        removeItemButton: true,
    });
};
