const expresion = {
  usuario: /^[a-zA-Z0-9\_\-]{5,30}$/g,
};

const usuario = document.querySelector("#usuario");
let usuario_bandera = true;
const password = document.querySelector("#password");
const usuario_error = document.querySelector(".cajatexto__usuario-error");
const password_error = document.querySelector(".cajatexto__password-error");
const cajaicono_user = document.querySelector("#grupo__usuario .cajaicono");
const cajaicono_password = document.querySelector(
  "#grupo__password .cajaicono"
);

function validated_user() {
  console.log(usuario.value);
  if (!!expresion.usuario.exec(usuario.value)) {
    console.log(!!expresion.usuario.exec(usuario.value));
    usuario.classList.remove("active");
    cajaicono_user.classList.remove("active_icono");
    cajaicono_user.classList.add("normal");
    usuario_error.style.display = "none";
    console.log("desactivado");
  } else {
    console.log(!!expresion.usuario.exec(usuario.value));
    usuario.classList.add("active");
    cajaicono_user.classList.remove("normal");
    cajaicono_user.classList.add("active_icono");
    usuario_error.style.display = "block";
    console.log("activado");
  }
}
function validated_password() {
  if (password.value.length == 0) {
    password.classList.add("active");
    cajaicono_password.classList.remove("normal");
    cajaicono_password.classList.add("active_icono");
    password_error.style.display = "block";
  } else {
    password.classList.remove("active");
    cajaicono_password.classList.remove("active_icono");
    cajaicono_password.classList.add("normal");
    password_error.style.display = "none";
  }
}
usuario.addEventListener("keyup", validated_user);
usuario.addEventListener("blur", validated_user);
