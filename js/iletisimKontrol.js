const isim = document.getElementById('isim')
const soyisim = document.getElementById('soyisim')
const email = document.getElementById('email')
const ceptelefonu = document.getElementById('telefon')
const mesaj = document.getElementById('mesaj')
const hataElementi = document.getElementById('hata')

form.addEventListener('submit',(e) => {
    let messages = []
    if (isim.value == "" || isim.value == null){
        messages.push('isim doldurulmalıdır')
    }
    else if (soyisim.value == "" || soyisim.value == null){
        messages.push('soyisim doldurulmalıdır')
    }
    else if (email.value == "" || email.value == null){
        messages.push('e-mail doldurulmalıdır')
    }
     else if (mesaj.value == "" || mesaj.value == null){
        messages.push('mesaj yazılmalıdır')
    }

    
    
    if(messages.length > 0){
        e.preventDefault()
        hataElementi.innerText = messages.join(', ')
    }
})


