let isFormDirty = false;

function openAddNotesForm() {
    const modal = document.getElementById('addNoteModal');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('opacity-0', 'invisible');
    backdrop.classList.add('opacity-100', 'visible');

    isFormDirty = false;

    document.querySelectorAll('#addNoteModal input, #addNoteModal textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddNoteForm() {
    const modal = document.getElementById('addNoteModal');
    const backdrop = document.getElementById('backdrop');
    backdrop.classList.add('opacity-0', 'invisible');
    modal.classList.add('translate-x-full', 'opacity-0', 'invisible');
    backdrop.classList.remove('opacity-100', 'visible');
    backdrop.classList.add('opacity-0', 'invisible');
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