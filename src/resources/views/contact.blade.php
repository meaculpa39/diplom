
@include('widgets.head')

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h1 class="edica-page-title" data-aos="fade-up">Контакты</h1>
                <section class="edica-contact py-5 mb-5">
                    <div class="row">
                        <div class="col-md-8 contact-form-wrapper">
                            <h5 data-aos="fade-up">Форма обратной связи</h5>
                            <div class="row">
                                <div class="form-group col-md-6" data-aos="fade-up">
                                    <label for="name">Имя</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Ваше полное имя">
                                </div>
                                <div class="form-group col-md-6" data-aos="fade-up">
                                    <label for="phone">Телефон</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                           placeholder="Ваш номер телефона">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <label for="email">Почта</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Ваша почта">
                                </div>
                                <div class="form-group col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <label for="subject">Тема</label>
                                    <input type="text" class="form-control" id="subject" name="subject"
                                           placeholder="Тема">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up" data-aos-delay="200">
                                    <label for="message">Сообщение</label>
                                    <textarea name="message" id="message" rows="9"
                                              class="form-control">Ваше сообщение</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning btn-lg" data-aos="fade-up"
                                    data-aos-delay="300">Отправить сообщение
                            </button>
                        </div>
                        <div class="col-md-4 contact-sidebar" data-aos="fade-left">
                            <h5>Свяжитесь с нами</h5>
                            <p>Нужна помощь? Наша служба поддержки клиентов готова помочь вам с понедельника по пятницу
                                с 9:00 до 22:00.</p>
                            <p>56 Казахстан<br></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@include('widgets.footer')
</body>

</html>
