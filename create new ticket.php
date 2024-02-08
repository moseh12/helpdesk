<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>open tickets</title>
    <link rel="stylesheet" href="tickets.css">
    </head>
    <body>
        <div class="tickets form">
            <form onsubmit="sendEmail(); reset(); return false;">
                <label for "name">Your name</label>
                <input type="text"  name="full name"  placeholder="your name...">
                <label for "email">Your email</label>
                <input type="text"  name="email"  placeholder="your email...">
                <label for "phonenumber">Your phone number</label>
                <input type="text"  name="phone number"  placeholder="your phone number...">
                
                <label for "ticketsubject">Ticket subject</label>
                 <select id="ticketsubject" name="ticketsubject">
                    
                     <option value="feedback">feedback</option>
                     <option value="General enquiry">General enquiry</option>
                     <option value="Hardware">Hardware</option>
                     <option value="Software">Software</option>
                     <option value="Network/internet">Network/internet</option>
                     <option value="POS device support">Pos device support</option>
                     <option value="Report a problem">Report a problem</option>
                    
                     </select>
                     <label for "ticket priority">Ticket priority</label>
                     <select id="ticketpriority"name="ticketpriority">
                        >
                        <option value="low">low</option>
                        <option value="high">high</option>
                        <option value="medium">medium</option>
                        <option value="urgent">urgent</option>
                
                        </select>
                        <label for "Ticket details">ticket details</label>
                <textarea id="message" rows="4" placeholder="Please describe your issue" ></textarea>                
                        <input type="submit" value="send">
                          
                
                
            </form>
        </div>
        <script src=" https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){
                Email.send({
    Host : "smtp.gmail.com",
    Username : "immaculaterabuogi@gmail.com",
    Password : "ooboongi@gmail.com",
    To : 'irabuogi@gmail.com',
    From : document.getElementById("email").value,
    Subject : "New Ticket",
    Body : "Name: " + document.getElementById("name").value
    +"<br> Email:"  + document.getElementById("email").value
    +"<br> phone number:"  + document.getElementById("phone").value
    +"<br> Message:"  + document.getElementById("message").value 
}).then(
  message => alert("message sent succesfully")
);
            }
        </script>

    </body>
    </html>