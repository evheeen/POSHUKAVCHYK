<div class="cart__form cart__form--mt35">
    <div class="cart__form-data" style="min-width: 32%;">
        <div class="cart__form-label">Данні про товар</div>
        <div class="cart__form-inputs">
            <div class="cart__input-wrapper">
                <label>ID товара</label>
                <input id="goodsId" readonly="" type="text">
            </div>
            <div class="cart__input-wrapper">
                <label>Назва товара</label>
                <input id="title" readonly="" type="text">
            </div>
            <div class="cart__input-wrapper">
                <label>Ціна</label>
                <input id="price" readonly="" type="text">
            </div>
        </div>
    </div>
    <div class="cart__form-data" style="min-width: 32%;">
        <div class="cart__form-label">Данні покупця</div>
        <div class="cart__form-inputs">
            <div class="cart__input-wrapper">
                <input id="nameInfo" placeholder="Введіть ПІП" value="">
            </div><div class="cart__input-wrapper">
                <input id="phone" placeholder="Введіть номер телефона" type="tel" value="+380">
            </div>
        </div>
    </div>
    <div class="cart__form-data" style="min-width: 32%;">
        <div class="cart__form-label">Доставка та оплата</div>
        <div class="cart__form-inputs">
            <div class="cart__input-wrapper">
                <div style="width: 100%;">
                    <div class="input-group mb-3">
                        <select id="delivery" class="custom-select" id="inputGroupSelect01">
                            <option selected>Виберіть тип доставки</option>
                            <option value="Нова Пошта">Нова Пошта</option>
                            <option value="Нова Пошта + кур'єр">Нова Пошта + кур'єр</option>
                            <option value="Укрпошта">Укрпошта</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="cart__input-wrapper">
                <div style="width: 100%;">
                    <div class="input-group mb-3">
                        <select id="payment" class="custom-select" id="inputGroupSelect02">
                            <option selected>Виберіть тип оплати</option>
                            <option value="Оплата при отримані">Оплата при отримані</option>
                            <option value="Повна передоплата (NovaPay)">Повна передоплата (NovaPay)</option>
                            <option value="Повна передоплата (PrivatBank)">Повна передоплата (PrivatBank)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="cart__input-wrapper">
                <div style="width: 100%;">
                    <div class="input-group mb-3">
                        <select id="city" class="custom-select" id="inputGroupSelect03">
                            <option selected>Виберіть місто</option>
                            <option value="Львів">Львів</option>
                            <option value="Київ">Київ</option>
                            <option value="Харків">Харків</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="cart__input-wrapper">
                <div style="width: 100%; position: relative;">
                    <input id="postDepartment" placeholder="Введіть номер поштового відділення" value="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart__form cart__form--mb35">
    <div class="cart__form-comment" style="width: 75%; position: relative;">
        <div class="cart__form-inputs">
            <div class="cart__input-wrapper">
                <input id="comment" placeholder="Коментар до замовлення" value="">
            </div>
        </div>
    </div>
</div>