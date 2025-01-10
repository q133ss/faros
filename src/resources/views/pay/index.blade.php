@extends('layouts.app')
@section('title', 'Оплата')
@section('content')
    <div class="pay _bgBlack6 _first">
        <div class="pay__logoBlock">
            <a href="../index.html" class="pay__logoBlock__logoWrap">
                <img src="../images/min/logourl.svg" alt="" class="pay__logoBlock__logoWrap__ico"/>
            </a>

            <img src="../images/min/icons/closegray.svg" alt="" class="pay__logoBlock__close"/>

            <a href="../index.html" class="pay__logoBlock__logoWrap">
                <img src="../images/min/pay/tinkov.svg" alt="" class="pay__logoBlock__logoWrap__tinkov"/>
            </a>
        </div>
        <h1 class="pay__title _colorWhite"><span class="_colorYellow">Faros.Media</span> - команда
            профессионалов в сфере управления восприятия бренда</h1>

        <picture class="pay__pic">
            <source type="image/webp" srcset="/images/min/pay/payBG.webp">
            <img src="../images/min/pay/payBG.png" class="absolute-full">
        </picture>

        <div class="pay__bottom">
            <p class="pay__bottom__text">Предоставляемая Вами персональная информация (имя, телефон, e-mail,
                номер кредитной карты) является конфиденциальной и не подлежит разглашению. Данные Вашей
                кредитной карты передаются только в зашифрованном виде и не сохраняются на нашем
                Web-сервере.<br/>В случае возникновения вопросов по поводу данной конфиденциальности
                предоставляемой Вами информации, Вы можете связаться с АО «Тинькофф Банк» по телефону: <a
                    href="tel:88005557778" class="pay__bottom__text__link">8(800)555-7-778</a></p>
            <p class="pay__bottom__text">Безопасность обработки Интернет-платежей гарантирует АО «Тинькофф
                Банк». Все операции с платежными картами происходят в соответствии с требованиями VISA
                International, MasterCard и других платежных систем.При передаче информации используется
                специальные технологии безопасности карточных онлайн-платежей, обработка данных ведется на
                безопасном высокотехнологичном сервере процессинговой компании.</p>
        </div>
    </div>

    <!--full height, form START-->
    <div class="formBlockWrap _bgWhite formBlockWrap__pay">
        <h1 class="formBlockWrap__pay__title _colorBlack">Безопасная оплата услуг</h1>

        <div class="grow-full"></div>

        <form action="index.html#" class="formBlock">
            <div class="formBlock__top">
                <div class="formBlock__top__wrap">
                    <input type="text" class="formBlock__input" placeholder="Введите сумму платежа"
                           value=""/>
                    <img class="formBlock__top__wrap__ico" src="../images/min/icons/err.svg"/>
                </div>
                <div class="formBlock__top__wrap">
                    <input type="text" class="formBlock__input" placeholder="ФИО плательщика"/>
                    <img class="formBlock__top__wrap__ico" src="../images/min/icons/err.svg"/>
                </div>
                <div class="formBlock__top__wrap">
                    <input type="text" class="formBlock__input phone_mask" placeholder="Ваш номер телефона"/>
                    <img class="formBlock__top__wrap__ico" src="../images/min/icons/err.svg"/>
                </div>
                <div class="formBlock__top__wrap error">
                    <input type="email" class="formBlock__input" placeholder="Email"/>
                    <!--                <img class="formBlock__top__wrap__ico" src="/images/min/icons/err.svg"/>-->
                </div>
                <div class="formBlock__top__wrap">
                    <input type="text" class="formBlock__input" placeholder="Комментарий"
                           value=""/>
                    <img class="formBlock__top__wrap__ico" src="../images/min/icons/err.svg"/>
                </div>
            </div>

            <div class="formBlock__footer">
                <button type="submit" class="button formBlock__footer__button">ОПЛАТИТЬ</button>
                <p class="formBlock__footer__text _colorGray14">Все платежи защищены сквозным шифрованием.</p>
            </div>
        </form>

        <div class="grow-full"></div>

        <div class="formBlockWrap__pay__footer">
            <div class="formBlockWrap__pay__footer__wrap">
                <div class="formBlockWrap__pay__footer__wrap__link formBlockWrap__pay__footer__wrap__link_first">
                    <picture class="formBlockWrap__pay__footer__wrap__link__pic">
                        <source type="image/webp" srcset="/images/min/pay/visa.webp">
                        <img src="../images/min/pay/visa.png">
                    </picture>
                </div>

                <div class="formBlockWrap__pay__footer__wrap__link formBlockWrap__pay__footer__wrap__link_second">
                    <picture class="formBlockWrap__pay__footer__wrap__link__pic">
                        <source type="image/webp" srcset="/images/min/pay/mastercart.png">
                        <img src="../images/min/pay/mastercart.png">
                    </picture>
                </div>

                <div class="formBlockWrap__pay__footer__wrap__link formBlockWrap__pay__footer__wrap__link_thrid">
                    <picture class="formBlockWrap__pay__footer__wrap__link__pic">
                        <source type="image/webp" srcset="/images/min/pay/mir.webp">
                        <img src="../images/min/pay/mir.png">
                    </picture>
                </div>
            </div>
        </div>
    </div>
    <!--full height, form END-->
@endsection
