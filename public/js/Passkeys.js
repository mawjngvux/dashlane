let isFormDirty = false;

function openAddPasskeyForm() {
    const modal = document.getElementById('addPasskeyModal');
    const backdrop = document.getElementById('backdrop');

    modal.classList.remove('invisible', 'translate-x-full', 'opacity-0');
    modal.classList.add('opacity-100');

    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('opacity-100');

    isFormDirty = false;

    document.querySelectorAll('#addPasskeyModal input, #addPasskeyModal textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function markFormDirty() {
    isFormDirty = true;
}

function forceCloseAddPasskeyForm() {
    const modal = document.getElementById('addPasskeyModal');
    const backdrop = document.getElementById('backdrop');

    modal.classList.add('translate-x-full', 'opacity-0');
    backdrop.classList.add('opacity-0');

    setTimeout(() => {
        modal.classList.add('invisible');
        backdrop.classList.add('invisible');
    }, 500);

    isFormDirty = false;
    window.removeEventListener('beforeunload', confirmExit);
}

function closeAddPasskeyForm() {
    if (isFormDirty) {
        if (confirm('You have unsaved changes. Are you sure you want to leave?')) {
            forceCloseAddPasskeyForm();
        }
    } else {
        forceCloseAddPasskeyForm();
    }
}

    function markFormDirty() {
    isFormDirty = true;
    }
function confirmExit(e) {
    if (!isFormDirty) return;

    e.preventDefault();
    e.returnValue = '';
}