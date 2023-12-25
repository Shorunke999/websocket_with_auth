import './bootstrap';
///getting input from ui and sending it to our endpoint...if-when we send data to endpoint, our event should be triggered at the backend to the the channel
const channel = Echo.join('pushing_channel');
channel.here(()=>{
    console.log('succesfully connected to channel');
    });
//let a = false;
form.addEventListener('submit',(e)=>{
   e.preventDefault();
   const form = document.getElementById('form');
   const input = document.getElementById('input');
   const as =  input.value;
   console.log(as);
   axios.post('/message', { message: as })
   .then(response => {
      console.log('message handled');
      // Handle successful response here, if needed
    })
    .catch(error => {
        if (error.response) {
           console.error('Response data:', error.response.data);
           console.error('Response status:', error.response.status);
           console.error('Response headers:', error.response.headers);
        } else if (error.request) {
           console.error('No response received');
        } else {
           console.error('Error message:', error.message);
        }
     });
});
    //echo object 
   /* if (!a){
      channel.listen('messag_event', (e)=>{
      console.log(e);
      const Li = document.createElement('li');
      const ultag = document.getElementById('ul');
      const newmessage = e.message;
      Li.textContent = newmessage;
      ultag.append(Li);
         });//end of echo object.
   }
   a = true;*/

