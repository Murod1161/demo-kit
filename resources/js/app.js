import "./bootstrap";

import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import { enableFeedbackInputValidation } from "./functions";
import { gsap } from "gsap";

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper--projects", {
        slidesPerView: "auto",
        slidesOffsetAfter: 24,
        spaceBetween: 8,
        breakpoints: {
            768: {
                spaceBetween: 18,
                slidesOffsetAfter: 300,
            },
            1024: {
                spaceBetween: 18,
                slidesOffsetAfter: 500,
            },
            1440: {
                spaceBetween: 18,
                slidesOffsetAfter: 585,
            },
            1900: {
                spaceBetween: 18,
                slidesOffsetAfter: 685,
            },
        },
        navigation: {
            prevEl: ".btn-prev--projects",
            nextEl: ".btn-next--projects",
        },
    });

    new Swiper(".swiper--testimonials", {
        slidesPerView: "auto",
        slidesOffsetAfter: 0,
        spaceBetween: 40,
        breakpoints: {
            768: {
                slidesOffsetAfter: 200,
            },
            1024: {
                slidesOffsetAfter: 460,
            },
            1280: {
                spaceBetween: 82,
                slidesOffsetAfter: 635,
            },
            1920: {
                spaceBetween: 82,
                slidesOffsetAfter: 740,
            },
        },
        navigation: {
            prevEl: ".btn-prev--testimonials",
            nextEl: ".btn-next--testimonials",
        },
    });

    new Swiper(".swiper--main-vacancies", {
        slidesPerView: "auto",
        loop: true,
        spaceBetween: 8,
        centeredSlides: true,
        navigation: {
            prevEl: ".btn-prev--main-vacancies",
            nextEl: ".btn-next--main-vacancies",
        },
    });
});

const select = document.getElementById("themeSelect");
const arrow = document.getElementById("selectArrow");
const label = document.getElementById("themeLabel");

function updateLabel() {
    const hasValue = select.value !== "";

    if (hasValue) {
        label.classList.add("-top-2", "text-sm");
        label.classList.remove("top-3");
    }
}

// Вращение стрелки
let isOpen = false;
select.addEventListener("mousedown", () => {
    if (isOpen) {
        arrow.classList.remove("rotate-180");
        isOpen = false;
    } else {
        setTimeout(() => {
            arrow.classList.add("rotate-180");
            isOpen = true;
        }, 0);
    }
});

select.addEventListener("blur", () => {
    arrow.classList.remove("rotate-180");
    isOpen = false;
    updateLabel();
});

select.addEventListener("change", updateLabel);

// При загрузке
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", updateLabel);
} else {
    updateLabel();
}

const allowedTypes = [
    "application/pdf",
    "application/msword",
    "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
    "image/jpeg",
    "image/png",
];

const fileInput = document.querySelector('.feedback input[name="attachment"]');
const fileName = document.querySelector("#file-name");
const fileError = document.querySelector("#file-error");

fileInput.addEventListener("change", () => {
    const file = fileInput.files[0];

    if (file) {
        const sizeInMB = file.size / (1024 * 1024);
        const isAllowedType = allowedTypes.includes(file.type);

        if (!isAllowedType) {
            fileName.classList.add("hidden");
            fileError.textContent = "Недопустимый формат файла.";
            fileError.classList.remove("hidden");
            fileInput.value = "";
            return;
        }

        if (sizeInMB > 5) {
            fileName.classList.add("hidden");
            fileError.textContent = "Файл слишком большой. Максимум — 5 МБ.";
            fileError.classList.remove("hidden");
            fileInput.value = "";
            return;
        }

        fileName.textContent = `Выбран: ${file.name}`;
        fileName.classList.remove("hidden");
        fileError.classList.add("hidden");
    } else {
        fileName.classList.add("hidden");
        fileError.classList.add("hidden");
    }
});

document
    .querySelectorAll(
        '.feedback input[name="name"], .feedback input[name="phone"]',
    )
    .forEach((input) => {
        input.addEventListener("input", () => {
            enableFeedbackInputValidation(input);
        });
    });

