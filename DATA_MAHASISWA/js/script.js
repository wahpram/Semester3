let nim = document.getElementById("NIM");
let namamhs = document.getElementById("Namamhs");
let alamatmhs = document.getElementById("Alamatmhs");
let kontakmhs = document.getElementById("Kontakmhs");

let button = document.querySelector("#submit");

let nim_error = document.getElementById("nim-error");
let nama_error = document.getElementById("nama-error");
let alamat_error = document.getElementById("alamat-error");
let kontak_error = document.getElementById("kontak-error");

nim.addEventListener("keyup", checknim);
namamhs.addEventListener("keyup", checknama);
alamatmhs.addEventListener("keyup", checkalamat);
kontakmhs.addEventListener("keyup", checkkontak);

button.addEventListener("click", Action);

function Action(x){
    if (checknim() == false || checknama() == false || 
        checkalamat() == false || checkkontak() == false) {
            
        alert("Data Masih Salah");
        x.preventDefault();
    }
}

// function Action(x){
//     if (nim_error.classList.contains("visibility-show") || 
//         nama_error.classList.contains("visibility-show") || 
//         alamat_error.classList.contains("visibility-show") || 
//         kontak_error.classList.contains("visibility-show")) {
            
//         alert("Data Masih Salah");
//         x.preventDefault();
//     }
// }

function checknim(x){
    let regex = /^[^\s]{9,9}[0-9]$/

    if (regex.test(nim.value)) {
        nim_error.classList.add("visibility-hide");
        nim_error.classList.remove("visibility-show");

        return true;
    }
    else{
        nim_error.classList.remove("visibility-hide");
        nim_error.classList.add("visibility-show");

        return false;
    }
}

function checknama(x) {
    let regex = /^[^\s][a-zA-Z ]*$/

    if (regex.test(namamhs.value)) {
        nama_error.classList.add("visibility-hide");
        nama_error.classList.remove("visibility-show");

        return true;
    }
    else{
        nama_error.classList.remove("visibility-hide");
        nama_error.classList.add("visibility-show");

        return false;
    }
}

function checkalamat(x){
    let regex = /^[^\s][a-zA-Z0-9 ]*$/

    if (regex.test(alamatmhs.value)) {
        alamat_error.classList.add("visibility-hide");
        alamat_error.classList.remove("visibility-show");

        return true;
    }
    else{
        alamat_error.classList.remove("visibility-hide");
        alamat_error.classList.add("visibility-show");

        return false;
    }
}

function checkkontak(x){
    let regex = /^[^\s][0-9]*$/

    if (regex.test(kontakmhs.value)) {
        kontak_error.classList.add("visibility-hide");
        kontak_error.classList.remove("visibility-show");

        return true;
    }
    else{
        kontak_error.classList.remove("visibility-hide");
        kontak_error.classList.add("visibility-show");

        return false;
    }
}