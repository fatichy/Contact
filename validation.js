
$('#formvalide').validate({
rules:{
    name:{
       required: true,
       minlength:5
    },
    email:{
        email: true
    },
    formessage:{
        required: true,
        minlength:20
    }
  },
messages: {
    name:"entrer votre nom svp",
        // minlengh: 'le nom doit contenir au moins 5 lettre '
    
    email:{
        required:"entrer votre email svp"
    },
    formessage: {
        required:"entrer votre message svp",

        minlength: 'Le message doit contenir au moins 20 caractères'
     }
    },

submitHandler : function(form){
    form.submit();
    }

})