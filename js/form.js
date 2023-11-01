const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const age = document.getElementById('age');
const birthdate = document.getElementById('birthdate');
const lrn = document.getElementById('lrn');
const street = document.getElementById('street');
var student_form = document.getElementById('student_form');
var error = document.getElementById('error');



student_form.addEventListener('submit', (e) => {
    if (fname.value === '' || fname.value == null) {
        e.preventDefault();
        error.classList.add('text-red-500', 'text-xs');
        fname.classList.add('error-form');
    } else {
        e.preventDefault();
        fname.classList.replace('error-form', 'success-form');
    }

    if (lname.value === '' || lname.value == null) {
        e.preventDefault();
        error.classList.add('text-red-500', 'text-xs');
        lname.classList.add('error-form');
    } else {
        e.preventDefault();
        lname.classList.replace('error-form', 'success-form');
    }

    if (age.value === '' || age.value == null) {
        e.preventDefault();
        error.classList.add('text-red-500', 'text-xs');
        age.classList.add('error-form');
    } else {
        e.preventDefault();
        age.classList.replace('error-form', 'success-form');
    }

    if (birthdate.value === '' || birthdate.value == null) {
        e.preventDefault();
        error.classList.add('text-red-500', 'text-xs');
        birthdate.classList.add('error-form');
    } else {
        e.preventDefault();
        birthdate.classList.replace('error-form', 'success-form');
    }

    if (lrn.value === '' || lrn.value == null) {
        e.preventDefault();
        error.classList.add('text-red-500', 'text-xs');
        lrn.classList.add('error-form');
    } else {
        e.preventDefault();
        lrn.classList.replace('error-form', 'success-form');
    }

    if (street.value === '' || street.value == null) {
        e.preventDefault();
        error.classList.add('text-red-500', 'text-xs');
        street.classList.add('error-form');
    } else {
        e.preventDefault();
        street.classList.replace('error-form', 'success-form');
    }
    if (fname !== '') {
        alert("Form Submitted Successfully");
    }


});