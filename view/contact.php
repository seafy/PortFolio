<?php 

include '../view/partials/header.php';

include '../view/partials/sidenav.php';
?>

<section>
 <h1 class="text-white text-center">Contacte Moi</h1>
 <hr class="hr bg-info">
</section>

<div class="container">
   <div class="contact-us">
       <div class="container">
          <div class="contact-form">
           <div class="row">
               <div class="col-sm-7">                  
                    <form id="ajax-contact"  method="post" action="contact-form-mail.php" role="form">
                        <div class="messages" id="form-messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Prénom *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Nom *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Mobile *</label>
                                        <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder="Please enter your phone*" required oninvalid="setCustomValidity('Plz enter your correct phone number ')"
    onchange="try{setCustomValidity('')}catch(e){}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-black" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                   <br>
                                    <small class="text-muted"><strong>*</strong> These fields are required.</small>
                                </div>
                            </div>
                        </div>

                    </form>
    
               </div>
               <div class="col-sm-5 text-white">
                   <div class="row col1">
                       <div class="col-xs-3 ml-3">
                         <i class="material-icons">home</i>  Address 
                       </div>
                       <div class="col-xs-9 ml-5">
                            94 Rue Léon Marlot,<br> Roubaix, 59100
                       </div>
                   </div>
                   
                    <div class="row col1">
                        <div class="col-sm-3">
                          <i class="material-icons">smartphone</i>   Mobile
                        </div>
                        <div class="col-sm-9">
                             +3 66 88 32 79 68
                        </div>
                    </div>
                    <div class="row col1">
                        <div class="col-sm-3">
                          <i class="material-icons">print</i>    Fax  
                        </div>
                        <div class="col-sm-9">
                              123 123 4567
                        </div>
                    </div>
                    <div class="row col1">
                        <div class="col-sm-3">
                          <i class="material-icons">email</i>   Email
                        </div>
                        <div class="col-sm-9">
                             <a href="mailto: vhasquette@gmail.com.com">vhasquette@gmail.com</a>                        </div>
                    </div><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2528.4529210205146!2d3.189742515739494!3d50.67441737950688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3287cf91e104f%3A0xa6ae6585f5725be4!2sA.d.e.p.!5e0!3m2!1sen!2sfr!4v1496334534530" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
           </div>
           
          </div>
       </div>
   </div>

</div>


<?php 
include '../view/partials/footer.php';

 ?>