<form action="#" class="formBlock" id="feedback">
    <div class="formBlock__top">
        <p class="formBlock__title _colorBlack">Чтобы оставить заявку на звонок, пожалуйста, заполните бриф</p>

        <select class="formBlock__top__sel _noVis768" id="mainFormServicies" name="services[]">
            <option value="" disabled selected>Выберите тип услуги</option>
            <option value="1"
            >комплексный ORM</option>
            <option value="2"
            >работа с Яндекс/Google-картами</option>
            <option value="3"
            >комплексный SERM</option>
            <option value="4"
            >PR</option>
            <option value="5"
            >аналитика и стратегия</option>
            <option value="6"
            >просто поработать с отзывами</option>
            <option value="7"
            >корпоративное обучение репутационному менеджменту</option>
            <option value="8"
            >ситуация на Otzovik, Irecommend и других сайтах</option>
        </select>

        <input type="text" name="name" pattern="^[A-Za-zА-Яа-яЁё\s]+$" class="formBlock__input"
               placeholder="Как к Вам обращаться?" required/>
        <input type="email" name="email" class="formBlock__input" placeholder="Адрес корпоративной почты" required/>
        <input type="text" name="phone" class="formBlock__input phone_mask" placeholder="Ваш номер телефона"
               required/>
        <input type="text" name="site" class="formBlock__input" placeholder="Сайт или название компании" required/>
    </div>

    <div class="grow-full formBlock__FGAftertop"></div>

    <div class="formBlock__checkBlock formBlock__checkBlock_mb formBlock__checkBlock_fullHeight400 _noVisMax768">
        <p class="formBlock__checkBlock__title">Выберите тип услуги</p>
        <div class="formBlock__checkBlock__wrap">
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check284" name="services[]" value="1" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check284" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>комплексный ORM</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check285" name="services[]" value="2" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check285" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>работа с Яндекс/Google-картами</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check286" name="services[]" value="3" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check286" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>комплексный SERM</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check287" name="services[]" value="4" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check287" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>PR</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check288" name="services[]" value="5" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check288" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>аналитика и стратегия</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check289" name="services[]" value="6" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check289" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>просто поработать с отзывами</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check290" name="services[]" value="7" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check290" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>корпоративное обучение репутационному менеджменту</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check291" name="services[]" value="8" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"
                />
                <label for="check291" class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>ситуация на Otzovik, Irecommend и других сайтах</span>
                </label>
            </div>
        </div>
    </div>

    <div class="formBlock__checkBlock formBlock__checkBlock_mb _noVisMax768">
        <p class="formBlock__checkBlock__title">С какой проблемой Вы столкнулись</p>

        <div class="formBlock__checkBlock__wrap">
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check-problem-0" name="problems[]" value="1" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"/>
                <label for="check-problem-0"
                       class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>репутационный кризис</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check-problem-1" name="problems[]" value="2" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"/>
                <label for="check-problem-1"
                       class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>проблемы HR-бренда</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check-problem-2" name="problems[]" value="3" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"/>
                <label for="check-problem-2"
                       class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>снижение выручки и уровня продаж</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check-problem-3" name="problems[]" value="4" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"/>
                <label for="check-problem-3"
                       class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>низкая узнаваемость</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check-problem-4" name="problems[]" value="5" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"/>
                <label for="check-problem-4"
                       class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>вывод нового продукта на рынок</span>
                </label>
            </div>
            <div class="formBlock__checkBlock__wrap__item _colorBlack">
                <input id="check-problem-5" name="problems[]" value="6" type="checkbox"
                       class="formBlock__checkBlock__wrap__item__inp"/>
                <label for="check-problem-5"
                       class="formBlock__checkBlock__wrap__item__lab _colorBlack">
                    <span>корректировка восприятия и стереотипов</span>
                </label>
            </div>
        </div>
    </div>

    <div class="grow-full"></div>

    <div class="formBlock__footer">
        <button type="submit" class="button formBlock__footer__button">Отправить</button>
        <p class="formBlock__footer__text _colorGray14">Нажимая “Отправить”, вы соглашаетесь с <a target="_blank"
                                                                                                  href="/Политика_в_отношении_обработки_персональных_данных.pdf"
                                                                                                  class="formBlock__footer__text__link _colorBlack">Политикой конфиденциальности</a></p>
    </div>
</form>
