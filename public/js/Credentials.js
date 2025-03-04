let isFormDirty = false;

function showAddLoginForm() {
    document.getElementById('addLoginModal').classList.remove('invisible', 'translate-x-full', 'opacity-0');
    document.getElementById('backdrop').classList.remove('invisible', 'opacity-0');

    isFormDirty = false;

    document.querySelectorAll('#addLoginModal input, #addLoginModal textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty); 
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', handleBeforeUnload);
}

function markFormDirty() {
    isFormDirty = true;
}

function forceCloseAddLoginForm() {
    document.getElementById('addLoginModal').classList.add('translate-x-full', 'opacity-0');
    document.getElementById('backdrop').classList.add('opacity-0');
    setTimeout(() => {
        document.getElementById('addLoginModal').classList.add('invisible');
        document.getElementById('backdrop').classList.add('invisible');
    }, 500);
    hideDiscardConfirm();

    isFormDirty = false;

    window.removeEventListener('beforeunload', handleBeforeUnload);

    document.querySelectorAll('#addLoginModal input, #addLoginModal textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
    });
    }

    function handleBeforeUnload(event) {
    if (isFormDirty) {
        event.preventDefault();
        event.returnValue = '';
    }
}

function hideDiscardConfirm() {
    document.getElementById('discardConfirm').classList.add('hidden');
}

window.removeEventListener('beforeunload', handleBeforeUnload);