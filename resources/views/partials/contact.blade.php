<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Kontaktirajte nas!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>Ukoliko imate bilo kakva pitanja, pošaljite nam poruku, odgovorićemo Vam u najbržem roku!</p>
                    </div>
<!-- 
                    <div class="phone-text">
                        <p><span>Phone:</span> +381-66-123-321</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> info.tronozac@gmail.com</p>
                    </div> -->
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="{{ route ('contact.submit') }}" method="POST">
                            @csrf
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="contact_name" id="contact_name" placeholder="Ime i prezime" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="contact_email" id="contact_email" placeholder="Vaša E-mail adresa" required>
                                            <small  class="form-text text-muted">Ne delimo Vašu e-mail adresu i ostale podatke sa drugima</small>

                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="contact_message" class="form-control" id="contact_message" cols="30" rows="4" placeholder="Vaša poruka.. *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Pošalji</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>