const getBtnSubmit = document.querySelector('.btnSubmit');
const getName = document.querySelector('.input-style.name');
const getDescription = document.querySelector('.input-style.description');
const getValue = document.querySelector('.render-feeback')
getBtnSubmit.onclick = function (){
    getValue.querySelectorAll('div')
    let feedback = `
    <div class="col l-6 c-12">
    <div class="customer">
        <div class="rating">
            <a href="" class="rating-link"><i class="fas fa-star"></i></a>
            <a href="" class="rating-link"><i class="fas fa-star"></i></a>
            <a href="" class="rating-link"><i class="fas fa-star"></i></a>
            <a href="" class="rating-link"><i class="fas fa-star"></i></a>
            <a href="" class="rating-link"><i class="fas fa-star"></i></a>
        </div>
        <span class="review-desc">${getDescription.value}</span>
        <div class="user">
            <img class="avata-user" src="./assets/images/pic-1.png" alt="">
            <div class="user-info">
                <h1 class="name-user">${getName.value}</h1>
                <span class="feel-user">Happy Customer</span>
            </div>
            <span class="quote-right"><i class="fas fa-quote-right"></i></span>
        </div>

    </div>
</div>
    `
    getValue.insertAdjacentHTML('beforeend',feedback);
}