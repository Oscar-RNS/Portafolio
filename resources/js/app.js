import "./bootstrap";
import toggle from "./libs/utils";
import.meta.glob(["../images/**"]);

const menuBotton = document.getElementById("toggle");
menuBotton.addEventListener("click", function () {
    toggle();
});
