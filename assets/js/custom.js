const buttons = document.querySelectorAll('.primary-cta');
buttons.forEach(btn => {
    btn.addEventListener('click', () => {
        console.log('Primary CTA clicked');
        btn.textContent = 'PROCEEDING TO CHECKOUT...';
        btn.location.href='https://conversionsovereverything.com/checkout/?add-to-cart=176';
        // btn.window.location.href='https://conversionsovereverything.com/checkout/?add-to-cart=176';
    });
});