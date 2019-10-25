$(function () {

    var cardholderName = $('#owner');
    var cardNumber = $('#cardNumber');
    var cardNumberField = $('#card-number-field');
    var cardholderNameField = $('.form-group.owner');
    var cvvField = $('.form-group.CVV');
    var CVV = $("#cvv");
    var mastercard = $("#mastercard");
    var confirmButton = $('#confirm-purchase');
    var visa = $("#visa");
    var amex = $("#amex");

    cardNumber.payform('formatCardNumber');
    CVV.payform('formatCardCVC');


    cardNumber.keyup(function () {
        amex.removeClass('transparent');
        visa.removeClass('transparent');
        mastercard.removeClass('transparent');

        if ($.payform.validateCardNumber(cardNumber.val()) == false) {
            cardNumberField.addClass('has-error');
        } else {
            cardNumberField.removeClass('has-error');
            cardNumberField.addClass('has-success');
        }

        if ($.payform.parseCardType(cardNumber.val()) == 'visa') {
            mastercard.addClass('transparent');
            amex.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'amex') {
            mastercard.addClass('transparent');
            visa.addClass('transparent');
        } else if ($.payform.parseCardType(cardNumber.val()) == 'mastercard') {
            amex.addClass('transparent');
            visa.addClass('transparent');
        }
    });

    CVV.keyup(function () {
        if ($.payform.validateCardCVC(CVV.val()) == false) {
            cvvField.addClass('has-error');
        } else {
            cvvField.removeClass('has-error');
            cvvField.addClass('has-success');
        }
    });

    cardholderName.keyup(function () {
        if (!validateCardholderName(cardholderName.val())) {
            cardholderNameField.addClass('has-error');
        } else {
            cardholderNameField.removeClass('has-error');
            cardholderNameField.addClass('has-success');
        }
    });

    confirmButton.click(function (e) {
        e.preventDefault();
        const name = cardholderName.val();
        const number = cardNumber.val();
        const cvv = CVV.val();
        const isCardValid = $.payform.validateCardNumber(number);
        const isCvvValid = $.payform.validateCardCVC(cvv);

        if (number === "") {
            cardNumberField.addClass('has-error');
        }
        if (cvv === "") {
            cvvField.addClass('has-error');
        }
        if (name === "") {
            cardholderNameField.addClass('has-error');
        }


        if (!isCardValid) {
            cardNumberField.addClass('has-error');
        } else if (!isCvvValid) {
            cvvField.addClass('has-error');
        } else if (!validateCardholderName(name)) {
            cardholderNameField.addClass('has-error');
        } else {
            alert("You have successfully paid 4.99 AUD!");
            cardholderName.val("");
            cardNumber.val("");
            CVV.val("");
            cardholderNameField.removeClass('has-success');
            cardNumberField.removeClass('has-success');
            cvvField.removeClass('has-success');
        }
    });

    function validateCardholderName(name) {
        var cardHolderNameRegex = /^[a-z ,.'-]+$/i;

        return cardHolderNameRegex.test(name);
    };
});
