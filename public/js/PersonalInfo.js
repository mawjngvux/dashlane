let isFormDirty = false;

function openAddEmailForm() {
    const modal = document.getElementById('addPersonalInfoModalEmail');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('visible', 'opacity-100');
    isFormDirty = false;

    document.querySelectorAll('#addPersonalInfoModalEmail input, #addPersonalInfoModalEmail textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddEmailForm() {
    const modal = document.getElementById('addPersonalInfoModalEmail');
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

function openAddNameForm() {
    const modal = document.getElementById('addPersonalInfoModalName');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('visible', 'opacity-100');
    isFormDirty = false;

    document.querySelectorAll('#addPersonalInfoModalName input, #addPersonalInfoModalName textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddNameForm() {
    const modal = document.getElementById('addPersonalInfoModalName');
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

function openAddPhoneNumberForm() {
    const modal = document.getElementById('addPersonalInfoModalPhoneNumber');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('visible', 'opacity-100');
    isFormDirty = false;

    document.querySelectorAll('#addPersonalInfoModalPhoneNumber input, #addPersonalInfoModalPhoneNumber textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddPhoneNumberForm() {
    const modal = document.getElementById('addPersonalInfoModalPhoneNumber');
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

function openAddAddressForm() {
    const modal = document.getElementById('addPersonalInfoModalAddress');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('visible', 'opacity-100');
    isFormDirty = false;

    document.querySelectorAll('#addPersonalInfoModalAddress input, #addPersonalInfoModalAddress textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddAddressForm() {
    const modal = document.getElementById('addPersonalInfoModalAddress');
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

function openAddCompanyForm() {
    const modal = document.getElementById('addPersonalInfoModalCompany');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('visible', 'opacity-100');
    isFormDirty = false;

    document.querySelectorAll('#addPersonalInfoModalCompany input, #addPersonalInfoModalCompany textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddCompanyForm() {
    const modal = document.getElementById('addPersonalInfoModalCompany');
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

function openAddWebsiteForm() {
    const modal = document.getElementById('addPersonalInfoModalWebsite');
    const backdrop = document.getElementById('backdrop');
    modal.classList.remove('translate-x-full', 'opacity-0', 'invisible');
    modal.classList.add('translate-x-0', 'opacity-100', 'visible');
    backdrop.classList.remove('invisible', 'opacity-0');
    backdrop.classList.add('visible', 'opacity-100');
    isFormDirty = false;

    document.querySelectorAll('#addPersonalInfoModalWebsite input, #addPersonalInfoModalWebsite textarea').forEach(input => {
        input.removeEventListener('input', markFormDirty);
        input.addEventListener('input', markFormDirty);
    });

    window.addEventListener('beforeunload', confirmExit);
}

function forceCloseAddWebsiteForm() {
    const modal = document.getElementById('addPersonalInfoModalWebsite');
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

function toggleDropdown() {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('hidden');
}