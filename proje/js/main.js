Push.create("Tebrikler", {
    body: "Isleminiz Basariyla Gerceklestirildi",
    icon: 'images/wp.png',
    timeout: 2000,
    onClick: function () {
        window.focus();
        this.close();
    }
});