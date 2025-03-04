let isFormDirty = false;

function openAddPaymentsForm() {
    const modal = document.getElementById('addPaymentModal');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('visible', 'opacity-100');
    isFormDirty = false;

    document.querySelectorAll('#addPaymentModal input, #addPaymentModal textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddPaymentsForm() {
    const modal = document.getElementById('addPaymentModal');
    const backdrop = document.getElementById('backdrop');
    backdrop.classList.add('opacity-0', 'invisible');
    modal.classList.add('translate-x-full', 'opacity-0', 'invisible');
    backdrop.classList.remove('visible', 'opacity-100');
    backdrop.classList.add('invisible', 'opacity-0');
    setTimeout(() => {
        modal.classList.add('invisible');
        backdrop.classList.add('invisible');
    }, 500);
    isFormDirty = false;
    window.removeEventListener('beforeunload', confirmExit);
}

function markFormDirty() {
    isFormDirty = true;
}

function confirmExit(e) {
    if (isFormDirty) {
        e.preventDefault();
        e.returnValue = '';
    }
}