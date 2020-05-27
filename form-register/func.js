function saveContact(element, id_users){
    var id_contact = $(element).parent().index();
    var content = $(element).parent()[0].childNodes[1].textContent;
    var phoneNumber = $(element).parent()[0].getElementsByClassName('phoneNumber')['0'].textContent;
    var street = $(element).parent()[0].getElementsByClassName('street')['0'].textContent;
    var mail = $(element).parent()[0].getElementsByClassName('mail')['0'].textContent;
    
    $.ajax({
            url: 'contact.php',
            type: 'POST',
            data: {
                "id_contact":id_contact, 
                "id_users":id_users,
                "content":content,
                "phoneNumber":phoneNumber,
                "street":street,
                "mail":mail,
                
            },
    });
    console.log('id_users - ', id_users);
    console.log('content - ', content);
    console.log('phoneNumber - ', phoneNumber);
    console.log('street - ', street);
    console.log('mail - ', mail);
}

