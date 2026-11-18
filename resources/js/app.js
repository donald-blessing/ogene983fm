import './bootstrap';

/**
 * Move focus to the first invalid field after a server-side validation
 * round-trip, so keyboard and screen-reader users are not left at the top.
 */
const focusFirstInvalidField = () => {
    const field = document.querySelector('[aria-invalid="true"]');

    if (field instanceof HTMLElement) {
        field.focus();
    }
};

document.addEventListener('DOMContentLoaded', focusFirstInvalidField);
document.addEventListener('livewire:navigated', focusFirstInvalidField);
