<!DOCTYPE html>
<html lang='ru'>
<?php $siteTitle = 'ПОШУКАВЧИК';
    require 'blocks/header.php'?>
<section class="jumbotron mu-2 text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Хочете отримати наші послуги?</h1>
        <p class="lead text-muted">Зв'яжіться з нами через будь-яку соціальну мережу, чи за поштою.</p>
    </div>
</section>
<section class="contact">
    <div class="container">
        <div class="row">
            <h2 data-sr="wait 0.5s, then enter top and move 40px over 1s">
                <span>Зв'яжіться з нами</span>
            </h2>

            <div class="col-md-12">
                <div id="note"></div>

                <div id="fields">

                    <form id="ajax-contact-form">
                        <input type="text" name="name" id="name" placeholder="Ім'я" value="" data-sr="enter left move 25px, after 0.3s"/>
                        <input type="email" name="email" id="email" placeholder="Email" value="" data-sr="enter right move 25px, after 0.3s"/>
                        <textarea name="message" id="message" placeholder="Повідомлення"  data-sr="enter bottom move 25px, after 0.3s"></textarea>
                        <input type="submit" name="submit" id="submit" value="Надіслати" data-sr="wait 0.8s, then enter top and move 40px after 0.3s"/>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="google-map">
    <div class="map-conteiner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82352.6710147787!2d23.942195934634967!3d49.83266794933816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473add7c09109a57%3A0x4223c517012378e2!2z0JvRjNCy0L7Qsiwg0JvRjNCy0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA3OTAwMA!5e0!3m2!1sru!2sua!4v1587897332379!5m2!1sru!2sua" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <address data-sr="wait 0.25s, then enter left and move 40px over 1s">
                        <i class="fa fa-map-marker"></i> Lviv, Ukraine
                    </address>

                    <div class="phone" data-sr="wait 0.25s, then enter top and move 40px over 1s">
                        <i class="fa fa-mobile"></i> +38(066)252-95-10
                    </div>

                    <div class="email" data-sr="wait 0.25s, then enter right and move 40px over 1s">
                        <i class="fa fa-envelope"></i> <a href="poshukavchyk@gmail.com">evheeen@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require 'blocks/footer.php'?>
</html>