let btn_connect = document.querySelector('#btn_connection');
btn_connect.addEventListener("click",display);

let btn_reg = document.querySelector('#btn_registration');
btn_reg.addEventListener("click",display);

let form_connection = document.querySelector('#form_connection');
let form_registration = document.querySelector('#form_registration');
form_connection.style.display = 'none';
form_registration.style.display = 'none';

console.log(document.querySelector('#form_connection').id);

function display() {

    form = (this.id === 'btn_connection' ? form_connection : form_registration);
    other = form === form_connection ? form_registration : form_connection;

    form.style.display = form.style.display === 'none' ? 'block':'none';
    other.style.display = 'none';

}
