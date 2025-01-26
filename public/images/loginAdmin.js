const labelEmail = document.querySelector(".labelEmail")
const email = document.querySelector("#email")
const labelmotDePasse = document.querySelector(".labelmotDePasse")
const motDePasse = document.querySelector("#motDePasse")
const form = document.querySelector("form")
const btnAdmin = document.querySelector(".btnAdmin")


// email
email.addEventListener("input",()=>{
    const regex = /^[a-zA-Z\d]+[@][a-zA-Z]+[.][a-zA-Z]{2,3}$/
    // const regex = /^[\w]+[@][a-zA-Z]+[.][a-zA-Z]{2,3}]$/

    if(email.value){
        let mailaka = "lalaina@gmail.com"
        if(regex.test(email.value) && email.value == mailaka){
            labelEmail.textContent = "Votre email"
            labelEmail.style.color = "deeppink"
        }else{
            labelEmail.textContent = "Email invalide"
            labelEmail.style.color = "red"
        }
    }else{
        labelEmail.textContent = "Votre email"
    }
})

motDePasse.addEventListener("input",()=>{

    const regex = /^(?=.*?[\d]{2})(?=.*?[#@$&?$*]{1})(?=.*?[a-z])(?=.*?[A-Z]{1}).{8}$/
    if(motDePasse.value){
        let mdp = "08*Marie"
        if(regex.test(motDePasse.value) && motDePasse.value == mdp){
            labelmotDePasse.textContent = "Votre mot de passe "
            labelmotDePasse.style.color = "deeppink"

        }else{
            labelmotDePasse.textContent = "Mot de passe invalide "
            labelmotDePasse.style.color = "red"
        }
    }else{
        labelmotDePasse.textContent =" Votre mot de passe "
        labelmotDePasse.style.color = "deeppink"

    }
})

const p_erreur = document.querySelector(".p_erreur")
btnAdmin.addEventListener("click",(e)=>{
    e.preventDefault();
    let mdp = "08*Marie"
    let mailaka = "lalaina@gmail.com"
    if (( motDePasse.value == mdp) && (email.value == mailaka)){ 

        p_erreur.style.display ="block"
        p_erreur.textContent = "Patientez"
        p_erreur.style.color ="blue"
        btnAdmin.href = "index.html"
    }else{
        p_erreur.style.display ="block"
    }
    form.reset()
    
})