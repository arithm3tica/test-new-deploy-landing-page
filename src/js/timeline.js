const TimeLine =(function() {
    const years = document.querySelectorAll('.timeline .year');
    const monthMargin = 60;

    for (let year of years) {
        const points = year.querySelectorAll('.point');

        let left = true;
        let lastPointMonth = -1;
        for (let point of points) {
            let month = parseInt(point.dataset.month);
            let margin = 0;
            if (lastPointMonth > -1) {
                margin = (month - lastPointMonth - 1) * monthMargin;
                if (!left) {
                    margin += monthMargin;
                }
            }
            lastPointMonth = month;
            point.classList.add('content-' + (left ? 'left' : 'right'));
            point.style.marginTop = margin + 'px';
            left = !left;
        }
    }


})();