document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById("site-header");
    const logo = header.querySelector("a");
    const div = header.querySelector("div");
    const span = document.querySelectorAll(".toggler-icons span");
    const nav = document.querySelector("nav");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 1) {
            header.classList.add("bg-white", "shadow-md", "scrolled");
            logo.classList.remove("bg-[url('/public/images/logo-light.png')]");
            logo.classList.add("bg-[url('/public/images/logo.png')]");
            div.classList.add("xl:px-7");
            div.classList.remove("md:py-7");
            nav.classList.add("md:top-20");
            nav.classList.remove("md:top-22");
            span.forEach((icon) => {
                icon.classList.remove("bg-primary");
            });
            span.forEach((icon) => {
                icon.classList.add("bg-secondary");
            });
        } else {
            header.classList.remove("bg-white", "shadow-md", "scrolled");
            logo.classList.add("bg-[url('/public/images/logo-light.png')]");
            logo.classList.remove("bg-[url('/public/images/logo.png')]");
            div.classList.add("md:py-7");
            nav.classList.remove("md:top-20");
            nav.classList.add("md:top-22");
            span.forEach((icon) => {
                icon.classList.remove("bg-secondary");
            });
            span.forEach((icon) => {
                icon.classList.add("bg-primary");
            });
        }
    });
});

document.querySelectorAll('[data-click-action="show-modal"]').forEach((btn) => {
    btn.addEventListener("click", showModal);
});

document.querySelectorAll('[data-click-action="hide-modal"]').forEach((btn) => {
    btn.addEventListener("click", hideModal);
});

function showModal() {
    document.querySelector(".feedback-modal").classList.remove("hidden");

    const feedbackForm = document.querySelector(".feedback");
    const modalFormContainer = document.querySelector(
        ".feedback-modal__form-container",
    );

    feedbackForm.classList.remove("text-white");
    feedbackForm.classList.add("text-secondary");

    modalFormContainer.appendChild(feedbackForm);
}

function hideModal() {
    document.querySelector(".feedback-modal").classList.add("hidden");

    const feedbackForm = document.querySelector(".feedback");
    const originalContainer = document.querySelector(
        ".feedback-original-container",
    );

    feedbackForm.classList.remove("text-secondary");
    feedbackForm.classList.add("text-white");

    originalContainer.appendChild(feedbackForm);
}

document.addEventListener("click", (evt) => {
    const header = evt.target.closest(".accordion__header");

    if (header) {
        const currentItem = header.parentElement;
        const accordion = currentItem.closest(".accordion");
        const content = currentItem.querySelector(".accordion__content");
        const icon = header.querySelector("svg");
        const isShown = currentItem.classList.contains(
            "accordion__item--shown",
        );

        // Закрываем все, кроме текущего
        accordion.querySelectorAll(".accordion__item").forEach((item) => {
            if (item !== currentItem) {
                item.classList.remove("accordion__item--shown");
                item.querySelector(".accordion__content").style.maxHeight =
                    null;
                const svg = item.querySelector("svg");
                svg?.classList.remove("rotate-180");
            }
        });

        // Тогглим текущий
        currentItem.classList.toggle("accordion__item--shown");

        if (!isShown) {
            content.style.maxHeight = content.scrollHeight + "px";
            icon.classList.add("rotate-180");
        } else {
            content.style.maxHeight = null;
            icon.classList.remove("rotate-180");
        }
    }

    // Клик вне аккордеона — закрываем всё
    if (!evt.target.closest(".accordion")) {
        document.querySelectorAll(".accordion__item--shown").forEach((item) => {
            item.classList.remove("accordion__item--shown");
            item.querySelector(".accordion__content").style.maxHeight = null;
            const svg = item.querySelector("svg");
            svg?.classList.remove("rotate-180");
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("open-dc-subview");
    const subview = document.getElementById("subview-dc-services");
    const backBtn = document.getElementById("subview-back");

    if (openBtn && subview && backBtn) {
        openBtn.addEventListener("click", () => {
            subview.classList.remove("hidden");
            requestAnimationFrame(() => {
                subview.classList.remove("translate-x-full");
            });
        });

        backBtn.addEventListener("click", () => {
            subview.classList.add("translate-x-full");
            setTimeout(() => {
                subview.classList.add("hidden");
            }, 300);
        });
    }
});
